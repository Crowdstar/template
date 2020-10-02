<?php

/**************************************************************************
 * Copyright 2020 Glu Mobile Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *************************************************************************/

declare(strict_types=1);

namespace CrowdStar\Template\TemplateEngine;

use Mustache_Engine;

/**
 * Class Mustache
 *
 * @package CrowdStar\Template\TemplateEngine
 * @see https://github.com/bobthecow/mustache.php
 * @see https://github.com/bobthecow/mustache.php/wiki
 */
class Mustache extends AbstractTemplateEngine
{
    protected Mustache_Engine $engine;

    public function __construct()
    {
        $this->setEngine(new Mustache_Engine());
    }

    public function render(string $template, $context = []): string
    {
        return $this->getEngine()->render($template, $context);
    }

    public function getEngine(): Mustache_Engine
    {
        return $this->engine;
    }

    public function setEngine(Mustache_Engine $engine): self
    {
        $this->engine = $engine;

        return $this;
    }
}
