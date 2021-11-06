<?php

namespace Database\Seeders;

//use Database\Factories\ContactFactory;
use Illuminate\Database\Seeder;
use App\Models\ContactModel;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('contact')->insert([
//        'fullname' => Str::random(30),
//        'email'=>Str::random(10).'@yahoo.com',
//        'message'=>Str::random(150),
//    ]);
        ContactModel::factory()
            ->count(30)
            ->create();

    }
}
