<?php

namespace App\Models;

use App\Models\Modules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function module(){
        return $this->belongsTo(Modules::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
