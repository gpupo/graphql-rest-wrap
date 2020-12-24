<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/graphql-rest-wrap created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\GraphqlRestWrap\Tests;

use Gpupo\GraphqlRestWrap\Traits\TestCaseTrait;
use PHPUnit\Framework\TestCase;

abstract class TestCaseAbstract extends TestCase
{
    use TestCaseTrait;
}
