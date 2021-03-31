<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Restaurant extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'restaurant';

        protected $fillable = [
            'Restro_name', 'Restro_email', 'password','Restro_location'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }