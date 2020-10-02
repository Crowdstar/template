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

namespace CrowdStar\Tests\Template;

use CrowdStar\Template\Template;
use CrowdStar\Template\TemplateEngine\Mustache;
use PHPUnit\Framework\TestCase;

/**
 * Class TemplateTest
 */
class TemplateTest extends TestCase
{
    /**
     * @covers Template::render
     * @covers Mustache
     */
    public function testMustache(): void
    {
        self::assertSame(
            "Hello World!",
            (new Template(new Mustache()))->render('Hello {{planet}}', ['planet' => 'World!']),
            ""
        );
    }
}
