<?php

namespace App\Observers\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    public function creating(Model $model)
    {
        $tenant_id = app(ManagerTenant::class)->getTenantIndentify();

        $model->setAttribute('tenant_id', $tenant_id);
    }

}