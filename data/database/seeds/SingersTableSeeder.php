<?php

use Illuminate\Database\Seeder;

class SingersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('singers')->insert([
          [
            'name' => "Joe Dassin",
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
