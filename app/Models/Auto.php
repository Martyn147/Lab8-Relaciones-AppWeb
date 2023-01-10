<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    
    // RELACIÓN DE UNO A UNO
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}

/*

INSERT INTO `appweblab8_relaciones`.`autos` (`id`, `marca`, `modelo`, `costo`,
`user_id`) VALUES ('1', 'Tesla', 'X-M01',
1050.99, '1');
INSERT INTO `appweblab8_relaciones`.`autos` (`id`, `marca`, `modelo`, `costo`,
`user_id`) VALUES ('2', 'DMC', 'Delorean',
2012.99, '2');
INSERT INTO `appweblab8_relaciones`.`autos` (`id`, `marca`, `modelo`, `costo`,
`user_id`) VALUES ('3', 'Volkswagen', 'Escarabajo',
1058.99, '3');

*/
