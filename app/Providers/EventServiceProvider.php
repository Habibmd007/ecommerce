<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\UserCreated;
use App\Listeners\UserCreatedListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\TaskEvent' => [
            'App\Listeners\TaskEventListener',
        ],
        
        'App\Events\OrderSubmitedEvent' => [
            'App\Listeners\OrderShipped',
        ],

        UserCreated::class => [
            UserCreatedListener::class,
        ],
        
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\\Google\\GoogleExtendSocialite@handle',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Event::listen('TaskEvent', function ($foo, $bar) {
            //
        });
    }
}
