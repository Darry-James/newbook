<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function ebook(){
        return $this->belongsTo('\App\Models\Ebook', 'ebook_id', 'id');
    }

    public function funnel(){
        return $this->belongsTo('\App\Models\Funnel', 'funnel_id', 'id');
    }

    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
