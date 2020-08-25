<?php

namespace Modules\VietNamZone\Entities;

use Astrotomic\Translatable\Translatable;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Modules\VietNamZone\Entities\Traits\Methods\ProvinceMethod;
use Modules\VietNamZone\Entities\Traits\Methods\VietNamZoneMethod;
use Modules\VietNamZone\Entities\Traits\Relationship\VietNamZoneRelationship;
use Modules\VietNamZone\Entities\Traits\Scope\VietNamZoneScope;

class VietNamZone extends Model
{
    use Translatable, Cachable,ProvinceMethod;
    use VietNamZoneRelationship, VietNamZoneScope;

    protected $table = 'vietnam_zones';
    protected $fill = [''];

    protected $fillable = ['parent_id' , 'gso_id', 'grade', 'active'];
    public $translatedAttributes = ['name'];
}
