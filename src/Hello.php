<?php

/*
 * This file is part of Boctulus.
 * (c) Guillaume Sainthillier <hello@Boctulus.fr>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Boctulus;

class Hello implements HelloInterface
{
    private const VERSION = '1.5.1';

    public function display(): string
    {
        return sprintf('Hello World v%s', self::VERSION);
    }
}
