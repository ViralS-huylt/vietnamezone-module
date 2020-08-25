<?php


namespace Modules\VietNamZone\Repositories;


use Modules\Core\Repositories\BaseRepository;
use Modules\VietNamZone\Entities\VietNamZone;
use Modules\VietNamZone\Repositories\Contracts\VietNamZoneRepositoryInterface;

class VietNamZoneRepository extends BaseRepository implements VietNamZoneRepositoryInterface
{
    /**
     * VietNamZoneRepository constructor.
     *
     * @param VietNamZone $vietNamZone
     */
    public function __construct(VietNamZone $vietNamZone)
    {
        $this->model = $vietNamZone;
    }
}
