<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function parents(){
	    return $this->belongsTo('App\Models\Node','parent_id','id');
	}

    public function parents_recursive(){
	    return $this->parents()->with('parents_recursive');
	}

    public function childs() {
	    return $this->hasMany('App\Models\Node','parent_id','id') ;
	}

    public function childs_recursive(){
	    return $this->childs()->with('childs_recursive');
	}
}
