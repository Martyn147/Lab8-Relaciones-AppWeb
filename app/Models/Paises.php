<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    use HasFactory;

    // RELACIÓN DE UNO A MUCHOS
        public function users()
        {
        return $this->hasMany('App\Models\User');
        }

}

/*
INSERT INTO `appweblab8_relaciones`.`paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
('1', 'Ecuador', '2023-01-01 13:19:25', '2021-11-20 13:19:25');
INSERT INTO `appweblab8_relaciones`.`paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
('2', 'Colombia', '2023-01-01 13:19:25', '2021-11-20 13:19:25');
INSERT INTO `appweblab8_relaciones`.`paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
('3', 'Paris', '2023-01-01 13:19:25', '2021-11-20 13:19:25');
*/
