<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentManagementModel extends Model
{
    use HasFactory;

    protected $table = "tbl_content";
    protected $primaryKey = 'content_id';
}
