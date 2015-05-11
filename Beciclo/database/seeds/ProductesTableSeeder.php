<?php
 
use Illuminate\Database\Seeder;
 
class ProductesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('productes')->delete();
 
        $productes = array(
            ['id' => 1, 'titol' => 'Bicicleta', 'marca' => 'Rockrider', 'model'=>'520', 'preu'=>299.95, 'any'=>2014, 'pes_aprox'=>4.3, 'material'=>'Acer', 'color'=>'azul','usuari_id'=>2,'estat'=>'seminou', 'comentari'=> 'Bicicleta Rockrider Decathlon seminova', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'titol' => 'Cadena bicicleta', 'marca' => 'Btwin', 'model'=>'vel light', 'preu'=>18.99, 'any'=>2007, 'pes_aprox'=>0.263, 'material'=>'Alumini', 'color'=>'plata', 'usuari_id'=>1, 'estat'=>'nou', 'comentari'=>'Cadena creada per a bicicletes de 10 velocitats','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'titol' => 'Camara antipunxades', 'marca' => 'Michelin', 'model'=>'Protek Max','preu'=>9.80,'any'=>2015, 'pes_aprox'=>0.350, 'material'=>'caucho','color'=>'negre','usuari_id'=>3,'estat'=>'nou', 'comentari'=>'Camara Michelin per a pneumatics de 26 amb liquid reparador', 'created_at' => new DateTime, 'updated_at' => new DateTime]
            
        );
        // Uncomment the below to run the seeder
        DB::table('productes')->insert($productes);
    }
 
}