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
use Handlebars\StringWrapper;
use Handlebars\Template;
use HandlebarsHelpers\Exception\Error;

class IncludeHelper extends RequireHelper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsedArgs = $template->parseArguments($args);
        if (sizeof($parsedArgs) > 0) {
            $path = Hbs::getTmplDir().DIRECTORY_SEPARATOR.$parsedArgs[0];
            if (file_exists($path)) {
                $model = [];
                $currentPage = $context->get('currentPage');
                if (!empty($currentPage)) {
                    $model = ['currentPage' => $currentPage];
                }
                $properties = $context->get('properties');
                if (!empty($properties)) {
                    $model['properties'] = $properties;
                }
                return new StringWrapper(Hbs::render(file_get_contents($path), $model, Hbs::getTmplDir()));
            }
            return new StringWrapper($parsedArgs[0]);
        }
        return new Error(self::class . ' requires 2 arguments, '.sizeof($parsedArgs).' was provided');
    }
}
