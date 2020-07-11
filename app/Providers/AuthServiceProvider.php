<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Post;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
       'App\Post' => 'App\Policies\PostPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
