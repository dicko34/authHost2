<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage())
                ->subject('Verify Email Address')
                ->action('Verify Email Address', $url)
                ->view('auth.email-message', compact('url'));
        });
        $this->registerPolicies();

    }
}
