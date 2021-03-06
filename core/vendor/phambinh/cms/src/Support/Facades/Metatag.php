<?php

namespace Phambinh\Cms\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Metatag extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Phambinh\Cms\Services\Metatag::class;
    }
}
