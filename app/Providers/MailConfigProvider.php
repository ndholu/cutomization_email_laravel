<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Config;

class MailConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config = array(
            'driver'     =>     $configuration->driver,
            'host'       =>     $configuration->host,
            'port'       =>     $configuration->port,
            'username'   =>     $configuration->user_name,
            'password'   =>     $configuration->password,
            'encryption' =>     $configuration->encryption,
            'from'       =>     array('address' => $configuration->sender_email, 'name' => $configuration->sender_name),
        );
        Config::set('mail', $config);
    }
}
