<?php

namespace App\Models;

use App\Models\module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class niveau extends Model
{
    use HasFactory;

    public function modules(){
        return $this->hasMany(module::class);
      }
}
