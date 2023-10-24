<?php

namespace Sajjadgol\PersianDatePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sajjadgol\PersianDatePicker\PersianDatePicker
 */
class PersianDatePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sajjadgol\PersianDatePicker\PersianDatePicker::class;
    }
}
