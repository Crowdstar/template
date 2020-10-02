<?php

namespace CrowdStar\Template\TemplateEngine;

abstract class AbstractTemplateEngine
{
    /**
     * @param string $template
     * @param mixed $context
     * @return string
     */
    abstract public function render($template, $context = array());
}
