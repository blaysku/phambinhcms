<?php 

namespace Packages\Cms\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Module extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Packages\Cms\Services\Module::class;
    }
}
