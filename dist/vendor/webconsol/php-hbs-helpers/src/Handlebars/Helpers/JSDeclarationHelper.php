<?php

namespace Handlebars\Helpers;

use Handlebars\Context;
use Handlebars\Helper;
use Handlebars\Template;

class JSDeclarationHelper implements Helper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsedArgs = $template->parseArguments($args);
        if ($parsedArgs[0]) {
            if (pathinfo($parsedArgs[0], PATHINFO_EXTENSION) === 'js') {
                return '<script type="text/javascript">' . $template->getEngine()->getPartialsLoader()->load($parsedArgs[0]) . '</script>';
            }
            return '<script>' . $parsedArgs[0] . '</script>';
        }
        return '';
    }
}
