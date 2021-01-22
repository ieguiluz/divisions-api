<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $guarded = [];

    public function parent() {
        return $this->belongsTo(Division::class, 'parent_id');
    }

    public function subdivisions() {
        return $this->hasMany(Division::class, 'parent_id');
    }
}
