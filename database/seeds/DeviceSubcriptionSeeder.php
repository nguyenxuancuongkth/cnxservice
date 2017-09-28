<?php

use Illuminate\Database\Seeder;
use App\Model\DeviceSubcription;

class DeviceSubcriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Validate the request...
        $device = new DeviceSubcription();
        $device->token = 'cbBCYVxAWH8:APA91bFj1IjvS-aDiTYU1HHwKjBVAeTuC5M7b_wHj3bGmXC3KYYBkLFrMNaQBre8gItskWw9cUCH58a3vBkPo4LDcqFC0ckeWS3dKlcqfBFEbUXEQUiA3h7Fm_8K9fkOvoZ69SHyY63I';
        $device->server_id = 3;
        $device->website_id = null;
        $device->save();
    }
}
