<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $armaflex = new Product();
        $armaflex->name = 'armaflex';
        $armaflex->image = 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flocal.armacell.com%2Ffileadmin%2F_processed_%2F5%2F4%2Fcsm_Armaflex_protect_tube_image_575685d885.jpg&f=1&nofb=1&ipt=312d064fec5aa8e58eb897d50699face788d3e562335a4710870615791ea32eb&ipo=images';
        $armaflex->merk_id = 1;
        $armaflex->save();

        $bracket_plastic = new Product();
        $bracket_plastic->name = 'bracket plastik';
        $bracket_plastic->image = 'https://sc01.alicdn.com/kf/UT8kumzXHpaXXcUQpbXW/220086798/UT8kumzXHpaXXcUQpbXW.png';
        $bracket_plastic->merk_id = 1;
        $bracket_plastic->save();

        $cutter = new Product();
        $cutter->name = 'cutter';
        $cutter->image = 'https://ae01.alicdn.com/kf/HTB168fQQVXXXXb3XVXXq6xXFXXX7/High-Quality-Paper-Cutter-Large-Size-Utility-Knife-Auto-lock-Paper-Cutter-With-spare-blade-School.jpg';
        $cutter->merk_id = 1;
        $cutter->save();

        $comp_ac = new Product();
        $comp_ac->name = 'comp. ac';
        $comp_ac->image = 'https://img1.tongtool.com/u/kikmooolimkmkhkminqpltsqsonrnlmnkrmjDJAI.jpg';
        $comp_ac->merk_id = 1;
        $comp_ac->save();

        $cooper_pipa = new Product();
        $cooper_pipa->name = 'cooper pipa set ac';
        $cooper_pipa->image = 'https://irp-cdn.multiscreensite.com/6ce3488c/dms3rep/multi/Pipa+Double+NS+Premium+Insulated+Copper+Pipe+ICPE+AC+Inverter-79295064.jpg';
        $cooper_pipa->merk_id = 1;
        $cooper_pipa->save();

        $came_lock = new Product();
        $came_lock->name = 'came lock';
        $came_lock->image = 'https://static.grainger.com/rp/s/is/image/Grainger/4NAF7_AS01';
        $came_lock->merk_id = 1;
        $came_lock->save();

        $capacitor = new Product();
        $capacitor->name = 'capacitor';
        $capacitor->image = 'https://ae01.alicdn.com/kf/HTB1uXxtklDH8KJjSspnq6zNAVXai/10pcs-CBB-capacitor-104-400V-104J-0-1uF-100nF-P10-CL21-Metallized-Polypropylene-Film-Capacitor.jpg';
        $capacitor->merk_id = 1;
        $capacitor->save();

        $duck_tape = new Product();
        $duck_tape->name = 'duck tape';
        $duck_tape->image = 'https://cdn.bmstores.co.uk/images/hpcProductImage/imgFull/308772-Duck-Tape-Original-50mmx25m-Black1.jpg';
        $duck_tape->merk_id = 1;
        $duck_tape->save();

        $motor_swing = new Product();
        $motor_swing->name = 'motor swing';
        $motor_swing->image = 'https://brisaclimatizadores.com.br/img/p/9/5/95-thickbox_default.jpg';
        $motor_swing->merk_id = 1;
        $motor_swing->save();
    }
}
