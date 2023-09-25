<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarCompanies;

class CarCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $carCompanies = [
            ['name' => 'بي ام دبليو | BMW'],
            ['name' => 'رينو | RENAULT'],
            ['name' => 'سوبارو | SUBARU'],
            ['name' => 'روفر | ROVER'],
            ['name' => 'سانغ يونغ | SSANGYONG'],
            ['name' => 'داتشا | DACIA'],
            ['name' => 'فولفو | VOLVO'],
            ['name' => 'الفا روميو | ALFA ROMEO'],
            ['name' => 'سكودا | SKODA'],
            ['name' => 'هونداي | HYUNDAI'],
            ['name' => 'فورد | FORD'],
            ['name' => 'سيات | SEAT'],
            ['name' => 'فولكسفاجن | VOLKSWAGEN'],
            ['name' => 'شفرليت | CHEVROLET'],
            ['name' => 'ستروين | CITROEN'],
            ['name' => 'دايو | DAEWOO'],
            ['name' => 'جاكوار'],
            ['name' => 'سوزوكي'],
            ['name' => 'جاجوار'],
            ['name' => 'SCANIA'],
            ['name' => 'اودي | AUDI'],
            ['name' => 'ميتسوبيشي | MITSUBISHI'],
            ['name' => 'اوبل | OPEL'],
            ['name' => 'شحن داف | DAF'],
            ['name' => 'دراجة هيوسونغ | HYOSUNG'],
            ['name' => 'كيا | KIA'],
            ['name' => 'شحن مان | MAN'],
            ['name' => 'جي ام سي | GMC'],
            ['name' => 'جيب | JEEP'],
            ['name' => 'دودج | DODGE'],
            ['name' => 'دراجة'],
            ['name' => 'شحن ايفيكو | IVECO'],
            ['name' => 'ايسوزو | ISUZU'],
            ['name' => 'مرسيدس | MERCEDES'],
            ['name' => 'بيجو | PEUGEOT'],
            ['name' => 'مازدا | MAZDA'],
            ['name' => 'تويوتا | TOYOTA'],
            ['name' => 'نيسان | NISSAN'],
            ['name' => 'لاندروفر | LAND ROVER'],
            ['name' => 'فيات | FIAT'],
            ['name' => 'هوندا | HONDA'],
        ];

        CarCompanies::insert($carCompanies);
    }
    
}
