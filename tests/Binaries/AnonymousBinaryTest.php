<?php

/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Rocketeer\Binaries;

use Rocketeer\TestCases\RocketeerTestCase;

class AnonymousBinaryTest extends RocketeerTestCase
{
    public function testCanCreateAnonymousBinaries()
    {
        $anonymous = new AnonymousBinary($this->app);
        $anonymous->setBinary('foobar');

        $this->assertEquals('foobar foo bar --lol', $anonymous->foo('bar', '--lol'));
    }
}
