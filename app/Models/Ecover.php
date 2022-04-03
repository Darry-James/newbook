<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Ecover extends Model
{
    use HasFactory, SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::created(function ($ecover) {
            $ecover->slug = $ecover->createSlug($ecover->title);
            $ecover->save();            
        });
    }

    private function createSlug($title){
        if (static::whereSlug($slug = Str::slug($title))->exists()) {

            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');

            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function products()
    {
        return $this->hasMany('\App\Models\Product');
    }
    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }
    public function dimension(){
        return $this->belongsTo('App\Models\Dimension', 'dimension_id');
    }
}
