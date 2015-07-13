<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        // $this->call(UrlTableSeeder::class);

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('users')->delete();

    DB::table('users')->insert([
      'username'  => 'doglover31',
      'password'   => 'heaven'
    ]);
    DB::table('users')->insert([
      'username'  => 'catlover23',
      'password'   => 'heaven'
    ]);
    DB::table('users')->insert([
      'username'  => 'cocacolaforlyfe234',
      'password'   => 'heaven'
    ]);


  }

}

