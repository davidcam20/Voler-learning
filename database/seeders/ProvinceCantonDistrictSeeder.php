<?php

namespace Database\Seeders;

use App\Models\Canton;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceCantonDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            [
                'name' => 'San José',
            ],
            [
                'name' => 'Alajuela',
            ],
            [
                'name' => 'Cartago',
            ],
            [
                'name' => 'Heredia',
            ],
            [
                'name' => 'Guanacaste',
            ],
            [
                'name' => 'Puntarenas',
            ],
            [
                'name' => 'Limón',
            ],
        ];

        foreach ($provinces as $province) {
            Province::create($province);
        }

        $cantons = [
            [
                'id' => 101,
                'name' => 'San José',
                'province_id' => 1,
            ],
            [
                'id' => 102,
                'name' => 'Escazú',
                'province_id' => 1,
            ],
            [
                'id' => 103,
                'name' => 'Desamparados',
                'province_id' => 1,
            ],
            [
                'id' => 104,
                'name' => 'Puriscal',
                'province_id' => 1,
            ],
            [
                'id' => 105,
                'name' => 'Tarrazú',
                'province_id' => 1,
            ],

            [
                'id' => 106,
                'name' => 'Aserrí',
                'province_id' => 1,
            ],
            [
                'id' => 107,
                'name' => 'Mora',
                'province_id' => 1,
            ],
            [
                'id' => 108,
                'name' => 'Goicoechea',
                'province_id' => 1,
            ],
            [
                'id' => 109,
                'name' => 'Santa Ana',
                'province_id' => 1,
            ],
            [
                'id' => 110,
                'name' => 'Alajuelita',
                'province_id' => 1,
            ],
            [
                'id' => 111,
                'name' => 'Vázquez de Coronado',
                'province_id' => 1,
            ],
            [
                'id' => 112,
                'name' => 'Acosta',
                'province_id' => 1,
            ],
            [
                'id' => 113,
                'name' => 'Tibás',
                'province_id' => 1,
            ],
            [
                'id' => 114,
                'name' => 'Moravia',
                'province_id' => 1,
            ],
            [
                'id' => 115,
                'name' => 'Montes de Oca',
                'province_id' => 1,
            ],
            [
                'id' => 116,
                'name' => 'Turrubares',
                'province_id' => 1,
            ],
            [
                'id' => 117,
                'name' => 'Dota',
                'province_id' => 1,
            ],
            [
                'id' => 118,
                'name' => 'Curridabat',
                'province_id' => 1,
            ],
            [
                'id' => 119,
                'name' => 'Pérez Zeledón',
                'province_id' => 1,
            ],
            [
                'id' => 120,
                'name' => 'León Cortés Castro',
                'province_id' => 1,
            ],
            [
                'id' => 201,
                'name' => 'Alajuela',
                'province_id' => 2,
            ],
            [
                'id' => 202,
                'name' => 'San Ramón',
                'province_id' => 2,
            ],
            [
                'id' => 203,
                'name' => 'Grecia',
                'province_id' => 2,
            ],
            [
                'id' => 204,
                'name' => 'San Mateo',
                'province_id' => 2,
            ],
            [
                'id' => 205,
                'name' => 'Atenas',
                'province_id' => 2,
            ],
            [
                'id' => 206,
                'name' => 'Naranjo',
                'province_id' => 2,
            ],
            [
                'id' => 207,
                'name' => 'Palmares',
                'province_id' => 2,
            ],
            [
                'id' => 208,
                'name' => 'Poás',
                'province_id' => 2,
            ],
            [
                'id' => 209,
                'name' => 'Orotina',
                'province_id' => 2,
            ],
            [
                'id' => 210,
                'name' => 'San Carlos',
                'province_id' => 2,
            ],
            [
                'id' => 211,
                'name' => 'Zarcero',
                'province_id' => 2,
            ],
            [
                'id' => 212,
                'name' => 'Valverde Vega',
                'province_id' => 2,
            ],
            [
                'id' => 213,
                'name' => 'Upala',
                'province_id' => 2,
            ],
            [
                'id' => 214,
                'name' => 'Los Chiles',
                'province_id' => 2,
            ],
            [
                'id' => 215,
                'name' => 'Guatuso',
                'province_id' => 2,
            ],
            [
                'id' => 301,
                'name' => 'Cartago',
                'province_id' => 3
            ],
            [
                'id' => 302,
                'name' => 'Paraíso',
                'province_id' => 3
            ],
            [
                'id' => 303,
                'name' => 'La Unión',
                'province_id' => 3
            ],
            [
                'id' => 304,
                'name' => 'Jiménez',
                'province_id' => 3
            ],
            [
                'id' => 305,
                'name' => 'Turrialba',
                'province_id' => 3
            ],
            [
                'id' => 306,
                'name' => 'Alvarado',
                'province_id' => 3
            ],
            [
                'id' => 307,
                'name' => 'Oreamuno',
                'province_id' => 3
            ],
            [
                'id' => 308,
                'name' => 'El Guarco',
                'province_id' => 3
            ],
            [
                'id' => 401,
                'name' => 'Heredia',
                'province_id' => 4,
            ],
            [
                'id' => 402,
                'name' => 'Barva',
                'province_id' => 4
            ],
            [
                'id' => 403,
                'name' => 'Santo Domingo',
                'province_id' => 4
            ],
            [
                'id' => 404,
                'name' => 'Santa Bárbara',
                'province_id' => 4
            ],
            [
                'id' => 405,
                'name' => 'San Rafael',
                'province_id' => 4
            ],
            [
                'id' => 406,
                'name' => 'San Isidro',
                'province_id' => 4
            ],
            [
                'id' => 407,
                'name' => 'Belén',
                'province_id' => 4
            ],
            [
                'id' => 408,
                'name' => 'Flores',
                'province_id' => 4
            ],
            [
                'id' => 409,
                'name' => 'San Pablo',
                'province_id' => 4
            ],
            [
                'id' => 410,
                'name' => 'Sarapiquí',
                'province_id' => 4
            ],
            [
                'id' => 501,
                'name' => 'Liberia',
                'province_id' => 5,
            ],
            [
                'id' => 502,
                'name' => 'Nicoya',
                'province_id' => 5
            ],
            [
                'id' => 503,
                'name' => 'Santa Cruz',
                'province_id' => 5
            ],
            [
                'id' => 504,
                'name' => 'Bagaces',
                'province_id' => 5
            ],
            [
                'id' => 505,
                'name' => 'Carrillo',
                'province_id' => 5
            ],
            [
                'id' => 506,
                'name' => 'Cañas',
                'province_id' => 5
            ],
            [
                'id' => 507,
                'name' => 'Abangares',
                'province_id' => 5
            ],
            [
                'id' => 508,
                'name' => 'Tilarán',
                'province_id' => 5
            ],
            [
                'id' => 509,
                'name' => 'Nandayure',
                'province_id' => 5
            ],
            [
                'id' => 510,
                'name' => 'La Cruz',
                'province_id' => 5
            ],
            [
                'id' => 511,
                'name' => 'Hojancha',
                'province_id' => 5
            ],
            [
                'id' => 601,
                'name' => 'Puntarenas',
                'province_id' => 6
            ],
            [
                'id' => 602,
                'name' => 'Esparza',
                'province_id' => 6
            ],
            [
                'id' => 603,
                'name' => 'Buenos Aires',
                'province_id' => 6
            ],
            [
                'id' => 604,
                'name' => 'Montes de Oro',
                'province_id' => 6
            ],
            [
                'id' => 605,
                'name' => 'Osa',
                'province_id' => 6
            ],
            [
                'id' => 606,
                'name' => 'Quepos',
                'province_id' => 6
            ],
            [
                'id' => 607,
                'name' => 'Golfito',
                'province_id' => 6
            ],
            [
                'id' => 608,
                'name' => 'Coto Brus',
                'province_id' => 6
            ],
            [
                'id' => 609,
                'name' => 'Parrita',
                'province_id' => 6
            ],
            [
                'id' => 610,
                'name' => 'Corredores',
                'province_id' => 6
            ],
            [
                'id' => 611,
                'name' => 'Garabito',
                'province_id' => 6
            ],
            [
                'id' => 701,
                'name' => 'Limón',
                'province_id' => 7
            ],
            [
                'id' => 702,
                'name' => 'Pococí',
                'province_id' => 7
            ],
            [

                'id' => 703,
                'name' => 'Siquirres',
                'province_id' => 7
            ],
            [
                'id' => 704,
                'name' => 'Talamanca',
                'province_id' => 7
            ],
            [
                'id' => 705,
                'name' => 'Matina',
                'province_id' => 7
            ],
            [
                'id' => 706,
                'name' => 'Guácimo',
                'province_id' => 7
            ],


        ];

        foreach ($cantons as $canton) {
            Canton::create($canton);
        }


        $districts = [
            [
                'id' => 10101,
                'name' => 'Carmen',
                'canton_id' => 101
            ],
            [
                'id' => 10102,
                'name' => 'Merced',
                'canton_id' => 101
            ],
            [
                'id' => 10103,
                'name' => 'Hospital',
                'canton_id' => 101
            ],
            [
                'id' => 10104,
                'name' => 'Catedral',
                'canton_id' => 101
            ],
            [
                'id' => 10105,
                'name' => 'Zapote',
                'canton_id' => 101
            ],
            [
                'id' => 10106,
                'name' => 'San Francisco de Dos Ríos',
                'canton_id' => 101
            ],
            [
                'id' => 10107,
                'name' => 'Uruca',
                'canton_id' => 101
            ],
            [
                'id' => 10108,
                'name' => 'Mata Redonda',
                'canton_id' => 101
            ],
            [
                'id' => 10109,
                'name' => 'Pavas',
                'canton_id' => 101
            ],
            [
                'id' => 10110,
                'name' => 'Hatillo',
                'canton_id' => 101
            ],
            [
                'id' => 10111,
                'name' => 'San Sebastián',
                'canton_id' => 101
            ],
            [
                'id' => 10201,
                'name' => 'Escazú',
                'canton_id' => 102
            ],
            [
                'id' => 10202,
                'name' => 'San Antonio',
                'canton_id' => 102
            ],
            [
                'id' => 10203,
                'name' => 'San Rafael',
                'canton_id' => 102
            ],
            [
                'id' => 10301,
                'name' => 'Desamparados',
                'canton_id' => 103
            ],
            [
                'id' => 10302,
                'name' => 'San Miguel',
                'canton_id' => 103
            ],
            [
                'id' => 10303,
                'name' => 'San Juan de Dios',
                'canton_id' => 103
            ],
            [
                'id' => 10304,
                'name' => 'San Rafael Arriba',
                'canton_id' => 103
            ],
            [
                'id' => 10305,
                'name' => 'San Antonio',
                'canton_id' => 103
            ],
            [
                'id' => 10306,
                'name' => 'Frailes',
                'canton_id' => 103
            ],
            [
                'id' => 10307,
                'name' => 'Patarrá',
                'canton_id' => 103
            ],
            [
                'id' => 10308,
                'name' => 'San Cristóbal',
                'canton_id' => 103
            ],
            [
                'id' => 10309,
                'name' => 'Rosario',
                'canton_id' => 103
            ],
            [
                'id' => 10310,
                'name' => 'Damas',
                'canton_id' => 103
            ],
            [
                'id' => 10311,
                'name' => 'San Rafael Abajo',
                'canton_id' => 103
            ],
            [
                'id' => 10312,
                'name' => 'Gravilias',
                'canton_id' => 103
            ],
            [
                'id' => 10313,
                'name' => 'Los Guido',
                'canton_id' => 103
            ],
            [
                'id' => 10401,
                'name' => 'Santiago',
                'canton_id' => 104
            ],
            [
                'id' => 10402,
                'name' => 'Mercedes Sur',
                'canton_id' => 104
            ],
            [
                'id' => 10403,
                'name' => 'Barbacoas',
                'canton_id' => 104
            ],
            [
                'id' => 10404,
                'name' => 'Grifo Alto',
                'canton_id' => 104
            ],
            [
                'id' => 10405,
                'name' => 'San Rafael',
                'canton_id' => 104
            ],
            [
                'id' => 10406,
                'name' => 'Candelarita',
                'canton_id' => 104
            ],
            [
                'id' => 10407,
                'name' => 'Desamparaditos',
                'canton_id' => 104
            ],
            [
                'id' => 10408,
                'name' => 'San Antonio',
                'canton_id' => 104
            ],
            [
                'id' => 10409,
                'name' => 'Chires',
                'canton_id' => 104
            ],
            [
                'id' => 10501,
                'name' => 'San Marcos',
                'canton_id' => 105
            ],
            [
                'id' => 10502,
                'name' => 'San Lorenzo',
                'canton_id' => '105'
            ],
            [
                'id' => 10503,
                'name' => 'San Carlos',
                'canton_id' => 105
            ],
            [
                'id' => 10601,
                'name' => 'Aserrí',
                'canton_id' => 106
            ],
            [
                'id' => 10602,
                'name' => 'Tarbaca',
                'canton_id' => 106
            ],
            [
                'id' => 10603,
                'name' => 'Vuelta de Jorco',
                'canton_id' => 106
            ],
            [
                'id' => 10604,
                'name' => 'San Gabriel',
                'canton_id' => 106
            ],
            [
                'id' => 10605,
                'name' => 'Legua',
                'canton_id' => 106
            ],
            [
                'id' => 10606,
                'name' => 'Monterrey',
                'canton_id' => 106
            ],
            [
                'id' => 10607,
                'name' => 'Salitrillos',
                'canton_id' => 106
            ],
            [
                'id' => 10701,
                'name' => 'Colón',
                'canton_id' => 107
            ],
            [
                'id' => 10702,
                'name' => 'Guayabo',
                'canton_id' => 107
            ],
            [
                'id' => 10703,
                'name' => 'Tabarcia',
                'canton_id' => 107
            ],
            [
                'id' => 10704,
                'name' => 'Piedras Negras',
                'canton_id' => 107
            ],
            [
                'id' => 10705,
                'name' => 'Picagres',
                'canton_id' => 107
            ],
            [
                'id' => 10706,
                'name' => 'Jaris',
                'canton_id' => 107
            ],
            [
                'id' => 10801,
                'name' => 'Guadalupe',
                'canton_id' => 108
            ],
            [
                'id' => 10802,
                'name' => 'San Francisco',
                'canton_id' => 108
            ],
            [
                'id' => 10803,
                'name' => 'Calle Blancos',
                'canton_id' => 108
            ],
            [
                'id' => 10804,
                'name' => 'Mata de Plátano',
                'canton_id' => 108
            ],
            [
                'id' => 10805,
                'name' => 'Ipís',
                'canton_id' => 108
            ],
            [
                'id' => 10806,
                'name' => 'Rancho Redondo',
                'canton_id' => 108
            ],
            [
                'id' => 10807,
                'name' => 'Purral',
                'canton_id' => 108
            ],
            [
                'id' => 10901,
                'name' => 'Santa Ana',
                'canton_id' => 109
            ],
            [
                'id' => 10902,
                'name' => 'Salitral',
                'canton_id' => 109
            ],
            [
                'id' => 10903,
                'name' => 'Pozos',
                'canton_id' => 109
            ],
            [
                'id' => 10904,
                'name' => 'Uruca',
                'canton_id' => 109
            ],
            [
                'id' => 10905,
                'name' => 'Piedades',
                'canton_id' => 109
            ],
            [
                'id' => 10906,
                'name' => 'Brasil',
                'canton_id' => 109
            ],
            [
                'id' => 11001,
                'name' => 'Alajuelita',
                'canton_id' => 110
            ],
            [
                'id' => 11002,
                'name' => 'San Josecito',
                'canton_id' => 110
            ],
            [
                'id' => 11003,
                'name' => 'San Antonio',
                'canton_id' => 110
            ],
            [
                'id' => 11004,
                'name' => 'Concepción',
                'canton_id' => 110
            ],
            [
                'id' => 11005,
                'name' => 'San Felipe',
                'canton_id' => 110
            ],
            [
                'id' => 11101,
                'name' => 'San Isidro',
                'canton_id' => 111
            ],
            [
                'id' => 11102,
                'name' => 'San Rafael',
                'canton_id' => 111
            ],
            [
                'id' => 11103,
                'name' => 'Dulce Nombre de Jesús',
                'canton_id' => 111
            ],
            [
                'id' => 11104,
                'name' => 'Patalillo',
                'canton_id' => 111
            ],
            [
                'id' => 11105,
                'name' => 'Cascajal',
                'canton_id' => 111
            ],
            [
                'id' => 11201,
                'name' => 'San Ignacio',
                'canton_id' => 112
            ],
            [
                'id' => 11202,
                'name' => 'Guaitil',
                'canton_id' => 112
            ],
            [
                'id' => 11203,
                'name' => 'Palmichal',
                'canton_id' => 112
            ],
            [
                'id' => 11204,
                'name' => 'Cangrejal',
                'canton_id' => 112
            ],
            [
                'id' => 11205,
                'name' => 'Sabanillas',
                'canton_id' => 112
            ],
            [
                'id' => 11301,
                'name' => 'San Juan',
                'canton_id' => 113
            ],
            [
                'id' => 11302,
                'name' => 'Cinco Esquinas',
                'canton_id' => 113
            ],
            [
                'id' => 11303,
                'name' => 'Anselmo Llorente',
                'canton_id' => 113
            ],
            [
                'id' => 11304,
                'name' => 'León XIII',
                'canton_id' => 113
            ],
            [
                'id' => 11305,
                'name' => 'Colima',
                'canton_id' => 113
            ],
            [
                'id' => 11401,
                'name' => 'San Vicente',
                'canton_id' => 114
            ],
            [
                'id' => 11402,
                'name' => 'San Jerónimo',
                'canton_id' => 114
            ],
            [
                'id' => 11403,
                'name' => 'La Trinidad',
                'canton_id' => 114
            ],
            [
                'id' => 11501,
                'name' => 'San Pedro',
                'canton_id' => 115
            ],
            [
                'id' => 11502,
                'name' => 'Sabanilla',
                'canton_id' => 115
            ],
            [
                'id' => 11503,
                'name' => 'Mercedes',
                'canton_id' => 115
            ],
            [
                'id' => 11504,
                'name' => 'San Rafael',
                'canton_id' => 115
            ],
            [
                'id' => 11601,
                'name' => 'San Pablo',
                'canton_id' => 116
            ],
            [
                'id' => 11602,
                'name' => 'San Pedro',
                'canton_id' => 116
            ],
            [
                'id' => 11603,
                'name' => 'San Juan de Mata',
                'canton_id' => 116
            ],
            [
                'id' => 11604,
                'name' => 'San Luis',
                'canton_id' => 116
            ],
            [
                'id' => 11605,
                'name' => 'Carara',
                'canton_id' => 116
            ],
            [
                'id' => 11701,
                'name' => 'Santa María',
                'canton_id' => 117
            ],
            [
                'id' => 11702,
                'name' => 'Jardín',
                'canton_id' => 117
            ],
            [
                'id' => 11703,
                'name' => 'Copey',
                'canton_id' => 117
            ],
            [
                'id' => 11801,
                'name' => 'Curridabat',
                'canton_id' => 118
            ],
            [
                'id' => 11802,
                'name' => 'Granadilla',
                'canton_id' => 118
            ],
            [
                'id' => 11803,
                'name' => 'Sánchez',
                'canton_id' => 118
            ],
            [
                'id' => 11804,
                'name' => 'Tirrases',
                'canton_id' => 118
            ],
            [
                'id' => 11901,
                'name' => 'San Isidro de El General',
                'canton_id' => 119
            ],
            [
                'id' => 11902,
                'name' => 'General',
                'canton_id' => 119
            ],
            [
                'id' => 11903,
                'name' => 'Daniel Flores',
                'canton_id' => 119
            ],
            [
                'id' => 11904,
                'name' => 'Rivas',
                'canton_id' => 119
            ],
            [
                'id' => 11905,
                'name' => 'San Pedro',
                'canton_id' => 119
            ],
            [
                'id' => 11906,
                'name' => 'Platanares',
                'canton_id' => 119
            ],
            [
                'id' => 11907,
                'name' => 'Pejibaye',
                'canton_id' => 119
            ],
            [
                'id' => 11908,
                'name' => 'Cajón',
                'canton_id' => 119
            ],
            [
                'id' => 11909,
                'name' => 'Barú',
                'canton_id' => 119
            ],
            [
                'id' => 11910,
                'name' => 'Río Nuevo',
                'canton_id' => 119
            ],
            [
                'id' => 11911,
                'name' => 'Páramo',
                'canton_id' => 119
            ],
            [
                'id' => 12001,
                'name' => 'San Pablo',
                'canton_id' => 120
            ],
            [
                'id' => 12002,
                'name' => 'San Andrés',
                'canton_id' => 120
            ],
            [
                'id' => 12003,
                'name' => 'Llano Bonito',
                'canton_id' => 120
            ],
            [
                'id' => 12004,
                'name' => 'San Isidro',
                'canton_id' => 120
            ],
            [
                'id' => 12005,
                'name' => 'Santa Cruz',
                'canton_id' => 120
            ],
            [
                'id' => 12006,
                'name' => 'San Antonio',
                'canton_id' => 120
            ],
            [
                'id' => 20101,
                'name' => 'Alajuela',
                'canton_id' => 201,
            ],
            [
                'id' => 20102,
                'name' => 'Barrio San José',
                'canton_id' => 201
            ],
            [
                'id' => 20103,
                'name' => 'Carrizal',
                'canton_id' => 201
            ],
            [
                'id' => 20104,
                'name' => 'San Antonio',
                'canton_id' => 201
            ],
            [
                'id' => 20105,
                'name' => 'La Guácima',
                'canton_id' => 201
            ],
            [
                'id' => 20106,
                'name' => 'San Isidro',
                'canton_id' => 201
            ],
            [
                'id' => 20107,
                'name' => 'Sabanilla',
                'canton_id' => 201
            ],
            [
                'id' => 20108,
                'name' => 'San Rafael',
                'canton_id' => 201
            ],
            [
                'id' => 20109,
                'name' => 'Río Segundo',
                'canton_id' => 201
            ],
            [
                'id' => 20110,
                'name' => 'Desamparados',
                'canton_id' => 201
            ],
            [
                'id' => 20111,
                'name' => 'Turrúcares',
                'canton_id' => 201
            ],
            [
                'id' => 20112,
                'name' => 'Tambor',
                'canton_id' => 201
            ],
            [
                'id' => 20113,
                'name' => 'La Garita',
                'canton_id' => 201
            ],
            [
                'id' => 20114,
                'name' => 'Sarapiquí',
                'canton_id' => 201
            ],
            [
                'id' => 20201,
                'name' => 'San Ramón',
                'canton_id' => 202
            ],
            [
                'id' => 20202,
                'name' => 'Santiago',
                'canton_id' => 202
            ],
            [
                'id' => 20203,
                'name' => 'San Juan',
                'canton_id' => 202
            ],
            [
                'id' => 20204,
                'name' => 'Piedades Norte',
                'canton_id' => 202
            ],
            [
                'id' => 20205,
                'name' => 'Piedades Sur',
                'canton_id' => 202
            ],
            [
                'id' => 20206,
                'name' => 'San Rafael',
                'canton_id' => 202
            ],
            [
                'id' => 20207,
                'name' => 'San Isidro',
                'canton_id' => 202
            ],
            [
                'id' => 20208,
                'name' => 'Los Ángeles',
                'canton_id' => 202
            ],
            [
                'id' => 20209,
                'name' => 'Alfaro',
                'canton_id' => 202
            ],
            [
                'id' => 20210,
                'name' => 'Volio',
                'canton_id' => 202
            ],
            [
                'id' => 20211,
                'name' => 'Concepción',
                'canton_id' => 202
            ],
            [
                'id' => 20212,
                'name' => 'Zapotal',
                'canton_id' => 202
            ],
            [
                'id' => 20213,
                'name' => 'Peñas Blancas',
                'canton_id' => 202
            ],
            [
                'id' => 20301,
                'name' => 'Grecia',
                'canton_id' => 203
            ],
            [
                'id' => 20302,
                'name' => 'San Isidro',
                'canton_id' => 203
            ],
            [
                'id' => 20303,
                'name' => 'San José',
                'canton_id' => 203
            ],
            [
                'id' => 20304,
                'name' => 'San Roque',
                'canton_id' => 203
            ],
            [
                'id' => 20305,
                'name' => 'Tacares',
                'canton_id' => 203
            ],
            [
                'id' => 20306,
                'name' => 'Río Cuarto',
                'canton_id' => 203
            ],
            [
                'id' => 20307,
                'name' => 'Puente de Piedra',
                'canton_id' => 203
            ],
            [
                'id' => 20308,
                'name' => 'Bolívar',
                'canton_id' => 203
            ],
            [
                'id' => 20401,
                'name' => 'San Mateo',
                'canton_id' => 204
            ],
            [
                'id' => 20402,
                'name' => 'Desmonte',
                'canton_id' => 204
            ],
            [
                'id' => 20403,
                'name' => 'Jesús María',
                'canton_id' => 204
            ],
            [
                'id' => 20501,
                'name' => 'Atenas',
                'canton_id' => 205
            ],
            [
                'id' => 20502,
                'name' => 'Jesús',
                'canton_id' => 205
            ],
            [
                'id' => 20503,
                'name' => 'Mercedes',
                'canton_id' => 205
            ],
            [
                'id' => 20504,
                'name' => 'San Isidro',
                'canton_id' => 205
            ],
            [
                'id' => 20505,
                'name' => 'Concepción',
                'canton_id' => 205
            ],
            [
                'id' => 20506,
                'name' => 'San José',
                'canton_id' => 205
            ],
            [
                'id' => 20507,
                'name' => 'Santa Eulalia',
                'canton_id' => 205
            ],
            [
                'id' => 20508,
                'name' => 'Escobal',
                'canton_id' => 205
            ],
            [
                'id' => 20601,
                'name' => 'Naranjo',
                'canton_id' => 206
            ],
            [
                'id' => 20602,
                'name' => 'San Miguel',
                'canton_id' => 206
            ],
            [
                'id' => 20603,
                'name' => 'San José',
                'canton_id' => 206
            ],
            [
                'id' => 20604,
                'name' => 'Cirrí Sur',
                'canton_id' => 206
            ],
            [
                'id' => 20605,
                'name' => 'San Jerónimo',
                'canton_id' => 206
            ],
            [
                'id' => 20606,
                'name' => 'San Juan',
                'canton_id' => 206
            ],
            [
                'id' => 20607,
                'name' => 'El Rosario',
                'canton_id' => 206
            ],
            [
                'id' => 20608,
                'name' => 'Palmitos',
                'canton_id' => 206
            ],
            [
                'id' => 20701,
                'name' => 'Palmares',
                'canton_id' => 207
            ],
            [
                'id' => 20702,
                'name' => 'Zaragoza',
                'canton_id' => 207
            ],
            [
                'id' => 20703,
                'name' => 'Buenos Aires',
                'canton_id' => 207
            ],
            [
                'id' => 20704,
                'name' => 'Santiago',
                'canton_id' => 207
            ],
            [
                'id' => 20705,
                'name' => 'Candelaria',
                'canton_id' => 207
            ],
            [
                'id' => 20706,
                'name' => 'Esquipulas',
                'canton_id' => 207
            ],
            [
                'id' => 20707,
                'name' => 'La Granja',
                'canton_id' => 207
            ],
            [
                'id' => 20801,
                'name' => 'San Pedro',
                'canton_id' => 208
            ],
            [
                'id' => 20802,
                'name' => 'San Juan',
                'canton_id' => 208
            ],
            [
                'id' => 20803,
                'name' => 'San Rafael',
                'canton_id' => 208
            ],
            [
                'id' => 20804,
                'name' => 'Carrillos',
                'canton_id' => 208
            ],
            [
                'id' => 20805,
                'name' => 'Sabana Redonda',
                'canton_id' => 208
            ],
            [
                'id' => 20901,
                'name' => 'Orotina',
                'canton_id' => 209
            ],
            [
                'id' => 20902,
                'name' => 'El Mastate',
                'canton_id' => 209
            ],
            [
                'id' => 20903,
                'name' => 'Hacienda Vieja',
                'canton_id' => 209
            ],
            [
                'id' => 20904,
                'name' => 'Coyolar',
                'canton_id' => 209
            ],
            [
                'id' => 20905,
                'name' => 'La Ceiba',
                'canton_id' => 209
            ],
            [
                'id' => 21001,
                'name' => 'Quesada',
                'canton_id' => 210
            ],
            [
                'id' => 21002,
                'name' => 'Florencia',
                'canton_id' => 210
            ],
            [
                'id' => 21003,
                'name' => 'Buenavista',
                'canton_id' => 210
            ],
            [
                'id' => 21004,
                'name' => 'Aguas Zarcas',
                'canton_id' => 210
            ],
            [
                'id' => 21005,
                'name' => 'Venecia',
                'canton_id' => 210
            ],
            [
                'id' => 21006,
                'name' => 'Pital',
                'canton_id' => 210
            ],
            [
                'id' => 21007,
                'name' => 'La Fortuna',
                'canton_id' => 210
            ],
            [
                'id' => 21008,
                'name' => 'La Tigra',
                'canton_id' => 210
            ],
            [
                'id' => 21009,
                'name' => 'La Palmera',
                'canton_id' => 210
            ],
            [
                'id' => 21010,
                'name' => 'Venado',
                'canton_id' => 210
            ],
            [
                'id' => 21011,
                'name' => 'Cutris',
                'canton_id' => 210
            ],
            [
                'id' => 21012,
                'name' => 'Monterrey',
                'canton_id' => 210
            ],
            [
                'id' => 21013,
                'name' => 'Pocosol',
                'canton_id' => 210
            ],
            [
                'id' => 21101,
                'name' => 'Zarcero',
                'canton_id' => 211
            ],
            [
                'id' => 21102,
                'name' => 'Laguna',
                'canton_id' => 211
            ],
            [
                'id' => 21103,
                'name' => 'Tapesco',
                'canton_id' => 211
            ],
            [
                'id' => 21104,
                'name' => 'Guadalupe',
                'canton_id' => 211
            ],
            [
                'id' => 21105,
                'name' => 'Palmira',
                'canton_id' => 211
            ],
            [
                'id' => 21106,
                'name' => 'Zapote',
                'canton_id' => 211
            ],
            [
                'id' => 21107,
                'name' => 'Brisas',
                'canton_id' => 211
            ],
            [
                'id' => 21201,
                'name' => 'Sarchí Norte',
                'canton_id' => 212
            ],
            [
                'id' => 21202,
                'name' => 'Sarchí Sur',
                'canton_id' => 212
            ],
            [
                'id' => 21203,
                'name' => 'Toro Amarillo',
                'canton_id' => 212
            ],
            [
                'id' => 21204,
                'name' => 'San Pedro',
                'canton_id' => 212
            ],
            [
                'id' => 21205,
                'name' => 'Rodríguez',
                'canton_id' => 212
            ],
            [
                'id' => 21301,
                'name' => 'Upala',
                'canton_id' => 213
            ],
            [
                'id' => 21302,
                'name' => 'Aguas Claras',
                'canton_id' => 213
            ],
            [
                'id' => 21303,
                'name' => 'San José (Pizote)',
                'canton_id' => 213
            ],
            [
                'id' => 21304,
                'name' => 'Bijagua',
                'canton_id' => 213
            ],
            [
                'id' => 21305,
                'name' => 'Delicias',
                'canton_id' => 213
            ],
            [
                'id' => 21306,
                'name' => 'Dos Ríos',
                'canton_id' => 213
            ],
            [
                'id' => 21307,
                'name' => 'Yoliyllal',
                'canton_id' => 213
            ],
            [
                'id' => 21401,
                'name' => 'Los Chiles',
                'canton_id' => 214
            ],
            [
                'id' => 21402,
                'name' => 'Caño Negro',
                'canton_id' => 214
            ],
            [
                'id' => 21403,
                'name' => 'El Amparo',
                'canton_id' => 214
            ],
            [
                'id' => 21404,
                'name' => 'San Jorge',
                'canton_id' => 214
            ],
            [
                'id' => 21501,
                'name' => 'San Rafael',
                'canton_id' => 215
            ],
            [
                'id' => 21502,
                'name' => 'Buenavista',
                'canton_id' => 215
            ],
            [
                'id' => 21503,
                'name' => 'Cote',
                'canton_id' => 215
            ],
            [
                'id' => 21504,
                'name' => 'Katira',
                'canton_id' => 215
            ],
            [
                'id' => 30101,
                'name' => 'Oriental',
                'canton_id' => 301
            ],
            [
                'id' => 30102,
                'name' => 'Occidental',
                'canton_id' => 301
            ],
            [
                'id' => 30103,
                'name' => 'Carmen',
                'canton_id' => 301
            ],
            [
                'id' => 30104,
                'name' => 'San Nicolás',
                'canton_id' => 301
            ],
            [
                'id' => 30105,
                'name' => 'Aguacaliente (San Francisco)',
                'canton_id' => 301
            ],
            [
                'id' => 30106,
                'name' => 'Guadalupe (Arenilla)',
                'canton_id' => 301
            ],
            [
                'id' => 30107,
                'name' => 'Corralillo',
                'canton_id' => 301
            ],
            [
                'id' => 30108,
                'name' => 'Tierra Blanca',
                'canton_id' => 301
            ],
            [
                'id' => 30109,
                'name' => 'Dulce Nombre',
                'canton_id' => 301
            ],
            [
                'id' => 30110,
                'name' => 'Llano Grande',
                'canton_id' => 301
            ],
            [
                'id' => 30111,
                'name' => 'Quebradilla',
                'canton_id' => 301
            ],
            [
                'id' => 30201,
                'name' => 'Paraíso',
                'canton_id' => 302
            ],
            [
                'id' => 30202,
                'name' => 'Santiago',
                'canton_id' => 302
            ],
            [
                'id' => 30203,
                'name' => 'Orosi',
                'canton_id' => 302
            ],
            [
                'id' => 30204,
                'name' => 'Cachí',
                'canton_id' => 302
            ],
            [
                'id' => 30205,
                'name' => 'Llanos de Santa Lucía',
                'canton_id' => 302
            ],
            [
                'id' => 30301,
                'name' => 'Tres Ríos',
                'canton_id' => 303
            ],
            [
                'id' => 30302,
                'name' => 'San Diego',
                'canton_id' => 303
            ],
            [
                'id' => 30303,
                'name' => 'San Juan',
                'canton_id' => 303
            ],
            [
                'id' => 30304,
                'name' => 'San Rafael',
                'canton_id' => 303
            ],
            [
                'id' => 30305,
                'name' => 'Concepción',
                'canton_id' => 303
            ],
            [
                'id' => 30306,
                'name' => 'Dulce Nombre',
                'canton_id' => 303
            ],
            [
                'id' => 30307,
                'name' => 'San Ramón',
                'canton_id' => 303
            ],
            [
                'id' => 30308,
                'name' => 'Río Azul',
                'canton_id' => 303
            ],
            [
                'id' => 30401,
                'name' => 'Juan Viñas',
                'canton_id' => 304
            ],
            [
                'id' => 30402,
                'name' => 'Tucurrique',
                'canton_id' => 304
            ],
            [
                'id' => 30403,
                'name' => 'Pejibaye',
                'canton_id' => 304
            ],
            [
                'id' => 30501,
                'name' => 'Turrialba',
                'canton_id' => 305
            ],
            [
                'id' => 30502,
                'name' => 'La Suiza',
                'canton_id' => 305
            ],
            [
                'id' => 30503,
                'name' => 'Peralta',
                'canton_id' => 305
            ],
            [
                'id' => 30504,
                'name' => 'Santa Cruz',
                'canton_id' => 305
            ],
            [
                'id' => 30505,
                'name' => 'Santa Teresita',
                'canton_id' => 305
            ],
            [
                'id' => 30506,
                'name' => 'Pavones',
                'canton_id' => 305
            ],
            [
                'id' => 30507,
                'name' => 'Tuis',
                'canton_id' => 305
            ],
            [
                'id' => 30508,
                'name' => 'Tayutic',
                'canton_id' => 305
            ],
            [
                'id' => 30509,
                'name' => 'Santa Rosa',
                'canton_id' => 305
            ],
            [
                'id' => 30510,
                'name' => 'Tres Equis',
                'canton_id' => 305
            ],
            [
                'id' => 30511,
                'name' => 'La Isabel',
                'canton_id' => 305
            ],
            [
                'id' => 30512,
                'name' => 'Chirripó',
                'canton_id' => 305
            ],
            [
                'id' => 30601,
                'name' => 'Pacayas',
                'canton_id' => 306
            ],
            [
                'id' => 30602,
                'name' => 'Cervantes',
                'canton_id' => 306
            ],
            [
                'id' => 30603,
                'name' => 'Capellades',
                'canton_id' => 306
            ],
            [
                'id' => 30701,
                'name' => 'San Rafael',
                'canton_id' => 307
            ],
            [
                'id' => 30702,
                'name' => 'Cot',
                'canton_id' => 307
            ],
            [
                'id' => 30703,
                'name' => 'Potrero Cerrado',
                'canton_id' => 307
            ],
            [
                'id' => 30704,
                'name' => 'Cipreses',
                'canton_id' => 307
            ],
            [
                'id' => 30705,
                'name' => 'Santa Rosa',
                'canton_id' => 307
            ],
            [
                'id' => 30801,
                'name' => 'El Tejar',
                'canton_id' => 308
            ],
            [
                'id' => 30802,
                'name' => 'San Isidro',
                'canton_id' => 308
            ],
            [
                'id' => 30803,
                'name' => 'Tobosi',
                'canton_id' => 308
            ],
            [
                'id' => 30804,
                'name' => 'Patio de Agua',
                'canton_id' => 308
            ],

            ['id' => 40101,
                'name' => 'Heredia',
                'canton_id' => 401
            ],
            ['id' => 40102,
                'name' => 'Mercedes',
                'canton_id' => 401
            ],
            ['id' => 40103,
                'name' => 'San Francisco',
                'canton_id' => 401
            ],
            ['id' => 40104,
                'name' => 'Ulloa',
                'canton_id' => 401
            ],
            ['id' => 40105,
                'name' => 'Varablanca',
                'canton_id' => 401
            ],
            ['id' => 40201,
                'name' => 'Barva',
                'canton_id' => 402
            ],
            ['id' => 40202,
                'name' => 'San Pedro',
                'canton_id' => 402
            ],
            ['id' => 40203,
                'name' => 'San Pablo',
                'canton_id' => 402
            ],
            ['id' => 40204,
                'name' => 'San Roque',
                'canton_id' => 402
            ],
            ['id' => 40205,
                'name' => 'Santa Lucía',
                'canton_id' => 402
            ],
            ['id' => 40206,
                'name' => 'San José de la Montaña',
                'canton_id' => 402
            ],
            ['id' => 40301,
                'name' => 'Santo Domingo',
                'canton_id' => 403
            ],
            ['id' => 40302,
                'name' => 'San Vicente',
                'canton_id' => 403
            ],
            ['id' => 40303,
                'name' => 'San Miguel',
                'canton_id' => 403
            ],
            ['id' => 40304,
                'name' => 'Paracito',
                'canton_id' => 403
            ],
            ['id' => 40305,
                'name' => 'Santo Tomás',
                'canton_id' => 403
            ],
            ['id' => 40306,
                'name' => 'Santa Rosa',
                'canton_id' => 403
            ],
            ['id' => 40307,
                'name' => 'Tures',
                'canton_id' => 403
            ],
            ['id' => 40308,
                'name' => 'Para',
                'canton_id' => 403
            ],
            ['id' => 40401,
                'name' => 'Santa Bárbara',
                'canton_id' => 404
            ],
            ['id' => 40402,
                'name' => 'San Pedro',
                'canton_id' => 404
            ],
            ['id' => 40403,
                'name' => 'San Juan',
                'canton_id' => 404
            ],
            ['id' => 40404,
                'name' => 'Jesús',
                'canton_id' => 404
            ],
            ['id' => 40405,
                'name' => 'Santo Domingo',
                'canton_id' => 404
            ],
            ['id' => 40406,
                'name' => 'Puraba',
                'canton_id' => 404
            ],
            ['id' => 40501,
                'name' => 'San Rafael',
                'canton_id' => 405
            ],
            ['id' => 40502,
                'name' => 'San Josécito',
                'canton_id' => 405
            ],
            ['id' => 40503,
                'name' => 'Santiago',
                'canton_id' => 405
            ],
            ['id' => 40504,
                'name' => 'Los Ángeles',
                'canton_id' => 405
            ],
            ['id' => 40505,
                'name' => 'Concepción',
                'canton_id' => 405
            ],
            ['id' => 40601,
                'name' => 'San Isidro',
                'canton_id' => 406
            ],
            ['id' => 40602,
                'name' => 'San José',
                'canton_id' => 406
            ],
            ['id' => 40603,
                'name' => 'Concepción',
                'canton_id' => 406
            ],
            ['id' => 40604,
                'name' => 'San Francisco',
                'canton_id' => 406
            ],
            ['id' => 40701,
                'name' => 'San Antonio',
                'canton_id' => 407
            ],
            ['id' => 40702,
                'name' => 'La Ribera',
                'canton_id' => 407
            ],
            ['id' => 40703,
                'name' => 'La Asunción',
                'canton_id' => 407
            ],
            ['id' => 40801,
                'name' => 'San Joaquín de Flores',
                'canton_id' => 408
            ],
            ['id' => 40802,
                'name' => 'Barrantes',
                'canton_id' => 408
            ],
            ['id' => 40803,
                'name' => 'Llorente',
                'canton_id' => 408
            ],
            ['id' => 40901,
                'name' => 'San Pablo',
                'canton_id' => 409
            ],
            ['id' => 40902,
                'name' => 'Rincón de Sabanilla',
                'canton_id' => 409
            ],
            ['id' => 41001,
                'name' => 'Puerto Viejo',
                'canton_id' => 410
            ],
            ['id' => 41002,
                'name' => 'La Virgen',
                'canton_id' => 410
            ],
            ['id' => 41003,
                'name' => 'Horquetas',
                'canton_id' => 410
            ],
            ['id' => 41004,
                'name' => 'Llanuras del Gaspar',
                'canton_id' => 410
            ],
            ['id' => 41005,
                'name' => 'Cureña',
                'canton_id' => 410
            ],
            [
                'id' => 50101,
                'name' => 'Liberia',
                'canton_id' => '501'
            ],
            [
                'id' => 50102,
                'name' => 'Cañas Dulces',
                'canton_id' => '501'
            ],
            [
                'id' => 50103,
                'name' => 'Mayorga',
                'canton_id' => '501'
            ],
            [
                'id' => 50104,
                'name' => 'Nacascolo',
                'canton_id' => '501'
            ],
            [
                'id' => 50105,
                'name' => 'Curubande',
                'canton_id' => '501'
            ],
            [
                'id' => 50201,
                'name' => 'Nicoya',
                'canton_id' => '502'
            ],
            [
                'id' => 50202,
                'name' => 'Mansion',
                'canton_id' => '502'
            ],
            [
                'id' => 50203,
                'name' => 'San Antonio',
                'canton_id' => '502'
            ],
            [
                'id' => 50204,
                'name' => 'Quebrada Honda',
                'canton_id' => '502'
            ],
            [
                'id' => 50205,
                'name' => 'Samara',
                'canton_id' => '502'
            ],
            [
                'id' => 50206,
                'name' => 'Nosara',
                'canton_id' => '502'
            ],
            [
                'id' => 50207,
                'name' => 'Belén de Nosarita',
                'canton_id' => '502'
            ],
            [
                'id' => 50301,
                'name' => 'Santa Cruz',
                'canton_id' => '503'
            ],
            [
                'id' => 50302,
                'name' => 'Bolson',
                'canton_id' => '503'
            ],
            [
                'id' => 50303,
                'name' => 'Veintisiete de Abril',
                'canton_id' => '503'
            ],
            [
                'id' => 50304,
                'name' => 'Tempate',
                'canton_id' => '503'
            ],
            [
                'id' => 50305,
                'name' => 'Cartagena',
                'canton_id' => '503'
            ],
            [
                'id' => 50306,
                'name' => 'Cuajiniquil',
                'canton_id' => '503'
            ],
            [
                'id' => 50307,
                'name' => 'Diria',
                'canton_id' => '503'
            ],
            [
                'id' => 50308,
                'name' => 'Cabo Velas',
                'canton_id' => '503'
            ],
            [
                'id' => 50309,
                'name' => 'Tamarindo',
                'canton_id' => '503'
            ],
            [
                'id' => 50401,
                'name' => 'Bagaces',
                'canton_id' => '504'
            ],
            [
                'id' => 50402,
                'name' => 'Fortuna',
                'canton_id' => '504'
            ],
            [
                'id' => 50403,
                'name' => 'Mogote',
                'canton_id' => '504'
            ],
            [
                'id' => 50404,
                'name' => 'Río Naranjo',
                'canton_id' => '504'
            ],
            [
                'id' => 50501,
                'name' => 'Filadelfia',
                'canton_id' => '505'
            ],
            [
                'id' => 50502,
                'name' => 'Palmira',
                'canton_id' => '505'
            ],
            [
                'id' => 50503,
                'name' => 'Sardinal',
                'canton_id' => '505'
            ],
            [
                'id' => 50504,
                'name' => 'Belén',
                'canton_id' => '505'
            ],
            [
                'id' => 50601,
                'name' => 'Cañas',
                'canton_id' => '506'
            ],
            [
                'id' => 50602,
                'name' => 'Palmira',
                'canton_id' => '506'
            ],
            [
                'id' => 50603,
                'name' => 'San Miguel',
                'canton_id' => '506'
            ],
            [
                'id' => 50604,
                'name' => 'Bebedero',
                'canton_id' => '506'
            ],
            [
                'id' => 50605,
                'name' => 'Porozal',
                'canton_id' => '506'
            ],
            [
                'id' => 50701,
                'name' => 'Juntas',
                'canton_id' => '507'
            ],
            [
                'id' => 50702,
                'name' => 'Sierra',
                'canton_id' => '507'
            ],
            [
                'id' => 50703,
                'name' => 'San Juan',
                'canton_id' => '507'
            ],
            [
                'id' => 50704,
                'name' => 'Colorado',
                'canton_id' => '507'
            ],
            [
                'id' => 50801,
                'name' => 'Tilarán',
                'canton_id' => '508'
            ],
            [
                'id' => 50802,
                'name' => 'Quebrada Grande',
                'canton_id' => '508'
            ],
            [
                'id' => 50803,
                'name' => 'Tronadora',
                'canton_id' => '508'
            ],
            [
                'id' => 50804,
                'name' => 'Santa Rosa',
                'canton_id' => '508'
            ],
            [
                'id' => 50805,
                'name' => 'Líbano',
                'canton_id' => '508'
            ],
            [
                'id' => 50806,
                'name' => 'Tierras Morenas',
                'canton_id' => '508'
            ],
            [
                'id' => 50807,
                'name' => 'Arenal',
                'canton_id' => '508'
            ],
            [
                'id' => 50901,
                'name' => 'Carmona',
                'canton_id' => '509'
            ],
            [
                'id' => 50902,
                'name' => 'Santa Rita',
                'canton_id' => '509'
            ],
            [
                'id' => 50903,
                'name' => 'Zapotal',
                'canton_id' => '509'
            ],
            [
                'id' => 50904,
                'name' => 'San Pablo',
                'canton_id' => '509'
            ],
            [
                'id' => 50905,
                'name' => 'Porvenir',
                'canton_id' => '509'
            ],
            [
                'id' => 50906,
                'name' => 'Bejuco',
                'canton_id' => '509'
            ],
            [
                'id' => 51001,
                'name' => 'La Cruz',
                'canton_id' => '510'
            ],
            [
                'id' => 51002,
                'name' => 'Santa Cecilia',
                'canton_id' => '510'
            ],
            [
                'id' => 51003,
                'name' => 'Garita',
                'canton_id' => '510'
            ],
            [
                'id' => 51004,
                'name' => 'Santa Elena',
                'canton_id' => '510'
            ],
            [
                'id' => 51101,
                'name' => 'Hojancha',
                'canton_id' => '511'
            ],
            [
                'id' => 51102,
                'name' => 'Monte Romo',
                'canton_id' => '511'
            ],
            [
                'id' => 51103,
                'name' => 'Puerto Carrillo',
                'canton_id' => '511'
            ],
            [
                'id' => 51104,
                'name' => 'Huacas',
                'canton_id' => '511'
            ],
            [
                'id' => 60101,
                'name' => 'Puntarenas',
                'canton_id' => '601'
            ],
            [
                'id' => 60102,
                'name' => 'Pitahaya',
                'canton_id' => '601'
            ],
            [
                'id' => 60103,
                'name' => 'Chomes',
                'canton_id' => '601'
            ],
            [
                'id' => 60104,
                'name' => 'Lepanto',
                'canton_id' => '601'
            ],
            [
                'id' => 60105,
                'name' => 'Paquera',
                'canton_id' => '601'
            ],
            [
                'id' => 60106,
                'name' => 'Manzanillo',
                'canton_id' => '601'
            ],
            [
                'id' => 60107,
                'name' => 'Guacimal',
                'canton_id' => '601'
            ],
            [
                'id' => 60108,
                'name' => 'Barranca',
                'canton_id' => '601'
            ],
            [
                'id' => 60109,
                'name' => 'Monte Verde',
                'canton_id' => '601'
            ],
            [
                'id' => 60110,
                'name' => 'Isla del Coco',
                'canton_id' => '601'
            ],
            [
                'id' => 60111,
                'name' => 'Cobano',
                'canton_id' => '601'
            ],
            [
                'id' => 60112,
                'name' => 'Chacarita',
                'canton_id' => '601'
            ],
            [
                'id' => 60113,
                'name' => 'Chira',
                'canton_id' => '601'
            ],
            [
                'id' => 60114,
                'name' => 'Acapulco',
                'canton_id' => '601'
            ],
            [
                'id' => 60115,
                'name' => 'El Roble',
                'canton_id' => '601'
            ],
            [
                'id' => 60116,
                'name' => 'Arancibia',
                'canton_id' => '601'
            ],
            [
                'id' => 60201,
                'name' => 'Espiritu Santo',
                'canton_id' => '602'
            ],
            [
                'id' => 60202,
                'name' => 'San Juan Grande',
                'canton_id' => '602'
            ],
            [
                'id' => 60203,
                'name' => 'Macacona',
                'canton_id' => '602'
            ],
            [
                'id' => 60204,
                'name' => 'San Rafael',
                'canton_id' => '602'
            ],
            [
                'id' => 60205,
                'name' => 'San Jerónimo',
                'canton_id' => '602'
            ],
            [
                'id' => 60301,
                'name' => 'Buenos Aires',
                'canton_id' => '603'
            ],
            [
                'id' => 60302,
                'name' => 'Volcan',
                'canton_id' => '603'
            ],
            [
                'id' => 60303,
                'name' => 'Potrero Grande',
                'canton_id' => '603'
            ],
            [
                'id' => 60304,
                'name' => 'Boruca',
                'canton_id' => '603'
            ],
            [
                'id' => 60305,
                'name' => 'Pilas',
                'canton_id' => '603'
            ],
            [
                'id' => 60306,
                'name' => 'Colinas',
                'canton_id' => '603'
            ],
            [
                'id' => 60307,
                'name' => 'Changena',
                'canton_id' => '603'
            ],
            [
                'id' => 60308,
                'name' => 'Briolley',
                'canton_id' => '603'
            ],
            [
                'id' => 60309,
                'name' => 'Brunka',
                'canton_id' => '603'
            ],
            [
                'id' => 60401,
                'name' => 'Miramar',
                'canton_id' => '604'
            ],
            [
                'id' => 60402,
                'name' => 'La Unión',
                'canton_id' => '604'
            ],
            [
                'id' => 60403,
                'name' => 'San Isidro',
                'canton_id' => '604'
            ],
            [
                'id' => 60501,
                'name' => 'Puerto Cortes',
                'canton_id' => '605'
            ],
            [
                'id' => 60502,
                'name' => 'Palmar',
                'canton_id' => '605'
            ],
            [
                'id' => 60503,
                'name' => 'Sierpe',
                'canton_id' => '605'
            ],
            [
                'id' => 60504,
                'name' => 'Bahia Ballena',
                'canton_id' => '605'
            ],
            [
                'id' => 60505,
                'name' => 'Piedras Blancas',
                'canton_id' => '605'
            ],
            [
                'id' => 60601,
                'name' => 'Quepos',
                'canton_id' => '606'
            ],
            [
                'id' => 60602,
                'name' => 'Savegre',
                'canton_id' => '606'
            ],
            [
                'id' => 60603,
                'name' => 'Naranjito',
                'canton_id' => '606'
            ],
            [
                'id' => 60701,
                'name' => 'Golfito',
                'canton_id' => '607'
            ],
            [
                'id' => 60702,
                'name' => 'Puerto Jiménez',
                'canton_id' => '607'
            ],
            [
                'id' => 60703,
                'name' => 'Guaycara',
                'canton_id' => '607'
            ],
            [
                'id' => 60704,
                'name' => 'Pavon',
                'canton_id' => '607'
            ],
            [
                'id' => 60801,
                'name' => 'San Vito',
                'canton_id' => '608'
            ],
            [
                'id' => 60802,
                'name' => 'Sabalito',
                'canton_id' => '608'
            ],
            [
                'id' => 60803,
                'name' => 'Aguabuena',
                'canton_id' => '608'
            ],
            [
                'id' => 60804,
                'name' => 'Limóncito',
                'canton_id' => '608'
            ],
            [
                'id' => 60805,
                'name' => 'Pittier',
                'canton_id' => '608'
            ],
            [
                'id' => 60901,
                'name' => 'Parrita',
                'canton_id' => '609'
            ],
            [
                'id' => 61001,
                'name' => 'Corredor',
                'canton_id' => '610'
            ],
            [
                'id' => 61002,
                'name' => 'La Cuesta',
                'canton_id' => '610'
            ],
            [
                'id' => 61003,
                'name' => 'Canoas',
                'canton_id' => '610'
            ],
            [
                'id' => 61004,
                'name' => 'Laurel',
                'canton_id' => '610'
            ],
            [
                'id' => 61101,
                'name' => 'Jacó',
                'canton_id' => '611'
            ],
            [
                'id' => 61102,
                'name' => 'Tarcoles',
                'canton_id' => '611'
            ],
            [
                'id' => 70101,
                'name' => 'Limón',
                'canton_id' => '701'
            ],
            [
                'id' => 70102,
                'name' => 'Valle La Estrella',
                'canton_id' => '701'
            ],
            [
                'id' => 70103,
                'name' => 'Río Blanco',
                'canton_id' => '701'
            ],
            [
                'id' => 70104,
                'name' => 'Matama',
                'canton_id' => '701'
            ],
            [
                'id' => 70201,
                'name' => 'Guapiles',
                'canton_id' => '702'
            ],
            [
                'id' => 70202,
                'name' => 'Jiménez',
                'canton_id' => '702'
            ],
            [
                'id' => 70203,
                'name' => 'Rita',
                'canton_id' => '702'
            ],
            [
                'id' => 70204,
                'name' => 'Roxana',
                'canton_id' => '702'
            ],
            [
                'id' => 70205,
                'name' => 'Cariari',
                'canton_id' => '702'
            ],
            [
                'id' => 70206,
                'name' => 'Colorado',
                'canton_id' => '702'
            ],
            [
                'id' => 70301,
                'name' => 'Siquirres',
                'canton_id' => '703'
            ],
            [
                'id' => 70302,
                'name' => 'Pacuarito',
                'canton_id' => '703'
            ],
            [
                'id' => 70303,
                'name' => 'Florida',
                'canton_id' => '703'
            ],
            [
                'id' => 70304,
                'name' => 'Germania',
                'canton_id' => '703'
            ],
            [
                'id' => 70305,
                'name' => 'Cairo',
                'canton_id' => '703'
            ],
            [
                'id' => 70306,
                'name' => 'Alegria',
                'canton_id' => '703'
            ],
            [
                'id' => 70401,
                'name' => 'Bratsi',
                'canton_id' => '704'
            ],
            [
                'id' => 70402,
                'name' => 'Sixaola',
                'canton_id' => '704'
            ],
            [
                'id' => 70403,
                'name' => 'Cahuita',
                'canton_id' => '704'
            ],
            [
                'id' => 70404,
                'name' => 'Telire',
                'canton_id' => '704'
            ],
            [
                'id' => 70501,
                'name' => 'Matina',
                'canton_id' => '705'
            ],
            [
                'id' => 70502,
                'name' => 'Battan',
                'canton_id' => '705'
            ],
            [
                'id' => 70503,
                'name' => 'Carrandi',
                'canton_id' => '705'
            ],
            [
                'id' => 70601,
                'name' => 'Guácimo',
                'canton_id' => '706'
            ],
            [
                'id' => 70602,
                'name' => 'Mercedes',
                'canton_id' => '706'
            ],
            [
                'id' => 70603,
                'name' => 'Pocora',
                'canton_id' => '706'
            ],
            [
                'id' => 70604,
                'name' => 'Río Jiménez',
                'canton_id' => '706'
            ],
            [
                'id' => 70605,
                'name' => 'Duacari',
                'canton_id' => '706'
            ],


        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}
