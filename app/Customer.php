<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Customer extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'customer';

        protected $fillable = [
            'Customer_name', 'email', 'password','Customer_location'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }