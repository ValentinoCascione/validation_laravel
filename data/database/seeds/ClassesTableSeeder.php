<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('classes')->insert([
          [
            'name' => "Cra",
            'role' => "Assasin"
          ],
          [
            'name' => "Sacrieur",
            'role' => "Support"
          ],
          [
            'name' => "iop",
            'role' => "Assasin"
          ]
      ]);
    }
}
