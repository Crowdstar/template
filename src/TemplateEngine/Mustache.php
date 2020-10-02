<?php

namespace CrowdStar\Template\TemplateEngine;

use Mustache_Engine;

/**
 * Class Mustache
 *
 * @package CrowdStar\Covet\TemplateEngine
 * @see https://github.com/bobthecow/mustache.php
 * @see https://github.com/bobthecow/mustache.php/wiki
 */
class Mustache
{
    /**
     * @var Mustache_Engine
     */
    protected $engine;

    /**
     * Mustache constructor.
     */
    public function __construct()
    {
        $this->setEngine(new Mustache_Engine());
    }

    /**
     * @param string $template
     * @param mixed $context
     * @return string
     */
    public function render($template, $context = array())
    {
        return $this->getEngine()->render($template, $context);
    }

    /**
     * @return Mustache_Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param Mustache_Engine $engine
     * @return $this
     */
    public function setEngine(Mustache_Engine $engine)
    {
        $this->engine = $engine;

        return $this;
    }
}
