<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerFileModel extends Model
{
    use HasFactory;

    protected $table = "tbl_owner_files";
    protected $primaryKey = 'files_id';
}
