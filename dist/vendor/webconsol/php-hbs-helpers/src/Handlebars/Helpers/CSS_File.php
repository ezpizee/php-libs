<?php

namespace Handlebars\Helpers;

use Handlebars\Context;
use Handlebars\Helper;
use Handlebars\Template;

class CSS_File implements Helper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsedArgs = $template->parseArguments($args);
        if ($parsedArgs[0]) {
            return '<link rel="stylesheet" type="text/css" href="' . $parsedArgs[0] . '"/>';
        }
        return '';
    }
}
