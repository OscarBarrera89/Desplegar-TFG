<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['capacity', 'location', 'status'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
