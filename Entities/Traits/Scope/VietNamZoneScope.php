<?php


namespace Modules\VietNamZone\Entities\Traits\Scope;

use Modules\VietNamZone\Entities\Traits\Filterable\ProvinceSearchFilterable;
use Modules\Core\Entities\Traits\Filterable\TranslationNameFilterable;


trait VietNamZoneScope
{
    use TranslationNameFilterable, ProvinceSearchFilterable;
}
