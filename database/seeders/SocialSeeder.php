<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ig = new Social();
        $ig->name = 'instagram';
        $ig->link = 'https://www.instagram.com/instagram';
        $ig->image = 'https://images.all-free-download.com/images/graphiclarge/instagram_new_icon_6822180.jpg';
        $ig->save();
        $fb = new Social();
        $fb->name = 'facebook';
        $fb->link = 'https://www.facebook.com/danawallet';
        $fb->image = 'https://seeklogo.com/images/F/facebook-logo-966BBFBC34-seeklogo.com.png';
        $fb->save();
        $fb = new Social();
        $fb->name = 'tokopedia';
        $fb->link = 'https://www.tokopedia.com/xiaomi';
        $fb->image = 'https://seeklogo.com/images/T/tokopedia-logo-5340B636F6-seeklogo.com.png';
        $fb->save();
    }
}
