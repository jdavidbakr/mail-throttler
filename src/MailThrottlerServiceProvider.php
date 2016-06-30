<?php

namespace jdavidbakr\MailThrottler;

use Illuminate\Support\ServiceProvider;

class MailThrottlerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/../config/mail-throttler.php' => config_path('mail-throttler.php')
            ]);

        // Hook into the mailer
        $key = config('mail.driver');
        if(config('mail-throttler.'.$key.'.messages_per_minute')) {
            $this->app['mailer']->getSwiftMailer()->registerPlugin(new \Swift_Plugins_ThrottlerPlugin(
                    config('mail-throttler.'.$key.'.messages_per_minute'),
                    \Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_MINUTE
                ));
        }
        if(config('mail-throttler.'.$key.'.messages_per_second')) {
            $this->app['mailer']->getSwiftMailer()->registerPlugin(new \Swift_Plugins_ThrottlerPlugin(
                    config('mail-throttler.'.$key.'.messages_per_second'),
                    \Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_SECOND
                ));
        }
        if(config('mail-throttler.'.$key.'.bytes_per_minute')) {
            $this->app['mailer']->getSwiftMailer()->registerPlugin(new \Swift_Plugins_ThrottlerPlugin(
                    config('mail-throttler.'.$key.'.bytes_per_minute'),
                    \Swift_Plugins_ThrottlerPlugin::BYTES_PER_MINUTE
                ));
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}