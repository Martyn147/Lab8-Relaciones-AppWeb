<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // RELACIÓN DE MUCHOS A MUCHOS
    public function users()
    {
    return $this->belongsToMany(User::class)->withTimestamps();
    }
}

/*
INSERT INTO `appweblab8_relaciones`.`cursos` (`id`, `numero`, `edificio`, `created_at`, `updated_at`)
VALUES ('1', '01', 'Edificio 15' , '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`cursos` (`id`, `numero`, `edificio`, `created_at`, `updated_at`)
VALUES ('2', '02', 'Edificio 1' , '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`cursos` (`id`, `numero`, `edificio`, `created_at`, `updated_at`)
VALUES ('3', '03', 'Edificio 8' , '2021-10-11 00:00:00', '2021-10-11 00:00:00');

INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('1', '1', '3', '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('2', '1', '3', '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('3', '2', '2', '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('4', '2', '2', '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('5', '3', '1', '2021-10-11 00:00:00', '2021-10-11 00:00:00');
INSERT INTO `appweblab8_relaciones`.`curso_user` (`id`, `curso_id`, `user_id`, `created_at`,
`updated_at`) VALUES ('6', '3', '1', '2021-10-11 00:00:00', '2021-10-11 00:00:00');

*/