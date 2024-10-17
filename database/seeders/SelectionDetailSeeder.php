<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SelectionDetail;
class SelectionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Lista de países
$countries = [
    'Argentina', 'Bolivia', 'Brasil', 'Chile', 'Colombia', 
    'Costa Rica', 'Cuba', 'República Dominicana', 'Ecuador', 
    'El Salvador', 'Guatemala', 'Honduras', 'México', 'Nicaragua', 
    'Panamá', 'Paraguay', 'Perú', 'Puerto Rico', 'Uruguay', 'Venezuela', 

    'Canadá', 'Estados Unidos', 

    'Albania', 'Alemania', 'Andorra', 'Austria', 'Bélgica', 'Bielorrusia', 
    'Bosnia y Herzegovina', 'Bulgaria', 'Chipre', 'Croacia', 'Dinamarca', 
    'Eslovaquia', 'Eslovenia', 'España', 'Estonia', 'Finlandia', 'Francia', 
    'Grecia', 'Hungría', 'Irlanda', 'Islandia', 'Italia', 'Kosovo', 'Letonia', 
    'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macedonia del Norte', 'Malta', 
    'Moldavia', 'Mónaco', 'Montenegro', 'Noruega', 'Países Bajos', 'Polonia', 
    'Portugal', 'Reino Unido', 'República Checa', 'Rumania', 'Rusia', 'San Marino', 
    'Serbia', 'Suecia', 'Suiza', 'Turquía', 'Ucrania', 'Vaticano'
];

// Iterar sobre cada país
foreach($countries as $country) {
    SelectionDetail::create([
        'description' => $country,
        'detail' => '',
        'selection_id' => '2',
        
    ]);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Lista de regiones de Perú


////////////////////////////////
$regions = [
    'Amazonas', 'Áncash', 'Apurímac', 'Arequipa', 'Ayacucho',
    'Cajamarca', 'Callao', 'Cusco', 'Huancavelica', 'Huánuco',
    'Ica', 'Junín', 'La Libertad', 'Lambayeque', 'Lima',
    'Loreto', 'Madre de Dios', 'Moquegua', 'Pasco', 'Piura',
    'Puno', 'San Martín', 'Tacna', 'Tumbes', 'Ucayali'
];


$provincias = [
    'Amazonas' => ['Bagua', 'Bongará', 'Chachapoyas', 'Condorcanqui', 'Luya', 'Rodríguez de Mendoza', 'Utcubamba'],
    'Áncash' => ['Aija', 'Antonio Raymondi', 'Asunción', 'Bolognesi', 'Carhuaz', 'Carlos Fermín Fitzcarrald', 'Casma', 'Corongo', 'Huari', 'Huarmey', 'Huaylas', 'Mariscal Luzuriaga', 'Ocros', 'Pallasca', 'Pomabamba', 'Recuay', 'Santa', 'Sihuas', 'Yungay'],
    'Apurímac' => ['Abancay', 'Andahuaylas', 'Antabamba', 'Aymaraes', 'Cotabambas', 'Grau'],
    'Arequipa' => ['Arequipa', 'Camaná', 'Caravelí', 'Castilla', 'Caylloma', 'Condesuyos', 'Islay', 'La Unión'],
    'Ayacucho' => ['Cangallo', 'Huanca Sancos', 'Huamanga', 'Huanta', 'La Mar', 'Lucanas', 'Parinacochas', 'Páucar del Sara Sara', 'Sucre', 'Víctor Fajardo', 'Vilcas Huamán'],
    'Cajamarca' => ['Cajabamba', 'Cajamarca', 'Celendín', 'Chota', 'Contumazá', 'Cutervo', 'Hualgayoc', 'Jaén', 'San Ignacio', 'San Marcos', 'San Miguel', 'San Pablo', 'Santa Cruz'],
    'Callao' => ['Callao'],
    'Cusco' => ['Acomayo', 'Anta', 'Calca', 'Canas', 'Canchis', 'Chumbivilcas', 'Cusco', 'Espinar', 'La Convención', 'Paruro', 'Paucartambo', 'Quispicanchi', 'Urubamba'],
    'Huancavelica' => ['Acobamba', 'Angaraes', 'Castrovirreyna', 'Churcampa', 'Huancavelica', 'Huaytará', 'Tayacaja'],
    'Huánuco' => ['Ambo', 'Dos de Mayo', 'Huacaybamba', 'Huánuco', 'Lauricocha', 'Leoncio Prado', 'Marañón', 'Pachitea', 'Puerto Inca', 'Yarowilca'],
    'Ica' => ['Chincha', 'Ica', 'Nazca', 'Palpa', 'Pisco'],
    'Junín' => ['Chanchamayo', 'Chupaca', 'Concepción', 'Huancayo', 'Jauja', 'Junín', 'Satipo', 'Tarma', 'Yauli'],
    'La Libertad' => ['Ascope', 'Bolívar', 'Chepén', 'Gran Chimú', 'Julcán', 'Otuzco', 'Pacasmayo', 'Pataz', 'Sánchez Carrión', 'Santiago de Chuco', 'Trujillo', 'Virú'],
    'Lambayeque' => ['Chiclayo', 'Ferreñafe', 'Lambayeque'],
    'Lima' => ['Barranca', 'Cajatambo', 'Canta', 'Cañete', 'Huaral', 'Huarochirí', 'Huaura', 'Lima', 'Oyón', 'Yauyos'],
    'Loreto' => ['Alto Amazonas', 'Loreto', 'Mariscal Ramón Castilla', 'Maynas', 'Requena', 'Ucayali'],
    'Madre de Dios' => ['Manu', 'Tahuamanu', 'Tambopata'],
    'Moquegua' => ['General Sánchez Cerro', 'Ilo', 'Mariscal Nieto'],
    'Pasco' => ['Daniel Alcides Carrión', 'Oxapampa', 'Pasco'],
    'Piura' => ['Ayabaca', 'Huancabamba', 'Morropón', 'Paita', 'Piura', 'Sechura', 'Sullana', 'Talara'],
    'Puno' => ['Azángaro', 'Carabaya', 'Chucuito', 'El Collao', 'Huancané', 'Lampa', 'Melgar', 'Moho', 'Puno', 'San Antonio de Putina', 'San Román', 'Sandia', 'Yunguyo'],
    'San Martín' => ['Bellavista', 'El Dorado', 'Huallaga', 'Lamas', 'Mariscal Cáceres', 'Moyobamba', 'Picota', 'Rioja', 'San Martín', 'Tocache'],
    'Tacna' => ['Candarave', 'Jorge Basadre', 'Tacna', 'Tarata'],
    'Tumbes' => ['Contralmirante Villar', 'Tumbes', 'Zarumilla'],
    'Ucayali' => ['Atalaya', 'Coronel Portillo', 'Padre Abad', 'Purús']
];

// Iterar sobre cada región
foreach ($regions as $region) {

   $region_ =   SelectionDetail::create([
            'description' => $region,
            'detail' => '',
            'selection_id' => '3',
        ]);
    // Obtener las provincias de la región actual
    $provinciasRegion = $provincias[$region];

    // Iterar sobre cada provincia de la región actual
    foreach ($provinciasRegion as $provincia) {
        SelectionDetail::create([
            'description' => $provincia,
            'associate_detail_id' => $region_->id,
                 'detail' => '',
            'selection_id' => '4',
        ]);
    }
    //

}
    //     // Iterar sobre cada  región actual
    // foreach ($regions as $region) {
    //     SelectionDetail::create([
    //         'description' => $region,
    //         'detail' => '',
    //         'selection_id' => '3',
    //     ]);
    // }

    }
}
