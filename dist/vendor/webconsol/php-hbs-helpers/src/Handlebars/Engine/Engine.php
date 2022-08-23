<?php

namespace Handlebars\Engine;

use Handlebars\Handlebars;
use Handlebars\Processors\Processor;

class Engine extends Handlebars
{
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        Loader::load($this);
    }

    public function render($template, $context)
    {
        if (file_exists($template)) {
            $template = file_get_contents($template);
        }
        $processor = '\\Handlebars\\Processors\\'.Hbs::getProcessor();
        $processor = new $processor();
        if ($processor instanceof Processor && method_exists($processor, 'process')) {
            $processor->process($template, $context);
            $inlinePartials = $processor->getInlinePartials();
            if (sizeof($inlinePartials)) {
                foreach ($inlinePartials as $partialName => $src) {
                    $this->registerPartial($partialName, $src);
                }
            }
        }
        return $this->loadTemplate($template)->render(new Context($context));
    }
}