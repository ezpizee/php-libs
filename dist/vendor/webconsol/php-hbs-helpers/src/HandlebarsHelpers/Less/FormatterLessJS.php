<?php

namespace HandlebarsHelpers\Less;

class FormatterLessJS extends FormatterClassic {
    public $disableSingle = true;
    public $breakSelectors = true;
    public $assignSeparator = ": ";
    public $selectorSeparator = ",";
}