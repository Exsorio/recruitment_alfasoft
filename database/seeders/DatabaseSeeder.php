<?php

namespace Database\Seeders;
use App\Models\Contact;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Default creat 10 Contacts to visual show
        
        $contact = Contact::factory(10)->create();

    }
}
