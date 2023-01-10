<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // RELACIÓN DE UNO A MUCHOS
    public function level()
    {
    return $this->belongsTo(User::class);
    }
}


/*

INSERT INTO `appweblab8_relaciones`.`productos` (`id`, `marca`, `descripcion`, `costo`,
`user_id`) VALUES ('1', 'Tomate', 'Riñon',
2.99, '1');
INSERT INTO `appweblab8_relaciones`.`productos` (`id`, `marca`, `descripcion`, `costo`,
`user_id`) VALUES ('2', 'Manicho', 'Clasico de chocolate',
5.99, '2');
INSERT INTO `appweblab8_relaciones`.`productos` (`id`, `marca`, `descripcion`, `costo`,
`user_id`) VALUES ('3', 'Gigabyte', 'Tarjeta grafica 6650',
400.99, '3');

*/