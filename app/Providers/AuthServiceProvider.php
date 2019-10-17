<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\User' => 'App\Policies\NavPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('show-logs',function(User $user){
            return $user->isSuperAdmin();
        });
        Gate::define('modify-user',function(User $user){
            return $user->isSuperAdmin();
        });
        Gate::define('delete-user',function(User $user){
            return $user->isSuperAdmin();
        });
        //
    }
}
