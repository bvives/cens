<?php
 
use Illuminate\Database\Seeder;
 
class PoblacionsSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('poblacions')->delete();
 
        $poblacions = array(
            ['id' => 1, 'name' => 'poblacio 1', 'slug' => 'poblacio-1', 'habitants'=>1300, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'poblacio 2', 'slug' => 'poblacio-2', 'habitants'=>2500, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('poblacions')->insert($poblacions);
    }
 
}