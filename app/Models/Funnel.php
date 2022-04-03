<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Funnel extends Model
{
    use HasFactory, SoftDeletes;

    public function products(){
        return $this->hasMany('\App\Models\Product', 'funnel_id', 'id');
    }

    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
