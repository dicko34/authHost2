<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarCompanies; 
use App\Models\CarModels;
class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $bmwCompany = CarCompanies::where('name', 'بي ام دبليو | BMW')->first();

            // Define the BMW car models
            $bmwModels = [
                '316',
                '317',
                '730',
                'i 328',
                'M3',
                'M4',
                'i 116',
                'x1',
                'x2',
                'x3',
                'x4',
                'x5',
                'x6',
                'x7',
                'i 120',
                'i 116',
                '318',
                '435',
                '535',
                '520',
                '525',
                '528',
                '530',
                '535',
                'E60',
                'M4',
                'M3',
                '740',
                '525',
                '528',
                '320',
                'كوبرا',
                '325',
            ];

            // Insert each BMW model into the car_models table under the "BMW" company
            foreach ($bmwModels as $model) {
                CarModels::create([
                    'car_company_name' => $bmwCompany->name, // Reference the BMW company
                    'model_name' => $model,
                ]);
            }

            // Find the Renault car company
            $renaultCompany = CarCompanies::where('name', 'رينو | RENAULT')->first();

            // Define the Renault car models
            $renaultModels = [
                'R5',
                'R9',
                'اكسبرس',
                'توينجو',
                'توينجو',
                'سينيك',
                'فلوانس',
                'كانجو',
                'كليو',
                'لاجوانا',
                'ميغان',
                'كابتور',
            ];

            // Insert each Renault model into the car_models table under the "رينو | RENAULT" company
            foreach ($renaultModels as $model) {
                CarModels::create([
                    'car_company_name' => $renaultCompany->name, // Reference the Renault company
                    'model_name' => $model,
                ]);
            }


            // Find the Subaru car company
            $subaruCompany = CarCompanies::where('name', 'سوبارو | SUBARU')->first();

            // Define the Subaru car models
            $subaruModels = [
                'عريض',
            ];

            // Insert each Subaru model into the car_models table under the "سوبارو | SUBARU" company
            foreach ($subaruModels as $model) {
                CarModels::create([
                    'car_company_name' => $subaruCompany->name, // Reference the Subaru company
                    'model_name' => $model,
                ]);
            }

                // Find the Rover car company
            $roverCompany = CarCompanies::where('name', 'روفر | ROVER')->first();

            // Define the Rover car models
            $roverModels = [
                'S400',
            ];

            // Insert each Rover model into the car_models table under the "روفر | ROVER" company
            foreach ($roverModels as $model) {
                CarModels::create([
                    'car_company_name' => $roverCompany->name, // Reference the Rover company
                    'model_name' => $model,
                ]);
            }

            // Find the SsangYong car company
            $ssangYongCompany = CarCompanies::where('name', 'سانغ يونغ | SSANGYONG')->first();

            // Define the SsangYong car models
            $ssangYongModels = [
                'ركستون',
            ];

            // Insert the SsangYong model into the car_models table under the "سانغ يونغ | SSANGYONG" company
            foreach ($ssangYongModels as $model) {
                CarModels::create([
                    'car_company_name' => $ssangYongCompany->name, // Reference the SsangYong company
                    'model_name' => $model,
                ]);
            }

            // Find the Dacia car company
            $daciaCompany = CarCompanies::where('name', 'داتشا | DACIA')->first();

            // Define the Dacia car models
            $daciaModels = [
                'لودجي',
            ];

            // Insert the Dacia model into the car_models table under the "داتشا | DACIA" company
            foreach ($daciaModels as $model) {
                CarModels::create([
                    'car_company_name' => $daciaCompany->name, // Reference the Dacia company
                    'model_name' => $model,
                ]);
            }

            // Find the Skoda car company
            $skodaCompany = CarCompanies::where('name', 'سكودا | SKODA')->first();

            // Define the Skoda car models
            $skodaModels = [
                'فابيا',
                'اوكتافيا',
                'كودياك',
                'نيو',
                'رابيد',
                'CITIGO',
                'سوبيرب',
                'يتي',
                'كاروك',
                'رومستر',
            ];

            // Insert each Skoda model into the car_models table under the "سكودا | SKODA" company
            foreach ($skodaModels as $model) {
                CarModels::create([
                    'car_company_name' => $skodaCompany->name, // Reference the Skoda company
                    'model_name' => $model,
                ]);
            }

                // Find the Hyundai car company
            $hyundaiCompany = CarCompanies::where('name', 'هونداي | HYUNDAI')->first();

            // Define the Hyundai car models
            $hyundaiModels = [
                'اكسنت',
                'توسان',
                'i30',
                'سانتافيه',
                'ماتركس',
                'جيتس',
                'توسان',
                'كونا',
                'افانتي',
                'الانترا',
                'فيرنا',
                'H1',
                'اكسنت',
                'IX 35',
                'CR_V',
                'سيفيك',
                'فيلوستر',
                'تيراكان',
                'تراجيت',
                'كليك',
                'توكسون',
                'ايونيك',
                'فينيو',
            ];

            // Insert each Hyundai model into the car_models table under the "هونداي | HYUNDAI" company
            foreach ($hyundaiModels as $model) {
                CarModels::create([
                    'car_company_name' => $hyundaiCompany->name, // Reference the Hyundai company
                    'model_name' => $model,
                ]);
            }


            // Find the Ford car company
            $fordCompany = CarCompanies::where('name', 'فورد | FORD')->first();

            // Define the Ford car models
            $fordModels = [
                'فوكس',
                'فيستا',
                'F150',
                'مونديو',
                'اكيلاين',
            ];

            // Insert each Ford model into the car_models table under the "فورد | FORD" company
            foreach ($fordModels as $model) {
                CarModels::create([
                    'car_company_name' => $fordCompany->name, // Reference the Ford company
                    'model_name' => $model,
                ]);
            }


            // Find the SEAT car company
            $seatCompany = CarCompanies::where('name', 'سيات | SEAT')->first();

            // Define the SEAT car models
            $seatModels = [
                'ليون',
                'ابيزا',
                'كوبرا',
                'قرطبة',
                'اتيكا',
                'ارونا',
            ];

            // Insert each SEAT model into the car_models table under the "سيات | SEAT" company
            foreach ($seatModels as $model) {
                CarModels::create([
                    'car_company_name' => $seatCompany->name, // Reference the SEAT company
                    'model_name' => $model,
                ]);
            }


            // Find the Citroen car company
            $citroenCompany = CarCompanies::where('name', 'ستروين | CITROEN')->first();

            // Define the Citroen car models
            $citroenModels = [
                'C4',
                'كسارا',
                'C1',
                'بيرلينجو',
                'C-Elysee',
            ];

            // Insert each Citroen model into the car_models table under the "ستروين | CITROEN" company
            foreach ($citroenModels as $model) {
                CarModels::create([
                    'car_company_name' => $citroenCompany->name, // Reference the Citroen company
                    'model_name' => $model,
                ]);
            }

                // Find the Audi car company
            $audiCompany = CarCompanies::where('name', 'اودي | AUDI')->first();

            // Define the Audi car models
            $audiModels = [
                'A6',
                'A4',
                '80',
                'Q5',
                'Q2',
                'A80',
                'SLine',
            ];

            // Insert each Audi model into the car_models table under the "اودي | AUDI" company
            foreach ($audiModels as $model) {
                CarModels::create([
                    'car_company_name' => $audiCompany->name, // Reference the Audi company
                    'model_name' => $model,
                ]);
            }

            // Find the Mitsubishi car company
            $mitsubishiCompany = CarCompanies::where('name', 'ميتسوبيشي | MITSUBISHI')->first();

            // Define the Mitsubishi car models
            $mitsubishiModels = [
                'ماجنوم',
                'L200',
                'L400',
                'باجيرو',
                'لانسر',
            ];

            // Insert each Mitsubishi model into the car_models table under the "ميتسوبيشي | MITSUBISHI" company
            foreach ($mitsubishiModels as $model) {
                CarModels::create([
                    'car_company_name' => $mitsubishiCompany->name, // Reference the Mitsubishi company
                    'model_name' => $model,
                ]);
            }


            // Find the Kia car company
            $kiaCompany = CarCompanies::where('name', 'كيا | KIA')->first();

            // Define the Kia car models
            $kiaModels = [
                'ستونك',
                'اوبتيما',
                'MORNING',
                'سبورتاج',
                'سول',
                'سورينتو',
                'برايد',
                'بيكانتو',
                'ريو',
                'سيراتو',
                'فورتي',
                'ماجينتس',
                'K5',
            ];

            // Insert each Kia model into the car_models table under the "كيا | KIA" company
            foreach ($kiaModels as $model) {
                CarModels::create([
                    'car_company_name' => $kiaCompany->name, // Reference the Kia company
                    'model_name' => $model,
                ]);
            }


            // Find the Jeep car company
            $jeepCompany = CarCompanies::where('name', 'جيب | JEEP')->first();

            // Define the Jeep car models
            $jeepModels = [
                'كومباس',
                'شيروكي',
                'روبيكون',
            ];

            // Insert each Jeep model into the car_models table under the "جيب | JEEP" company
            foreach ($jeepModels as $model) {
                CarModels::create([
                    'car_company_name' => $jeepCompany->name, // Reference the Jeep company
                    'model_name' => $model,
                ]);
            }


                    // Find the IVECO car company
            $ivecoCompany = CarCompanies::where('name', 'شحن ايفيكو | IVECO')->first();

            // Define the IVECO car models
            $ivecoModels = [
                '50C13',
                '65C18',
                'ديلي',
            ];

            // Insert each IVECO model into the car_models table under the "شحن ايفيكو | IVECO" company
            foreach ($ivecoModels as $model) {
                CarModels::create([
                    'car_company_name' => $ivecoCompany->name, // Reference the IVECO company
                    'model_name' => $model,
                ]);
            }

                    // Find the ISUZU car company
            $isuzuCompany = CarCompanies::where('name', 'ايسوزو | ISUZU')->first();

            // Define the ISUZU car models
            $isuzuModels = [
                '3900',
                'تروبر',
                'ديماكس',
                '4.8',
            ];

            // Insert each ISUZU model into the car_models table under the "ايسوزو | ISUZU" company
            foreach ($isuzuModels as $model) {
                CarModels::create([
                    'car_company_name' => $isuzuCompany->name, // Reference the ISUZU company
                    'model_name' => $model,
                ]);
            }

                // Find the MERCEDES car company
            $mercedesCompany = CarCompanies::where('name', 'مرسيدس | MERCEDES')->first();

            // Define the MERCEDES car models
            $mercedesModels = [
                'فيتو',
                '280',
                'E200',
                'C200',
                'C300',
                '518',
                '416',
                'سبرتنر',
                'E250',
                '230',
                'GIK 250',
                'C220',
                '220',
                '412',
                '180',
                'E280',
                'اتيكو 1018',
                '416',
                'ML 320',
            ];

            // Insert each MERCEDES model into the car_models table under the "مرسيدس | MERCEDES" company
            foreach ($mercedesModels as $model) {
                CarModels::create([
                    'car_company_name' => $mercedesCompany->name, // Reference the MERCEDES company
                    'model_name' => $model,
                ]);
            }



                // Find the PEUGEOT car company
            $peugeotCompany = CarCompanies::where('name', 'بيجو | PEUGEOT')->first();

            // Define the PEUGEOT car models
            $peugeotModels = [
                '104',
                '106',
                '107',
                '2008',
                '204',
                '205',
                '206+',
                '207',
                '208',
                '3008',
                '301',
                '305',
                '306',
                '307',
                '308',
                'بارتنر',
                '508',
                '406',
                '206',
                '407',
                '206',
            ];

            // Insert each PEUGEOT model into the car_models table under the "بيجو | PEUGEOT" company
            foreach ($peugeotModels as $model) {
                CarModels::create([
                    'car_company_name' => $peugeotCompany->name, // Reference the PEUGEOT company
                    'model_name' => $model,
                ]);
            }

            // Find the MAZDA car company
            $mazdaCompany = CarCompanies::where('name', 'مازدا | MAZDA')->first();

            // Define the MAZDA car models
            $mazdaModels = [
                '3',
                '323',
                '325',
                '5',
                '6',
                'BT50',
                'دميو',
                'لانتس',
                'mpv',
                'تندر',
                'cx3',
            ];

            // Insert each MAZDA model into the car_models table under the "مازدا | MAZDA" company
            foreach ($mazdaModels as $model) {
                CarModels::create([
                    'car_company_name' => $mazdaCompany->name, // Reference the MAZDA company
                    'model_name' => $model,
                ]);
            }


                // Find the TOYOTA car company
            $toyotaCompany = CarCompanies::where('name', 'تويوتا | TOYOTA')->first();

            // Define the TOYOTA car models
            $toyotaModels = [
                'كورولا',
                'افانزا',
                'لاندكروزر',
            ];

            // Insert each TOYOTA model into the car_models table under the "تويوتا | TOYOTA" company
            foreach ($toyotaModels as $model) {
                CarModels::create([
                    'car_company_name' => $toyotaCompany->name, // Reference the TOYOTA company
                    'model_name' => $model,
                ]);
            }

            // Find the nissan car company
            $nissanCompany = CarCompanies::where('name', 'نيسان | NISSAN')->first();

            // Define the nissan car models
            $nissanModels = [
                'جوك',
                'ميكرا',
                'تيدا',
                'كشكاي',
                'باث فايندر',
                'NV200',
            ];

            // Insert each nissan model into the car_models table under the "نيسان | nissan" company
            foreach ($nissanModels as $model) {
                CarModels::create([
                    'car_company_name' => $nissanCompany->name, // Reference the nissan company
                    'model_name' => $model,
                ]);
            }

                    
    
                    // Find the LANDROVER car company
            $landroverCompany = CarCompanies::where('name', 'لاندروفر | LAND ROVER')->first();

            // Define the LANDROVER car models
            $landroverModels = [
                'أيفوك',
                'رانج روفر سبورت',
                'ديفيندر',
                'ديفيند',
                'ديسكفري',
            ];

            // Insert each LANDROVER model into the car_models table under the "لاند روفر | LANDROVER" company
            foreach ($landroverModels as $model) {
                CarModels::create([
                    'car_company_name' => $landroverCompany->name, // Reference the LANDROVER company
                    'model_name' => $model,
                ]);
            }

    }
}