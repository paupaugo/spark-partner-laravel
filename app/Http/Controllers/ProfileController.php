<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IProfileRepository;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public $partner;
    
    public function __construct(IProfileRepository $partner)
    {
        $this->partner = $partner;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner_id = Auth::user()->owner_account_id;
        $partnerDetails = $this->partner->getProfileById($partner_id);
        //
        $pageConfigs = ['pageHeader' => false];

        return view('/content/profile/profile', ['pageConfigs' => $pageConfigs], compact('partnerDetails'));
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
