<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function scopeArticle($query){
        return $query->where('article', 1);
    }
    public function scopePresentation($query){
        return $query->where('article', 2);
    }
    public function scopeConference($query){
        return $query->where('article', 3);
    }
}
