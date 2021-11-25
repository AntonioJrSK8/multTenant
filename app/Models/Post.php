<?php

namespace App\Models;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TenantScope); //usado para filtra com o tenant 
        static::observe(new TenantObserver);     //usado para criar com relacionamento do tenant
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
