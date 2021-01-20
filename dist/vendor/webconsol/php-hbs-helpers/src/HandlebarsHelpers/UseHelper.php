<?php
/**
 * This file is part of Handlebars-php
 *
 * PHP version 5.3
 *
 * @category  Xamin
 * @package   Handlebars
 * @author    fzerorubigd <fzerorubigd@gmail.com>
 * @author    Behrooz Shabani <everplays@gmail.com>
 * @author    Dmitriy Simushev <simushevds@gmail.com>
 * @author    Jeff Turcotte <jeff.turcotte@gmail.com>
 * @copyright 2014 Authors
 * @license   MIT <http://opensource.org/licenses/MIT>
 * @version   GIT: $Id$
 * @link      http://xamin.ir
 */

namespace HandlebarsHelpers;

use Handlebars\Context;
use Handlebars\Helper;
use Handlebars\StringWrapper;
use Handlebars\Template;

class UseHelper implements Helper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsedArgs = $template->parseArguments($args);
        if (sizeof($parsedArgs) === 2) {
            $resourcePath = (string)$parsedArgs[0];
            $varName = (string)$parsedArgs[1];
            $context->push([$varName => Hbs::getBundleModel($resourcePath)]);
            $html = $template->render($context);
        }
        else {
            $html = '<div style="background:#efefef;border:1px solid red;padding:10px;">'.
                'Invalid arguments for use api ('.self::class.')</div>';
        }
        return new StringWrapper($html);
    }
}
