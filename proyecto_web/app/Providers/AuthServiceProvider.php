<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin.users.index', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('admin.users.create', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('admin.users.edit', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('admin.users.destroy', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('admin.operators', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('admin.productos', function ($user) {
            return $user->hasAnyRole(['Admin', 'User']);
        });
    }

}
