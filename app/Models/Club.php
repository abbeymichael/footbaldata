<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'city',
        'stadium_name',
        'founded_year',
        'manager',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
