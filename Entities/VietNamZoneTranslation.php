<?php


namespace Modules\VietNamZone\Entities;


use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class VietNamZoneTranslation extends Model
{
//    use Cachable;

    protected $table = 'vietnam_zone_translations';
    protected $fillable = ['name'];
}
