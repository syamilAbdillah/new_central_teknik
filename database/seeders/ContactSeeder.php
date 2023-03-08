<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
/*
082143957546 (marketing)
081325787107 (jasa)
082135565796 (admin)

*/
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marketing = new Contact();
        $marketing->name = 'marketing';
        $marketing->phone = '082143957546';
        $marketing->save();

        $jasa = new Contact();
        $jasa->name = 'jasa';
        $jasa->phone = '081325787107';
        $jasa->save();

        $admin = new Contact();
        $admin->name = 'admin';
        $admin->phone = '082135565796';
        $admin->save();
    }
}
