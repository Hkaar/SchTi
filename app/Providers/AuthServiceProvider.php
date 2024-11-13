<?php

namespace App\Providers;

use App\Enum\RoleEnum;
use App\Models\User;
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
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user) {
            return $user->hasRole(RoleEnum::Admin);
        });

        Gate::define('operator', function (User $user) {
            return $user->hasRole(RoleEnum::Operator);
        });

        Gate::define('headmaster', function (User $user) {
            return $user->hasRole(RoleEnum::Headmaster);
        });

        Gate::define('teacher', function (User $user) {
            return $user->hasRole(RoleEnum::Teacher);
        });

        Gate::define('student-counselor', function (User $user) {
            return $user->hasRole(RoleEnum::StudentCounselor);
        });

        Gate::define('student', function (User $user) {
            return $user->hasRole(RoleEnum::Student);
        });

        Gate::define('dashboard-access', function (User $user) {
            return $user->hasRole([RoleEnum::Admin, RoleEnum::Headmaster, RoleEnum::Operator, RoleEnum::StudentCounselor]);
        });
    }
}
