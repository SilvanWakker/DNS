<?php

declare(strict_types=1);

/*
 * This file is part of Badcow DNS Library.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badcow\DNS\Edns\Option;

class UnsupportedOptionException extends \Exception
{
    public function __construct(string $option)
    {
        parent::__construct(sprintf('Option "%s" is not implemented.', $option));
    }
}
