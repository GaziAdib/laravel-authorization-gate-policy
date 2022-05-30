<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        // use Of Gate

        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isUser', function($user) {
            return $user->role == 'user';
        });

        Gate::define('isEditor', function($user) {
            return $user->role == 'editor';
        });
    }
}
