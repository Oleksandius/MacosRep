<?php
 
use Illuminate\Database\Seeder;
 
class ComentarisTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('comentaris')->delete();
 
        $comentaris = array(
            ['id' => 1, 'producte_id' => 1, 'comentari' => 'Se puede llegar a un acuerdo con el precio?', 'usuari_id'=>1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'producte_id' => 2, 'comentari' => "Es pot utilitzar en bicicletes d'una altra marca que no sigui btwin?", 'usuari_id'=>2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'produtce_id' => 3, 'comentari' => 'Cumple lo prometido', 'usuari_id'=>3, 'created_at' => new DateTime, 'updated_at' => new DateTime]
            
        );
        // Uncomment the below to run the seeder
        DB::table('comentaris')->insert($comentaris);
    }
 
}