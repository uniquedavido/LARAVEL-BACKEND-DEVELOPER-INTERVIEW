<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Userdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'state', 'date_of_birth'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
