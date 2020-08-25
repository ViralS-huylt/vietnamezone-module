<?php


namespace Modules\VietNamZone\Repositories\Cache;


use Illuminate\Cache\CacheManager;
use Modules\Core\Repositories\BaseRepository;
use Modules\Core\Repositories\Cache\BaseCacheRepository;
use Modules\VietNamZone\Entities\VietNamZone;
use Modules\VietNamZone\Repositories\VietNamZoneRepository;
use Modules\VietNamZone\Repositories\Contracts\VietNamZoneRepositoryInterface;

class VietNamZoneCacheRepository extends BaseCacheRepository implements VietNamZoneRepositoryInterface
{
    public function __construct(VietNamZone $vietNamZone, VietNamZoneRepository $vietNamZoneRepository, CacheManager $cache )
    {
        $this->model = $vietNamZone;
        $this->cache = $cache;
        parent::__construct($vietNamZoneRepository);
    }
}
