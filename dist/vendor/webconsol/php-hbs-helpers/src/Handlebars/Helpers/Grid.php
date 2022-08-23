<?php

namespace Handlebars\Helpers;

use Handlebars\Context;
use Handlebars\Helper;
use Handlebars\Template;
use Traversable;

class Grid implements Helper
{
    public function execute(Template $template, Context $context, $args, $source)
    {
        $index = 0;
        $cols = [];
        $parsedArgs = $template->parseArguments($args);
        $row = $context->get($parsedArgs[0]);
        if (!empty($row)) {
            $row = explode('+', $row);
            foreach ($row as $item) {
                $cols[] = trim($item, ' ');
            }
        }
        $buffer = '';

        if (!$cols) {
            $template->setStopToken('else');
            $template->discard();
            $template->setStopToken(false);
            $buffer = $template->render($context);
        }
        elseif (is_array($cols) || $cols instanceof Traversable) {
            $size = count($cols);
            $isList = is_array($cols) && (array_keys($cols) === range(0, $size - 1));
            $lastIndex = $isList ? (count($cols) - 1) : false;

            foreach ($cols as $key => $var) {
                $specialVariables = array(
                    '@size'          => $size,
                    '@iterator'      => $index + 1,
                    '@index'         => $index,
                    '@first'         => ($index === 0),
                    '@last'          => ($index === $lastIndex),
                    '@itemlistsize'  => $size,
                    '@itemlistindex' => $index,
                    '@itemlistfirst' => ($index === 0),
                    '@itemlistlast'  => ($index === $lastIndex),
                    '@item'          => $var
                );
                if (!$isList) {
                    $specialVariables['@key'] = $key;
                }
                $context->pushSpecialVariables($specialVariables);
                $context->push($var);
                $template->setStopToken('else');
                $template->rewind();
                $buffer .= $template->render($context);
                $context->pop();
                $context->popSpecialVariables();
                $index++;
            }

            $template->setStopToken(false);
        }

        return $buffer;
    }
}
