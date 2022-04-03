<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminEcover extends Model
{
    use HasFactory;

    static function checkApprovedEcovers($thumbnail=""){
        return AdminEcover::all()->contains('thumbnail', $thumbnail);
    }
}
