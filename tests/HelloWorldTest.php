<?php

/*
 * This file is part of Boctulus.
 * (c) Guillaume Sainthillier <hello@Boctulus.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Boctulus\Tests;

use PHPUnit\Framework\TestCase;
use Boctulus\Hello;

final class HelloWorldTest extends TestCase
{
    public function testHello()
    {
        $hello = new Hello();
        $contents = $hello->display();
        $this->assertEquals('Hello World v1.5.1', $contents);
    }
}
