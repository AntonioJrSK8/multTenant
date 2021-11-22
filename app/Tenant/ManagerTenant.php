<?php
namespace App\Tenant;

class ManagerTenant
{
    public function getTenantIndentify()
    {   
        return auth()->user()->tenant->id;
    }
}