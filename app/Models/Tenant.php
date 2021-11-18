<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'uuid'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
