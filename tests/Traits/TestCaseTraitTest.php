<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/graphql-rest-wrap created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\GraphqlRestWrap\Tests\Traits;

use Gpupo\GraphqlRestWrap\Tests\TestCaseAbstract;

/**
 * @coversNothing
 */
class TestCaseTraitTest extends TestCaseAbstract
{
    public function testGetConstant()
    {
        $this->assertSame('bar', $this->getConstant('FOO'));
        $this->assertFalse($this->getConstant('NOT_EXIST'));
    }

    public function testHasConstant()
    {
        $this->assertTrue($this->hasConstant('FOO'));
        $this->assertFalse($this->hasConstant('NOT_EXIST'));
    }
}
