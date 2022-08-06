<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modules extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function permission(){
        return $this->hasMany(Permission::class);
    }
}
