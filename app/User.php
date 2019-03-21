<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserCreated;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use SoftDeletes;


class User extends Authenticatable implements ShouldQueue
{
    use Notifiable, HasApiTokens ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'rememberToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dispatchesEvents = [
        'created' => UserCreated::class,
    ];
    public function addNew($input)
    {
        $check = static::where('google_id',$input['google_id'])->first();

        if(is_null($check)){
            return static::create($input);
        }
        return $check;

    }
    
    
}
