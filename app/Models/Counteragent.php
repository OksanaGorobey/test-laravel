<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counteragent extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'phone', 'address_id'
    ];


    public function addresses() {
        return $this->belongsToMany(Address::class);
    }

}
