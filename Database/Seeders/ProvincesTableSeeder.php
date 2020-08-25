<?php

namespace Modules\VietNamZone\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Database\Seeders\Traits\DisableForeignKeys;
use Modules\VietNamZone\Entities\VietNamZone;

class ProvincesTableSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        VietNamZone::where('grade', config('vietnamzone.province'))->delete();
        $vietnamZones = [

                    [
                        'id'        => 1,
                        'vi'        => ['name' => 'Thành phố Hà Nội'],
                        'en'        => ['name' => 'Ha Noi City'],
                        'gso_id'    => '01',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 2,
                        'vi'        => ['name' => 'Tỉnh Hà Giang'],
                        'en'        => ['name' => 'Ha Giang province'],
                        'gso_id'    => '02',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 3,
                        'vi'        => ['name' => 'Tỉnh Cao Bằng'],
                        'en'        => ['name' => 'Cao Bang province'],
                        'gso_id'    => '04',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 4,
                        'vi'        => ['name' => 'Tỉnh Bắc Kạn'],
                        'en'        => ['name' => 'Bac Kan province'],
                        'gso_id'    => '06',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 5,
                        'vi'        => ['name' => 'Tỉnh Tuyên Quang'],
                        'en'        => ['name' => 'Tuyen Quang province'],
                        'gso_id'    => '08',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 6,
                        'vi'        => ['name' => 'Tỉnh Lào Cai'],
                        'en'        => ['name' => 'Lao Cai province'],
                        'gso_id'    => '10',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 7,
                        'vi'        => ['name' => 'Tỉnh Điện Biên'],
                        'en'        => ['name' => 'Dien Bien province'],
                        'gso_id'    => '11',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 8,
                        'vi'        => ['name' => 'Tỉnh Lai Châu'],
                        'en'        => ['name' => 'Lai Chau province'],
                        'gso_id'    => '12',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 9,
                        'vi'        => ['name' => 'Tỉnh Sơn La'],
                        'en'        => ['name' => 'Son La province'],
                        'gso_id'    => '14',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 10,
                        'vi'        => ['name' => 'Tỉnh Yên Bái'],
                        'en'        => ['name' => 'Yen Bai province'],
                        'gso_id'    => '15',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 11,
                        'vi'        => ['name' => 'Tỉnh Hoà Bình'],
                        'en'        => ['name' => 'Hoa Binh province'],
                        'gso_id'    => '17',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 12,
                        'vi'        => ['name' => 'Tỉnh Thái Nguyên'],
                        'en'        => ['name' => 'Thai Nguyen province'],
                        'gso_id'    => '19',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 13,
                        'vi'        => ['name' => 'Tỉnh Lạng Sơn'],
                        'en'        => ['name' => 'Lang Son province'],
                        'gso_id'    => '20',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 14,
                        'vi'        => ['name' => 'Tỉnh Quảng Ninh'],
                        'en'        => ['name' => 'Quang Ninh province'],
                        'gso_id'    => '22',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 15,
                        'vi'        => ['name' => 'Tỉnh Bắc Giang'],
                        'en'        => ['name' => 'Bac Giang province'],
                        'gso_id'    => '24',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 16,
                        'vi'        => ['name' => 'Tỉnh Phú Thọ'],
                        'en'        => ['name' => 'Phu Tho province'],
                        'gso_id'    => '25',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 17,
                        'vi'        => ['name' => 'Tỉnh Vĩnh Phúc'],
                        'en'        => ['name' => 'Vinh Phuc province'],
                        'gso_id'    => '26',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 18,
                        'vi'        => ['name' => 'Tỉnh Bắc Ninh'],
                        'en'        => ['name' => 'Bac Ninh province'],
                        'gso_id'    => '27',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 19,
                        'vi'        => ['name' => 'Tỉnh Hải Dương'],
                        'en'        => ['name' => 'Hai Duong province'],
                        'gso_id'    => '30',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 20,
                        'vi'        => ['name' => 'Thành phố Hải Phòng'],
                        'en'        => ['name' => 'Hai Phong city'],
                        'gso_id'    => '31',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 21,
                        'vi'        => ['name' => 'Tỉnh Hưng Yên'],
                        'en'        => ['name' => 'Hung Yen province'],
                        'gso_id'    => '33',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 22,
                        'vi'        => ['name' => 'Tỉnh Thái Bình'],
                        'en'        => ['name' => 'Thai Binh province'],
                        'gso_id'    => '34',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 23,
                        'vi'        => ['name' => 'Tỉnh Hà Nam'],
                        'en'        => ['name' => 'Ha Nam province'],
                        'gso_id'    => '35',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 24,
                        'vi'        => ['name' => 'Tỉnh Nam Định'],
                        'en'        => ['name' => 'Nam Dinh province'],
                        'gso_id'    => '36',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 25,
                        'vi'        => ['name' => 'Tỉnh Ninh Bình'],
                        'en'        => ['name' => 'Ninh Binh province'],
                        'gso_id'    => '37',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 26,
                        'vi'        => ['name' => 'Tỉnh Thanh Hóa'],
                        'en'        => ['name' => 'Thanh Hoa province'],
                        'gso_id'    => '38',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 27,
                        'vi'        => ['name' => 'Tỉnh Nghệ An'],
                        'en'        => ['name' => 'Nghe An province'],
                        'gso_id'    => '40',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 28,
                        'vi'        => ['name' => 'Tỉnh Hà Tĩnh'],
                        'en'        => ['name' => 'Ha Tinh province'],
                        'gso_id'    => '42',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 29,
                        'vi'        => ['name' => 'Tỉnh Quảng Bình'],
                        'en'        => ['name' => 'Quang Binh province'],
                        'gso_id'    => '44',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 30,
                        'vi'        => ['name' => 'Tỉnh Quảng Trị'],
                        'en'        => ['name' => 'Quang Tri province'],
                        'gso_id'    => '45',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 31,
                        'vi'        => ['name' => 'Tỉnh Thừa Thiên Huế'],
                        'en'        => ['name' => 'Thua Thien Hue province'],
                        'gso_id'    => '46',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 32,
                        'vi'        => ['name' => 'Thành phố Đà Nẵng'],
                        'en'        => ['name' => 'Da Nang city'],
                        'gso_id'    => '48',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 33,
                        'vi'        => ['name' => 'Tỉnh Quảng Nam'],
                        'en'        => ['name' => 'Quang Nam province'],
                        'gso_id'    => '49',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 34,
                        'vi'        => ['name' => 'Tỉnh Quảng Ngãi'],
                        'en'        => ['name' => 'Quang Ngai province'],
                        'gso_id'    => '51',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 35,
                        'vi'        => ['name' => 'Tỉnh Bình Định'],
                        'en'        => ['name' => 'Binh Dinh province'],
                        'gso_id'    => '52',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 36,
                        'vi'        => ['name' => 'Tỉnh Phú Yên'],
                        'en'        => ['name' => 'Phu Yen province'],
                        'gso_id'    => '54',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 37,
                        'vi'        => ['name' => 'Tỉnh Khánh Hòa'],
                        'en'        => ['name' => 'Khanh Hoa province'],
                        'gso_id'    => '56',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 38,
                        'vi'        => ['name' => 'Tỉnh Ninh Thuận'],
                        'en'        => ['name' => 'Ninh Thuan province'],
                        'gso_id'    => '58',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 39,
                        'vi'        => ['name' => 'Tỉnh Bình Thuận'],
                        'en'        => ['name' => 'Binh Thuan province'],
                        'gso_id'    => '60',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 40,
                        'vi'        => ['name' => 'Tỉnh Kon Tum'],
                        'en'        => ['name' => 'Kon Tum province'],
                        'gso_id'    => '62',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 41,
                        'vi'        => ['name' => 'Tỉnh Gia Lai'],
                        'en'        => ['name' => 'Gia Lai province'],
                        'gso_id'    => '64',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 42,
                        'vi'        => ['name' => 'Tỉnh Đắk Lắk'],
                        'en'        => ['name' => 'Dak Lak province'],
                        'gso_id'    => '66',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 43,
                        'vi'        => ['name' => 'Tỉnh Đắk Nông'],
                        'en'        => ['name' => 'Dak Nong province'],
                        'gso_id'    => '67',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 44,
                        'vi'        => ['name' => 'Tỉnh Lâm Đồng'],
                        'en'        => ['name' => 'Lam Dong province'],
                        'gso_id'    => '68',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 45,
                        'vi'        => ['name' => 'Tỉnh Bình Phước'],
                        'en'        => ['name' => 'Binh Phuoc province'],
                        'gso_id'    => '70',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 46,
                        'vi'        => ['name' => 'Tỉnh Tây Ninh'],
                        'en'        => ['name' => 'Tay Ninh province'],
                        'gso_id'    => '72',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 47,
                        'vi'        => ['name' => 'Tỉnh Bình Dương'],
                        'en'        => ['name' => 'Binh Duong province'],
                        'gso_id'    => '74',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 48,
                        'vi'        => ['name' => 'Tỉnh Đồng Nai'],
                        'en'        => ['name' => 'Dong Nai province'],
                        'gso_id'    => '75',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 49,
                        'vi'        => ['name' => 'Tỉnh Bà Rịa - Vũng Tàu'],
                        'en'        => ['name' => 'Ba Ria Vung Tau province'],
                        'gso_id'    => '77',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 50,
                        'vi'        => ['name' => 'Thành phố Hồ Chí Minh'],
                        'en'        => ['name' => 'Ho Chi Minh City'],
                        'gso_id'    => '79',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 51,
                        'vi'        => ['name' => 'Tỉnh Long An'],
                        'en'        => ['name' => 'Long An province'],
                        'gso_id'    => '80',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 52,
                        'vi'        => ['name' => 'Tỉnh Tiền Giang'],
                        'en'        => ['name' => 'Tien Giang province'],
                        'gso_id'    => '82',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 53,
                        'vi'        => ['name' => 'Tỉnh Bến Tre'],
                        'en'        => ['name' => 'Ben Tre province'],
                        'gso_id'    => '83',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 54,
                        'vi'        => ['name' => 'Tỉnh Trà Vinh'],
                        'en'        => ['name' => 'Tra Vinh province'],
                        'gso_id'    => '84',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 55,
                        'vi'        => ['name' => 'Tỉnh Vĩnh Long'],
                        'en'        => ['name' => 'Vinh Long province'],
                        'gso_id'    => '86',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 56,
                        'vi'        => ['name' => 'Tỉnh Đồng Tháp'],
                        'en'        => ['name' => 'Dong Thap province'],
                        'gso_id'    => '87',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 57,
                        'vi'        => ['name' => 'Tỉnh An Giang'],
                        'en'        => ['name' => 'An Giang province'],
                        'gso_id'    => '89',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 58,
                        'vi'        => ['name' => 'Tỉnh Kiên Giang'],
                        'en'        => ['name' => 'Kien Giang province'],
                        'gso_id'    => '91',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 59,
                        'vi'        => ['name' => 'Thành phố Cần Thơ'],
                        'en'        => ['name' => 'Can Tho City'],
                        'gso_id'    => '92',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 60,
                        'vi'        => ['name' => 'Tỉnh Hậu Giang'],
                        'en'        => ['name' => 'Hau Giang province'],
                        'gso_id'    => '93',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 61,
                        'vi'        => ['name' => 'Tỉnh Sóc Trăng'],
                        'en'        => ['name' => 'Soc Trang province'],
                        'gso_id'    => '94',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 62,
                        'vi'        => ['name' => 'Tỉnh Bạc Liêu'],
                        'en'        => ['name' => 'Bac Lieu province'],
                        'gso_id'    => '95',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],

                    [
                        'id'        => 63,
                        'vi'        => ['name' => 'Tỉnh Cà Mau'],
                        'en'        => ['name' => 'Ca Mau province'],
                        'gso_id'    => '96',
                        'parent_id' => 0,
                        'grade'     => config('vietnamzone.province'),
                    ],
            ];
        foreach ($vietnamZones as $province) {
            VietNamZone::create($province);
        }

        $this->enableForeignKeys();
    }
}
