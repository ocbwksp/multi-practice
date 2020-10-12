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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // to manege user to SEE edit/delete option
        // as user is not auth to edit so user dont see this option
        Gate::define('manage-users',function($user){
            return $user->hasAnyRoles(['admin','author']);
        });


        // to control user to edit or delete users
        Gate::define('edit-users',function($user){
            return $user->hasAnyRoles(['admin','author']);
        });

        Gate::define('delete-users',function($user){
            return $user->hasRole('admin');
        });

        // Gate::define('edit-users',function($user){
        //     return $user->hasRole('author');
        // });
    }
}
