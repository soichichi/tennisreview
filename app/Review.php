<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Review extends Model
{
    
    use SoftDeletes;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 4)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('maker')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'user',
    'history',
    'kind',
    'body',
    'score',
    'maker_id',
    ];
    
    public function maker()
    {
        return $this->belongsTo('App\Maker');
    }
}
