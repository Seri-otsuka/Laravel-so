<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'content',
      'amount',
    ];

     public function users(){
        return $this->hasMany(User::class);
     }
}
