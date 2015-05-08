<?php
 
use Illuminate\Database\Seeder;
 
class UsuarisTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('usuaris')->delete();
 
        $usuaris = array(
            ['id' => 1, 'nom' => 'Oleksanrdius', 'cognom' => 'Vynokurius','mail'=>'oleksandr.first@gmail.com','telefon'=>'688381975','direccio'=>'c.Espanya','provincia'=>'Barcelona','ciutat'=>'Barcelona','puntuacio'=>9.123,'foto'=>null,'contrasenya'=>'1234', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Miriamius', 'cognom' => 'Domingius','mail'=>'miriam.domingues@gmail.com','telefon'=>'666888111','direccio'=>'c.Marina','provincia'=>'Barcelona','ciutat'=>'Barcelona','puntuacio'=>9.123,'foto'=>null,'contrasenya'=>'5678', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Guillemius', 'cognom' => 'Micoquius','mail'=>'guillem.mico@gmail.com','telefon'=>'666111333','direccio'=>'c.Arc','provincia'=>'Barcelona','ciutat'=>'Barcelona','puntuacio'=>9.123,'foto'=>null,'contrasenya'=>'9876', 'created_at' => new DateTime, 'updated_at' => new DateTime]
            
        );
        // Uncomment the below to run the seeder
        DB::table('usuaris')->insert($usuaris);
    }
 
}