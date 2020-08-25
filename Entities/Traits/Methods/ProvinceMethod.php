<?php


namespace Modules\VietNamZone\Entities\Traits\Methods;


trait ProvinceMethod
{
    public static function statuses()
    {
        return activeInactiveStatuses();
    }
}
