<?php


namespace Modules\VietNamZone\Entities\Traits\Filterable;


/**
 * Trait ProvinceSearchFilterable
 *
 * @package Modules\VietNamZone\Entities\Traits\Filterable
 */
trait ProvinceSearchFilterable
{
    /**
     * @param $query
     * @param $keyword
     *
     * @return mixed
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->name($keyword);
    }
}
