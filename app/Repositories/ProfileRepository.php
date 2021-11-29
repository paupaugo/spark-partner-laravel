<?php

namespace App\Repositories;

use App\Models\ProfileModel;
use App\Repositories\IProfileRepository;
use Illuminate\Support\Facades\Hash;

class ProfileRepository implements IProfileRepository
{
    protected $partner = null;

    public function getAllProfile($limit, $start, $order, $dir, $draw, $search, $status)
    {
       
    }

    public function getProfileById($partner_id)
    {
        return ProfileModel::where('owner_id',$partner_id)->get();
    }

    public function createOrUpdateProfile($partner_id, $action)
    {   
        if(is_null($partner_id)) {
            // $partnerpartner = new RequestPartner;
            // $user->name = $collection['name'];
            // $user->email = $collection['email'];
            // $user->password = Hash::make('password');
            // return $user->save();
        }
        $partner = RequestPartner::find($partner_id);
        if($action == 'approve'){
            $partner->owner_approval_status = 1;
            $is_saved = $partner->save();
            if ($is_saved) {
                // success
                return "approved";
            } 
            else {
                // failure 
                return "failed";
            }
        }
        else {
            $partner->owner_approval_status = 0;
            $is_saved = $partner->save();
            if ($is_saved) {
                // success
                return "declined";
            } 
            else {
                // failure 
                return "failed";
            }
        }

        
       
    }
    
    public function deleteProfile($id)
    {
        return RequestPartner::find($id)->delete();
    }
}
