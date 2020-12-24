<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/graphql-rest-wrap created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\GraphqlRestWrap\Traits;

trait TestCaseTrait
{
    protected function getConstant($name, $default = false)
    {
        if (\defined($name)) {
            return \constant($name);
        }

        return $default;
    }

    protected function hasConstant($name)
    {
        $value = $this->getConstant($name);

        return empty($value) ? false : true;
    }
}
