<?php
 
use Illuminate\Database\Seeder;
 
class VotantsSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('votants')->delete();
 
        $votants = array(
            ['id' => 1, 'name' => 'votant 1', 'slug' => 'votant-1', 'poblacion_id' => 1, 'dni' => '12345678A', 'dataNaixement' => '1970-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'votant 2', 'slug' => 'votant-2', 'poblacion_id' => 2, 'dni' => '12345678B', 'dataNaixement' => '1971-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'votant 3', 'slug' => 'votant-3', 'poblacion_id' => 2, 'dni' => '12345678C', 'dataNaixement' => '1972-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'votant 4', 'slug' => 'votant-4', 'poblacion_id' => 2, 'dni' => '12345678D', 'dataNaixement' => '1973-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'votant 5', 'slug' => 'votant-5', 'poblacion_id' => 1, 'dni' => '12345678E', 'dataNaixement' => '1974-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'votant 6', 'slug' => 'votant-6', 'poblacion_id' => 1, 'dni' => '12345678F', 'dataNaixement' => '1975-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'votant 7', 'slug' => 'votant-7', 'poblacion_id' => 2, 'dni' => '12345678G', 'dataNaixement' => '1976-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'votant 8', 'slug' => 'votant-8', 'poblacion_id' => 2, 'dni' => '12345678H', 'dataNaixement' => '1977-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'votant 9', 'slug' => 'votant-9', 'poblacion_id' => 2, 'dni' => '12345678I', 'dataNaixement' => '1978-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'votant 10', 'slug' => 'votant-10', 'poblacion_id' => 2, 'dni' => '12345678J', 'dataNaixement' => '1979-05-03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            
        );
 
        //// Uncomment the below to run the seeder
        DB::table('votants')->insert($votants);
    }
 
}