<?php

namespace Database\Seeders;

use App\Models\Merk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bitzer = new Merk();
        $bitzer->name = "bitzer";
        $bitzer->image = "https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770771/new_central_teknik/kann8vgsitkuzn0ei3oy.png";
        $bitzer->save();

        $castel = new Merk();
        $castel->name = 'castel';
        $castel->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770784/new_central_teknik/ozu8c2cuojlzzmyog1om.png';
        $castel->save();

        $chemours = new Merk();
        $chemours->name = 'chemours';
        $chemours->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770809/new_central_teknik/coew3dn9htpe1p3ih1wa.png';
        $chemours->save();

        $danfoss = new Merk();
        $danfoss->name = 'danfoss';
        $danfoss->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770857/new_central_teknik/cj09fotmpec70wrm5q0r.png';
        $danfoss->save();

        $ebmpapst = new Merk();
        $ebmpapst->name = 'ebmpapst';
        $ebmpapst->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770875/new_central_teknik/l0rmckeangy6y530gwpk.png';
        $ebmpapst->save();

        $eliwell = new Merk();
        $eliwell->name = 'eliwell';
        $eliwell->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770893/new_central_teknik/unpe3k6pqib7ivesx57s.png';
        $eliwell->save();

        $copeland = new Merk();
        $copeland->name = 'copeland';
        $copeland->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770929/new_central_teknik/wdlmjanupwmxittplhpw.png';
        $copeland->save();

        $guntner = new Merk();
        $guntner->name = 'guntner';
        $guntner->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770953/new_central_teknik/s1zcpixovqmzq1bv3cky.png';
        $guntner->save();

        $honeywell = new Merk();
        $honeywell->name = 'honeywell';
        $honeywell->image = 'https://res.cloudinary.com/abdillahsyamil77/image/upload/v1677770973/new_central_teknik/ij7lijvrrf32pnjvbnrp.png';
        $honeywell->save();


    }
}
