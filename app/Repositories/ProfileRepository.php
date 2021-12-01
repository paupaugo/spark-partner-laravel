<?php

namespace App\Repositories;

use App\Models\ProfileModel;
use App\Models\OwnerFileModel;
use App\Repositories\IProfileRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function createOrUpdateProfile($partner_id, $collection = [])
    {   
        if(is_null($partner_id)) {
            if($collection['filenames']) {
                foreach($collection['filenames'] as $file) {
                    $name = time().'.'.$file->extension();
                    $file->move(public_path().'/files/', $name);  
                    $data[] = $name;  
                }
            }

            $file= new OwnerFileModel();
            $file->files_owner_id = Auth::user()->owner_id;
            $file->files_name=json_encode($data);
            $file->save();
        
            return back()->with('success', 'Data Your files has been successfully added');
        }

        
       
    }
    
    public function deleteProfile($id)
    {
        return RequestPartner::find($id)->delete();
    }
}
