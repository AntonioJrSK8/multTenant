<?php

namespace App\Tenant\Traits;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;

trait TenantTrait 
{
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TenantScope); //usado para filtra com o tenant 
        static::observe(new TenantObserver);     //usado para criar com relacionamento do tenant
    }
}