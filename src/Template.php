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

namespace CrowdStar\Template;

use CrowdStar\Template\TemplateEngine\AbstractTemplateEngine;

/**
 * Class Template
 *
 * @package CrowdStar\Template
 */
class Template
{
    protected AbstractTemplateEngine $engine;

    public function __construct(AbstractTemplateEngine $engine)
    {
        $this->engine = $engine;
    }

    public function render(string $template, $context = []): string
    {
        return $this->engine->render($template, $context);
    }
}
