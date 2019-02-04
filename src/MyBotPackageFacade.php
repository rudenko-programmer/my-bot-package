<?php

namespace RudenkoProgrammer\MyBotPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RudenkoProgrammer\MyBotPackage\Skeleton\SkeletonClass
 */
class MyBotPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-bot-package';
    }
}
