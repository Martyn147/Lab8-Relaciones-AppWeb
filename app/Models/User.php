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
        'name',
        'email',
        'password',
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
    ];


    // RELACIÓN DE UNO A UNO
    public function auto()
    {
        return $this->hasOne(Auto::class);
    }


    // RELACIÓN DE UNO A MUCHOS
    public function paises()
    {
    return $this->belongsTo(Paises::class);
    }

    // RELACIÓN DE UNO A MUCHOS
    public function producto()
    {
    return $this->hasmany(Producto::class);
    }    

    // RELACIÓN DE MUCHOS A MUCHOS
    public function cursos()
    {
    return $this->belongsToMany(Curso::class)->withTimestamps();
    }



}


/*

INSERT INTO `appweblab8_relaciones`.`users` (`id`, `name`, `email`, `email_verified_at`,
`password`, `remember_token`) VALUES ('1', 'Martin', 'Martin@gmailgmail.com',
'2023-01-01 13:19:25', 'sistemas', 'sistemas');
INSERT INTO `appweblab8_relaciones`.`users` (`id`, `name`, `email`, `email_verified_at`,
`password`, `remember_token`) VALUES ('2', 'Sofia', 'sophie@gmailgmail.com',
'2023-01-01 13:19:25', 'sistemas', 'sistemas');
INSERT INTO `appweblab8_relaciones`.`users` (`id`, `name`, `email`, `email_verified_at`,
`password`, `remember_token`) VALUES ('3', 'Andy', 'andi13121112@yahoo.com',
'2023-01-01 13:19:25', 'sistemas', 'sistemas');

*/

