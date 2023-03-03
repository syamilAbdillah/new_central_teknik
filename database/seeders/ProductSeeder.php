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

        $remote_ac = new Product();
        $remote_ac->name = 'remote / battery';
        $remote_ac->image = 'https://www.hometech2u.com.my/image/hometech/image/cache/data/all_product_images/product-1122/WapIqyWm1573922027-800x800.jpg';
        $remote_ac->merk_id = 1;
        $remote_ac->save();

        $kran_ac = new Product();
        $kran_ac->name = 'kran ac';
        $kran_ac->image = 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/11/3/2953870/2953870_403f451e-6d3a-4313-be09-5b8b1c48296d_1536_1536.jpg';
        $kran_ac->merk_id = 1;
        $kran_ac->save();

        $spuyer = new Product();
        $spuyer->name = 'spuyer';
        $spuyer->image = 'https://ecs7.tokopedia.net/img/cache/700/attachment/2018/7/7/153094013762665/153094013762665_ef209177-4b19-4a26-b77b-21b2eb08fada.png';
        $spuyer->merk_id = 1;
        $spuyer->save();

        $vacuum = new Product();
        $vacuum->name = 'vacuum ac';
        $vacuum->image = 'https://i5.walmartimages.com/asr/e84ea5bb-d6b8-4190-99f3-19ea6e9c73bb_1.c85b0381446258d62b7cd80dc53cd30c.jpeg';
        $vacuum->merk_id = 1;
        $vacuum->save();

        $tube_bender = new Product();
        $tube_bender->name = 'tube bender';
        $tube_bender->image = 'https://www.derbyshire-refrigeration.co.uk/wp-content/uploads/2017/09/products-Javac-Hydraulic-Tube-Bender.jpg';
        $tube_bender->merk_id = 1;
        $tube_bender->save();

        $thermostat = new Product();
        $thermostat->name = 'thermostat';
        $thermostat->image = 'http://new-england-contractor.com/news/wp-content/uploads/2006/02/prog-thermostat.jpg';
        $thermostat->merk_id = 1;
        $thermostat->save();

        $condensor = new Product();
        $condensor->name = 'condensor';
        $condensor->image = 'https://5.imimg.com/data5/VK/FS/MY-4586289/condenser-coil-500x500.jpg';
        $condensor->merk_id = 1;
        $condensor->save();

        $evaporator = new Product();
        $evaporator->name = 'evaporator';
        $evaporator->image = 'http://www.buyautoparts.com/data/all_images/EV0110PFC.-Map1.jpg';
        $evaporator->merk_id = 1;
        $evaporator->save();

        $ventilator = new Product();
        $ventilator->name = 'ventilator';
        $ventilator->image = 'https://ae01.alicdn.com/kf/HTB1XtkqhbuWBuNjSszgq6z8jVXaU/350mm-380V-Air-Conditioner-Ventilation-Fan-IP-44-Cooling-Axial-Fan-FJ4D-350-FGV.jpg';
        $ventilator->merk_id = 1;
        $ventilator->save();

        $expansion = new Product();
        $expansion->name = 'expansion';
        $expansion->image = 'https://i5.walmartimages.com/asr/002d3bae-9b0e-4f8d-aab7-5662b1724a2d_1.6962f57df896f4f3ff9ca2d887d057d4.jpeg';
        $expansion->merk_id = 1;
        $expansion->save();

        $flaring = new Product();
        $flaring->name = 'flaring';
        $flaring->image = 'https://acdistributors.com/wp-content/uploads/2018/09/61w4K8fQUL._SL1000_.jpg';
        $flaring->merk_id = 1;
        $flaring->save();

        $freon = new Product();
        $freon->name = 'freon';
        $freon->image = 'http://ocnjdaily.com/wp-content/uploads/2017/05/freon-refrigerant.jpeg';
        $freon->merk_id = 1;
        $freon->save();

        $fan_motor = new Product();
        $fan_motor->name = 'fan motor';
        $fan_motor->image = 'http://www.surpluscenter.com/productImages/image.axd/i.10-PM3645/w.1000/h.1000/12+Volt+DC+1925+RPM+Fan+Motor+PM3645_L.jpg';
        $fan_motor->merk_id = 1;
        $fan_motor->save();

        $heater = new Product();
        $heater->name = 'heater';
        $heater->image = 'https://mobileimages.lowes.com/product/converted/093645/093645903140.jpg';
        $heater->merk_id = 1;
        $heater->save();

        $kran_tanduk = new Product();
        $kran_tanduk->name = 'kran tanduk globe v/v';
        $kran_tanduk->image = 'http://image1ws.indotrading.com/s3/productimages/co18055/p122533/w300-h300/6fa9e0f6-9b12-4670-973c-1fe494b15263w.jpg';
        $kran_tanduk->merk_id = 1;
        $kran_tanduk->save();

        $manifold = new Product();
        $manifold->name = 'manifold';
        $manifold->image = 'http://cfnewsads.thomasnet.com/images/large/452/452822.jpg';
        $manifold->merk_id = 1;
        $manifold->save();

        $manifold_selang = new Product();
        $manifold_selang->name = 'manifold selang';
        $manifold_selang->image = 'https://s3.bukalapak.com/img/8524854506/large/Selang_Manifold___selang_pengisian_AC_Freon_R_22_isi_3_selan.jpg';
        $manifold_selang->merk_id = 1;
        $manifold_selang->save();

        $orifice = new Product();
        $orifice->name = 'orifice';
        $orifice->image = 'http://www.packedvalve.com/File%20product/Orifice/Orifice%20(set).png';
        $orifice->merk_id = 1;
        $orifice->save();

        $oil_sparator = new Product();
        $oil_sparator->name = 'oil sparator';
        $oil_sparator->image = 'https://www.onallcylinders.com/wp-content/uploads/2014/04/MOR-85487_xl.jpg';
        $oil_sparator->merk_id = 1;
        $oil_sparator->save();

        $oil_compressor = new Product();
        $oil_compressor->name = 'oil compressor';
        $oil_compressor->image = 'https://images.air-compressor.org/l-m/2287-oil-lubricated-portable-horizontal.jpg';
        $oil_compressor->merk_id = 1;
        $oil_compressor->save();

        $pressure_control = new Product();
        $pressure_control->name = 'pressure control kp15';
        $pressure_control->image = 'https://www.smartclima.com/wp-content/uploads/2013/06/Danfoss-pressure-controls-KP15.jpg';
        $pressure_control->merk_id = 1;
        $pressure_control->save();

        $pressure_switch = new Product();
        $pressure_switch->name = 'pressure switch mp54';
        $pressure_switch->image = 'https://www.techniekhulp.nl/content/pd-17866-1-139078/Danfoss_MP54_oliedrukpressostaat_45_sec_060B016666_oilpressureswitch.jpg';
        $pressure_switch->merk_id = 1;
        $pressure_switch->save();

        $pvc_hanger = new Product();
        $pvc_hanger->name = 'pvc hanger';
        $pvc_hanger->image = 'https://www.distributorbangunan.com/wp-content/uploads/2014/08/Gantungan-Talang-PVC.jpg';
        $pvc_hanger->merk_id = 1;
        $pvc_hanger->save();

        $blade = new Product();
        $blade->name = 'blade';
        $blade->image = 'https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/8/3/c3f47ba1-f3b6-4c89-a911-f3e960ebad14.jpg';
        $blade->merk_id = 1;
        $blade->save();

        $capiler = new Product();
        $capiler->name = 'capiler';
        $capiler->image = 'https://ecs7.tokopedia.net/img/cache/700/product-1/2019/8/1/6509833/6509833_2920b581-d782-45fa-9a2c-cb5eaae71b07_1512_1512.jpg';
        $capiler->merk_id = 1;
        $capiler->save();

        $condensor_kulkas = new Product();
        $condensor_kulkas->name = 'condensor kulkas';
        $condensor_kulkas->image = 'https://kliniktekno.com/wp-content/uploads/Kondensor-kulkas.jpg';
        $condensor_kulkas->merk_id = 1;
        $condensor_kulkas->save();

        $conpressor_kulkas = new Product();
        $conpressor_kulkas->name = 'conpressor kulkas';
        $conpressor_kulkas->image = 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/4/22/2706832/2706832_7f05b544-b842-4c57-a51d-d764ac9468da_2048_2048.jpg';
        $conpressor_kulkas->merk_id = 1;
        $conpressor_kulkas->save();

        $filter_kulkas = new Product();
        $filter_kulkas->name = 'filter kulkas';
        $filter_kulkas->image = 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/9/26/3591940/3591940_44e8af19-cf48-4f39-9487-1504f4dd4df9_1040_1040.jpg';
        $filter_kulkas->merk_id = 1;
        $filter_kulkas->save();

        $fan_motor_kulkas = new Product();
        $fan_motor_kulkas->name = 'fan motor kulkas';
        $fan_motor_kulkas->image = 'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/6/24/6727390/6727390_87b718b1-be64-4277-9792-6f06beae00fe_1512_1512.jpg';
        $fan_motor_kulkas->merk_id = 1;
        $fan_motor_kulkas->save();
    }
}
