<?php

namespace Daftarcha\DaftarchaBase\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daftarcha\DaftarchaBase\DaftarchaBase
 */
class DaftarchaBase extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Daftarcha\DaftarchaBase\DaftarchaBase::class;
    }
}
