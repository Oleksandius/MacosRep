<?php
 
use Illuminate\Database\Seeder;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'Oleksanrdius', 'cognom' => 'Vynokurius','email'=>'oleksandr.first@gmail.com','password'=>'1234','provincia'=>'Barcelona','ciutat'=>'Barcelona','direccio'=>'c.Espanya','telefon'=>'688381975','puntuacio'=>9.123,'foto'=>null,'remember_token'=>null ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Miriamius', 'cognom' => 'Dominguius','email'=>'miriam.first@gmail.com','password'=>'1234','provincia'=>'Barcelona','ciutat'=>'Barcelona','direccio'=>'c.Espanya','telefon'=>'688381975','puntuacio'=>9.123,'foto'=>null,'remember_token'=>null ,'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Guillemius', 'cognom' => 'Micoquius','email'=>'guillem.first@gmail.com','password'=>'1234','provincia'=>'Barcelona','ciutat'=>'Barcelona','direccio'=>'c.Espanya','telefon'=>'688381975','puntuacio'=>9.123,'foto'=>null,'remember_token'=>null ,'created_at' => new DateTime, 'updated_at' => new DateTime],
      
        );
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}