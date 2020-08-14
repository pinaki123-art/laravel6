<?php

namespace App\Providers;
use App\User;
use App\Conversation;
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
        Gate::before(function ($user, $ability) {
           return $user->abilities()->contains($ability);
        });

    }
/*
        Gate::define('update-conversation', function ($user, $conversation) {
               return true;
        return $conversation->user->is($user);
        });
        Gate::before(function (User $user) {
            if ($user->id === 6) {
                return true;
            }
        });*/

}
