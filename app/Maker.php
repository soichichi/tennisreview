<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    public function reviews()   
    {
        return $this->hasMany('App\Review');  
    }
    public function getByMaker(int $limit_count = 5)
    {
        return $this->reviews()->with('maker')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
