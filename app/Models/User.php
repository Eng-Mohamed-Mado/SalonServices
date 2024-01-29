<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'password',
        'code',
        'expire_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // Function Generate OTP
    public function generateCode(){

        // Stop TimeStamps Create And Update
        $this->timestamps = false;

        // Generate Code
        $this->code = rand(135978,999999);

        // Expire Code 10 Min
        $this->expire_at = now()->addMinutes(10);

        // Save Code
        $this->save();
    }
    // Function ResetCode OTP
    public function resetCode(){

        // Stop TimeStamps Create And Update
        $this->timestamps = false;

        // change code value to Null
        $this->code = null;

        // Expire change code value to Null
        $this->expire_at = null;

        // Save Code
        $this->save();
    }
}
