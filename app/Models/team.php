<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'photo',
        'facebook',
    ];

    public function projects(){
        return $this->hasMany(projects::class);
    }

}
