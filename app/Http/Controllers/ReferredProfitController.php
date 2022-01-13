<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\IDashboardRepository;

use Illuminate\Http\Request;

class ReferredProfitController extends Controller
{
    private IDashboardRepository $dashboardRepository;

    public function __construct(IDashboardRepository $dashboardRepository) 
    {
        $this->dashboardRepository = $dashboardRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partner_id = Auth::user()->owner_id;
        $partnerQRCode = $this->dashboardRepository->getQRCode($partner_id);
        $pageConfigs = ['pageHeader' => false];

        return view('/content/referred-profit/referred-profit', ['pageConfigs' => $pageConfigs], compact('partnerQRCode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
