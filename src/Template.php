<?php

namespace CrowdStar\Template;

use CrowdStar\Template\TemplateEngine\AbstractTemplateEngine;
use CrowdStar\Template\TemplateEngine\Mustache;

/**
 * Class Template
 *
 * @package CrowdStar\Covet
 */
class Template
{
    /**
     * @var AbstractTemplateEngine
     */
    protected $engine;

    /**
     * Template constructor.
     *
     * @param AbstractTemplateEngine|null $engine
     */
    public function __construct(AbstractTemplateEngine $engine = null)
    {
        $this->engine = ($engine ?: (new Mustache()));
    }

    /**
     * @param string $template
     * @param mixed $context
     * @return string
     */
    public function render($template, $context = array())
    {
        return $this->engine->render($template, $context);
    }
}
