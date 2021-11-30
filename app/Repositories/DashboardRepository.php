<?php

namespace App\Repositories;
use App\Models\ProfileModel;
use App\Models\ContentManagementModel;
use App\Interfaces\IDashboardRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardRepository implements IDashboardRepository
{
    

    public function getQRCode($partner_id)
    {
        return ProfileModel::where('owner_id',$partner_id)->get();
    }

    public function getContentNews()
    {
        return ContentManagementModel::all();
    }

}
