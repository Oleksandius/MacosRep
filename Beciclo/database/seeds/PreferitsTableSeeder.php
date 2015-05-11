<?php
 
use Illuminate\Database\Seeder;
 
class PreferitsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('preferits')->delete();
 
        $preferits = array(
            ['id' => 1, 'usuari_id'=>3, 'producte_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'usuari_id'=>1, 'producte_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'usuari_id'=>2, 'produtce_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime]
            
        );
        // Uncomment the below to run the seeder
        DB::table('preferits')->insert($preferits);
    }
 
}