<?php

namespace Handlebars\Helpers;

use Handlebars\Context;
use Handlebars\Helper;
use Handlebars\Template;

class Add_CSS_Declaration implements Helper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsedArgs = $template->parseArguments($args);
        if ($parsedArgs[0]) {
            if (pathinfo($parsedArgs[0], PATHINFO_EXTENSION) === 'css') {
                return '<style>' . $template->getEngine()->getPartialsLoader()->load($parsedArgs[0]) . '</style>';
            }
            return '<style>' . $parsedArgs[0] . '</style>';
        }
        return '';
    }
}
