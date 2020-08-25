<?php

namespace Modules\VietNamZone\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Core\Http\Controllers\Controller;
use Modules\VietNamZone\Http\Requests\CreateVietNamZoneRequest;
use Modules\VietNamZone\Http\Requests\UpdateVietNamZoneRequest;
use Modules\VietNamZone\Repositories\Contracts\VietNamZoneRepositoryInterface;

class ProvinceController extends Controller
{
    /**
     * @var VietNamZoneRepositoryInterface
     */
    private $vietNamZoneRepository;

    public function __construct(VietNamZoneRepositoryInterface $vietNamZoneRepository)
    {

        $this->vietNamZoneRepository = $vietNamZoneRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $provinces = $this->genPagination($request, $this->vietNamZoneRepository);

        $provinces->withPath(config('vietnamzone.path_pagination_province'));

        return view('vietnamzone::province.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('vietnamzone::province.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateVietNamZoneRequest $request)
    {
        $province = $this->vietNamZoneRepository->create($request->except('_token'));

        return redirect()->route('province.index')
            ->with(config('core.session_success'), _t('province') . ' ' .  _t('create_success'));
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $province = $this->vietNamZoneRepository->findById($id);

        return view('vietnamzone::province.show', compact('province'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('vietnamzone::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateVietNamZoneRequest $request, $id)
    {
        $province = $this->vietNamZoneRepository->findById($id);
        $province = $this->vietNamZoneRepository->updateById($id , $request->except(['_token', 'method']));

        return redirect()->route('province.index')
            ->with(config('core.session_success'),  _t('province') . ' ' . _t('update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->vietNamZoneRepository->deleteById($id);

        return redirect()->route('province.index')
            ->with(config('core.session_success'), _t('province') . ' ' . _t('delete_success'));
    }
}
