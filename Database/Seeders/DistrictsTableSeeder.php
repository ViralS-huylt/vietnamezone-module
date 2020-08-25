<?php
namespace Modules\VietNamZone\Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

    \DB::table('vietnam_zones')->where('grade', config('vietnamzone.district'))->delete();
    $current = \DB::table('vietnam_zones')->get()->count();

    \DB::table('vietnam_zones')->insert(array (

        0 =>
            array (
                'id' => $current + 1, 'name' => 'Quận Ba Đình',
                'gso_id' => '001',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        1 =>
            array (
                'id' => $current + 2,
                'name' => 'Quận Hoàn Kiếm',
                'gso_id' => '002',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        2 =>
            array (
                'id' => $current + 3,
                'name' => 'Quận Tây Hồ',
                'gso_id' => '003',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        3 =>
            array (
                'id' => $current + 4,
                'name' => 'Quận Long Biên',
                'gso_id' => '004',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        4 =>
            array (
                'id' => $current + 5,
                'name' => 'Quận Cầu Giấy',
                'gso_id' => '005',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        5 =>
            array (
                'id' => $current + 6,
                'name' => 'Quận Đống Đa',
                'gso_id' => '006',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        6 =>
            array (
                'id' => $current + 7,
                'name' => 'Quận Hai Bà Trưng',
                'gso_id' => '007',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        7 =>
            array (
                'id' => $current + 8,
                'name' => 'Quận Hoàng Mai',
                'gso_id' => '008',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        8 =>
            array (
                'id' => $current + 9,
                'name' => 'Quận Thanh Xuân',
                'gso_id' => '009',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        9 =>
            array (
                'id' => $current + 10,
                'name' => 'Huyện Sóc Sơn',
                'gso_id' => '016',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        10 =>
            array (
                'id' => $current + 11,
                'name' => 'Huyện Đông Anh',
                'gso_id' => '017',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        11 =>
            array (
                'id' => $current + 12,
                'name' => 'Huyện Gia Lâm',
                'gso_id' => '018',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        12 =>
            array (
                'id' => $current + 13,
                'name' => 'Quận Nam Từ Liêm',
                'gso_id' => '019',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        13 =>
            array (
                'id' => $current + 14,
                'name' => 'Huyện Thanh Trì',
                'gso_id' => '020',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        14 =>
            array (
                'id' => $current + 15,
                'name' => 'Quận Bắc Từ Liêm',
                'gso_id' => '021',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        15 =>
            array (
                'id' => $current + 16,
                'name' => 'Huyện Mê Linh',
                'gso_id' => '250',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        16 =>
            array (
                'id' => $current + 17,
                'name' => 'Quận Hà Đông',
                'gso_id' => '268',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        17 =>
            array (
                'id' => $current + 18,
                'name' => 'Thị xã Sơn Tây',
                'gso_id' => '269',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        18 =>
            array (
                'id' => $current + 19,
                'name' => 'Huyện Ba Vì',
                'gso_id' => '271',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        19 =>
            array (
                'id' => $current + 20,
                'name' => 'Huyện Phúc Thọ',
                'gso_id' => '272',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        20 =>
            array (
                'id' => $current + 21,
                'name' => 'Huyện Đan Phượng',
                'gso_id' => '273',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        21 =>
            array (
                'id' => $current + 22,
                'name' => 'Huyện Hoài Đức',
                'gso_id' => '274',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        22 =>
            array (
                'id' => $current + 23,
                'name' => 'Huyện Quốc Oai',
                'gso_id' => '275',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        23 =>
            array (
                'id' => $current + 24,
                'name' => 'Huyện Thạch Thất',
                'gso_id' => '276',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        24 =>
            array (
                'id' => $current + 25,
                'name' => 'Huyện Chương Mỹ',
                'gso_id' => '277',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        25 =>
            array (
                'id' => $current + 26,
                'name' => 'Huyện Thanh Oai',
                'gso_id' => '278',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        26 =>
            array (
                'id' => $current + 27,
                'name' => 'Huyện Thường Tín',
                'gso_id' => '279',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        27 =>
            array (
                'id' => $current + 28,
                'name' => 'Huyện Phú Xuyên',
                'gso_id' => '280',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        28 =>
            array (
                'id' => $current + 29,
                'name' => 'Huyện Ứng Hòa',
                'gso_id' => '281',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        29 =>
            array (
                'id' => $current + 30,
                'name' => 'Huyện Mỹ Đức',
                'gso_id' => '282',
                'parent_id' => 1,
                'grade' => config('vietnamzone.district'),
            ),
        30 =>
            array (
                'id' => $current + 31,
                'name' => 'Thành phố Hà Giang',
                'gso_id' => '024',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        31 =>
            array (
                'id' => $current + 32,
                'name' => 'Huyện Đồng Văn',
                'gso_id' => '026',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        32 =>
            array (
                'id' => $current + 33,
                'name' => 'Huyện Mèo Vạc',
                'gso_id' => '027',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        33 =>
            array (
                'id' => $current + 34,
                'name' => 'Huyện Yên Minh',
                'gso_id' => '028',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        34 =>
            array (
                'id' => $current + 35,
                'name' => 'Huyện Quản Bạ',
                'gso_id' => '029',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        35 =>
            array (
                'id' => $current + 36,
                'name' => 'Huyện Vị Xuyên',
                'gso_id' => '030',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        36 =>
            array (
                'id' => $current + 37,
                'name' => 'Huyện Bắc Mê',
                'gso_id' => '031',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        37 =>
            array (
                'id' => $current + 38,
                'name' => 'Huyện Hoàng Su Phì',
                'gso_id' => '032',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        38 =>
            array (
                'id' => $current + 39,
                'name' => 'Huyện Xín Mần',
                'gso_id' => '033',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        39 =>
            array (
                'id' => $current + 40,
                'name' => 'Huyện Bắc Quang',
                'gso_id' => '034',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        40 =>
            array (
                'id' => $current + 41,
                'name' => 'Huyện Quang Bình',
                'gso_id' => '035',
                'parent_id' => 2,
                'grade' => config('vietnamzone.district'),
            ),
        41 =>
            array (
                'id' => $current + 42,
                'name' => 'Thành phố Cao Bằng',
                'gso_id' => '040',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        42 =>
            array (
                'id' => $current + 43,
                'name' => 'Huyện Bảo Lâm',
                'gso_id' => '042',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        43 =>
            array (
                'id' => $current + 44,
                'name' => 'Huyện Bảo Lạc',
                'gso_id' => '043',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        44 =>
            array (
                'id' => $current + 45,
                'name' => 'Huyện Hà Quảng',
                'gso_id' => '045',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        45 =>
            array (
                'id' => $current + 46,
                'name' => 'Huyện Trùng Khánh',
                'gso_id' => '047',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        46 =>
            array (
                'id' => $current + 47,
                'name' => 'Huyện Hạ Lang',
                'gso_id' => '048',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        47 =>
            array (
                'id' => $current + 48,
                'name' => 'Huyện Quảng Hòa',
                'gso_id' => '049',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        48 =>
            array (
                'id' => $current + 49,
                'name' => 'Huyện Hoà An',
                'gso_id' => '051',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        49 =>
            array (
                'id' => $current + 50,
                'name' => 'Huyện Nguyên Bình',
                'gso_id' => '052',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        50 =>
            array (
                'id' => $current + 51,
                'name' => 'Huyện Thạch An',
                'gso_id' => '053',
                'parent_id' => 3,
                'grade' => config('vietnamzone.district'),
            ),
        51 =>
            array (
                'id' => $current + 52,
                'name' => 'Thành Phố Bắc Kạn',
                'gso_id' => '058',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        52 =>
            array (
                'id' => $current + 53,
                'name' => 'Huyện Pác Nặm',
                'gso_id' => '060',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        53 =>
            array (
                'id' => $current + 54,
                'name' => 'Huyện Ba Bể',
                'gso_id' => '061',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        54 =>
            array (
                'id' => $current + 55,
                'name' => 'Huyện Ngân Sơn',
                'gso_id' => '062',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        55 =>
            array (
                'id' => $current + 56,
                'name' => 'Huyện Bạch Thông',
                'gso_id' => '063',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        56 =>
            array (
                'id' => $current + 57,
                'name' => 'Huyện Chợ Đồn',
                'gso_id' => '064',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        57 =>
            array (
                'id' => $current + 58,
                'name' => 'Huyện Chợ Mới',
                'gso_id' => '065',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        58 =>
            array (
                'id' => $current + 59,
                'name' => 'Huyện Na Rì',
                'gso_id' => '066',
                'parent_id' => 4,
                'grade' => config('vietnamzone.district'),
            ),
        59 =>
            array (
                'id' => $current + 60,
                'name' => 'Thành phố Tuyên Quang',
                'gso_id' => '070',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        60 =>
            array (
                'id' => $current + 61,
                'name' => 'Huyện Lâm Bình',
                'gso_id' => '071',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        61 =>
            array (
                'id' => $current + 62,
                'name' => 'Huyện Na Hang',
                'gso_id' => '072',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        62 =>
            array (
                'id' => $current + 63,
                'name' => 'Huyện Chiêm Hóa',
                'gso_id' => '073',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        63 =>
            array (
                'id' => $current + 64,
                'name' => 'Huyện Hàm Yên',
                'gso_id' => '074',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        64 =>
            array (
                'id' => $current + 65,
                'name' => 'Huyện Yên Sơn',
                'gso_id' => '075',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        65 =>
            array (
                'id' => $current + 66,
                'name' => 'Huyện Sơn Dương',
                'gso_id' => '076',
                'parent_id' => 5,
                'grade' => config('vietnamzone.district'),
            ),
        66 =>
            array (
                'id' => $current + 67,
                'name' => 'Thành phố Lào Cai',
                'gso_id' => '080',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        67 =>
            array (
                'id' => $current + 68,
                'name' => 'Huyện Bát Xát',
                'gso_id' => '082',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        68 =>
            array (
                'id' => $current + 69,
                'name' => 'Huyện Mường Khương',
                'gso_id' => '083',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        69 =>
            array (
                'id' => $current + 70,
                'name' => 'Huyện Si Ma Cai',
                'gso_id' => '084',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        70 =>
            array (
                'id' => $current + 71,
                'name' => 'Huyện Bắc Hà',
                'gso_id' => '085',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        71 =>
            array (
                'id' => $current + 72,
                'name' => 'Huyện Bảo Thắng',
                'gso_id' => '086',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        72 =>
            array (
                'id' => $current + 73,
                'name' => 'Huyện Bảo Yên',
                'gso_id' => '087',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        73 =>
            array (
                'id' => $current + 74,
                'name' => 'Thị xã Sa Pa',
                'gso_id' => '088',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        74 =>
            array (
                'id' => $current + 75,
                'name' => 'Huyện Văn Bàn',
                'gso_id' => '089',
                'parent_id' => 6,
                'grade' => config('vietnamzone.district'),
            ),
        75 =>
            array (
                'id' => $current + 76,
                'name' => 'Thành phố Điện Biên Phủ',
                'gso_id' => '094',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        76 =>
            array (
                'id' => $current + 77,
                'name' => 'Thị Xã Mường Lay',
                'gso_id' => '095',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        77 =>
            array (
                'id' => $current + 78,
                'name' => 'Huyện Mường Nhé',
                'gso_id' => '096',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        78 =>
            array (
                'id' => $current + 79,
                'name' => 'Huyện Mường Chà',
                'gso_id' => '097',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        79 =>
            array (
                'id' => $current + 80,
                'name' => 'Huyện Tủa Chùa',
                'gso_id' => '098',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        80 =>
            array (
                'id' => $current + 81,
                'name' => 'Huyện Tuần Giáo',
                'gso_id' => '099',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        81 =>
            array (
                'id' => $current + 82,
                'name' => 'Huyện Điện Biên',
                'gso_id' => '100',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        82 =>
            array (
                'id' => $current + 83,
                'name' => 'Huyện Điện Biên Đông',
                'gso_id' => '101',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        83 =>
            array (
                'id' => $current + 84,
                'name' => 'Huyện Mường Ảng',
                'gso_id' => '102',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        84 =>
            array (
                'id' => $current + 85,
                'name' => 'Huyện Nậm Pồ',
                'gso_id' => '103',
                'parent_id' => 7,
                'grade' => config('vietnamzone.district'),
            ),
        85 =>
            array (
                'id' => $current + 86,
                'name' => 'Thành phố Lai Châu',
                'gso_id' => '105',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        86 =>
            array (
                'id' => $current + 87,
                'name' => 'Huyện Tam Đường',
                'gso_id' => '106',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        87 =>
            array (
                'id' => $current + 88,
                'name' => 'Huyện Mường Tè',
                'gso_id' => '107',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        88 =>
            array (
                'id' => $current + 89,
                'name' => 'Huyện Sìn Hồ',
                'gso_id' => '108',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        89 =>
            array (
                'id' => $current + 90,
                'name' => 'Huyện Phong Thổ',
                'gso_id' => '109',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        90 =>
            array (
                'id' => $current + 91,
                'name' => 'Huyện Than Uyên',
                'gso_id' => '110',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        91 =>
            array (
                'id' => $current + 92,
                'name' => 'Huyện Tân Uyên',
                'gso_id' => '111',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        92 =>
            array (
                'id' => $current + 93,
                'name' => 'Huyện Nậm Nhùn',
                'gso_id' => '112',
                'parent_id' => 8,
                'grade' => config('vietnamzone.district'),
            ),
        93 =>
            array (
                'id' => $current + 94,
                'name' => 'Thành phố Sơn La',
                'gso_id' => '116',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        94 =>
            array (
                'id' => $current + 95,
                'name' => 'Huyện Quỳnh Nhai',
                'gso_id' => '118',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        95 =>
            array (
                'id' => $current + 96,
                'name' => 'Huyện Thuận Châu',
                'gso_id' => '119',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        96 =>
            array (
                'id' => $current + 97,
                'name' => 'Huyện Mường La',
                'gso_id' => '120',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        97 =>
            array (
                'id' => $current + 98,
                'name' => 'Huyện Bắc Yên',
                'gso_id' => '121',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        98 =>
            array (
                'id' => $current + 99,
                'name' => 'Huyện Phù Yên',
                'gso_id' => '122',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        99 =>
            array (
                'id' => $current + 100,
                'name' => 'Huyện Mộc Châu',
                'gso_id' => '123',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        100 =>
            array (
                'id' => $current + 101,
                'name' => 'Huyện Yên Châu',
                'gso_id' => '124',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        101 =>
            array (
                'id' => $current + 102,
                'name' => 'Huyện Mai Sơn',
                'gso_id' => '125',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        102 =>
            array (
                'id' => $current + 103,
                'name' => 'Huyện Sông Mã',
                'gso_id' => '126',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        103 =>
            array (
                'id' => $current + 104,
                'name' => 'Huyện Sốp Cộp',
                'gso_id' => '127',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        104 =>
            array (
                'id' => $current + 105,
                'name' => 'Huyện Vân Hồ',
                'gso_id' => '128',
                'parent_id' => 9,
                'grade' => config('vietnamzone.district'),
            ),
        105 =>
            array (
                'id' => $current + 106,
                'name' => 'Thành phố Yên Bái',
                'gso_id' => '132',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        106 =>
            array (
                'id' => $current + 107,
                'name' => 'Thị xã Nghĩa Lộ',
                'gso_id' => '133',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        107 =>
            array (
                'id' => $current + 108,
                'name' => 'Huyện Lục Yên',
                'gso_id' => '135',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        108 =>
            array (
                'id' => $current + 109,
                'name' => 'Huyện Văn Yên',
                'gso_id' => '136',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        109 =>
            array (
                'id' => $current + 110,
                'name' => 'Huyện Mù Căng Chải',
                'gso_id' => '137',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        110 =>
            array (
                'id' => $current + 111,
                'name' => 'Huyện Trấn Yên',
                'gso_id' => '138',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        111 =>
            array (
                'id' => $current + 112,
                'name' => 'Huyện Trạm Tấu',
                'gso_id' => '139',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        112 =>
            array (
                'id' => $current + 113,
                'name' => 'Huyện Văn Chấn',
                'gso_id' => '140',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        113 =>
            array (
                'id' => $current + 114,
                'name' => 'Huyện Yên Bình',
                'gso_id' => '141',
                'parent_id' => 10,
                'grade' => config('vietnamzone.district'),
            ),
        114 =>
            array (
                'id' => $current + 115,
                'name' => 'Thành phố Hòa Bình',
                'gso_id' => '148',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        115 =>
            array (
                'id' => $current + 116,
                'name' => 'Huyện Đà Bắc',
                'gso_id' => '150',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        116 =>
            array (
                'id' => $current + 117,
                'name' => 'Huyện Lương Sơn',
                'gso_id' => '152',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        117 =>
            array (
                'id' => $current + 118,
                'name' => 'Huyện Kim Bôi',
                'gso_id' => '153',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        118 =>
            array (
                'id' => $current + 119,
                'name' => 'Huyện Cao Phong',
                'gso_id' => '154',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        119 =>
            array (
                'id' => $current + 120,
                'name' => 'Huyện Tân Lạc',
                'gso_id' => '155',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        120 =>
            array (
                'id' => $current + 121,
                'name' => 'Huyện Mai Châu',
                'gso_id' => '156',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        121 =>
            array (
                'id' => $current + 122,
                'name' => 'Huyện Lạc Sơn',
                'gso_id' => '157',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        122 =>
            array (
                'id' => $current + 123,
                'name' => 'Huyện Yên Thủy',
                'gso_id' => '158',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        123 =>
            array (
                'id' => $current + 124,
                'name' => 'Huyện Lạc Thủy',
                'gso_id' => '159',
                'parent_id' => 11,
                'grade' => config('vietnamzone.district'),
            ),
        124 =>
            array (
                'id' => $current + 125,
                'name' => 'Thành phố Thái Nguyên',
                'gso_id' => '164',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        125 =>
            array (
                'id' => $current + 126,
                'name' => 'Thành phố Sông Công',
                'gso_id' => '165',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        126 =>
            array (
                'id' => $current + 127,
                'name' => 'Huyện Định Hóa',
                'gso_id' => '167',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        127 =>
            array (
                'id' => $current + 128,
                'name' => 'Huyện Phú Lương',
                'gso_id' => '168',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        128 =>
            array (
                'id' => $current + 129,
                'name' => 'Huyện Đồng Hỷ',
                'gso_id' => '169',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        129 =>
            array (
                'id' => $current + 130,
                'name' => 'Huyện Võ Nhai',
                'gso_id' => '170',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        130 =>
            array (
                'id' => $current + 131,
                'name' => 'Huyện Đại Từ',
                'gso_id' => '171',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        131 =>
            array (
                'id' => $current + 132,
                'name' => 'Thị xã Phổ Yên',
                'gso_id' => '172',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        132 =>
            array (
                'id' => $current + 133,
                'name' => 'Huyện Phú Bình',
                'gso_id' => '173',
                'parent_id' => 12,
                'grade' => config('vietnamzone.district'),
            ),
        133 =>
            array (
                'id' => $current + 134,
                'name' => 'Thành phố Lạng Sơn',
                'gso_id' => '178',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        134 =>
            array (
                'id' => $current + 135,
                'name' => 'Huyện Tràng Định',
                'gso_id' => '180',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        135 =>
            array (
                'id' => $current + 136,
                'name' => 'Huyện Bình Gia',
                'gso_id' => '181',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        136 =>
            array (
                'id' => $current + 137,
                'name' => 'Huyện Văn Lãng',
                'gso_id' => '182',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        137 =>
            array (
                'id' => $current + 138,
                'name' => 'Huyện Cao Lộc',
                'gso_id' => '183',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        138 =>
            array (
                'id' => $current + 139,
                'name' => 'Huyện Văn Quan',
                'gso_id' => '184',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        139 =>
            array (
                'id' => $current + 140,
                'name' => 'Huyện Bắc Sơn',
                'gso_id' => '185',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        140 =>
            array (
                'id' => $current + 141,
                'name' => 'Huyện Hữu Lũng',
                'gso_id' => '186',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        141 =>
            array (
                'id' => $current + 142,
                'name' => 'Huyện Chi Lăng',
                'gso_id' => '187',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        142 =>
            array (
                'id' => $current + 143,
                'name' => 'Huyện Lộc Bình',
                'gso_id' => '188',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        143 =>
            array (
                'id' => $current + 144,
                'name' => 'Huyện Đình Lập',
                'gso_id' => '189',
                'parent_id' => 13,
                'grade' => config('vietnamzone.district'),
            ),
        144 =>
            array (
                'id' => $current + 145,
                'name' => 'Thành phố Hạ Long',
                'gso_id' => '193',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        145 =>
            array (
                'id' => $current + 146,
                'name' => 'Thành phố Móng Cái',
                'gso_id' => '194',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        146 =>
            array (
                'id' => $current + 147,
                'name' => 'Thành phố Cẩm Phả',
                'gso_id' => '195',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        147 =>
            array (
                'id' => $current + 148,
                'name' => 'Thành phố Uông Bí',
                'gso_id' => '196',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        148 =>
            array (
                'id' => $current + 149,
                'name' => 'Huyện Bình Liêu',
                'gso_id' => '198',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        149 =>
            array (
                'id' => $current + 150,
                'name' => 'Huyện Tiên Yên',
                'gso_id' => '199',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        150 =>
            array (
                'id' => $current + 151,
                'name' => 'Huyện Đầm Hà',
                'gso_id' => '200',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        151 =>
            array (
                'id' => $current + 152,
                'name' => 'Huyện Hải Hà',
                'gso_id' => '201',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        152 =>
            array (
                'id' => $current + 153,
                'name' => 'Huyện Ba Chẽ',
                'gso_id' => '202',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        153 =>
            array (
                'id' => $current + 154,
                'name' => 'Huyện Vân Đồn',
                'gso_id' => '203',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        154 =>
            array (
                'id' => $current + 155,
                'name' => 'Thị xã Đông Triều',
                'gso_id' => '205',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        155 =>
            array (
                'id' => $current + 156,
                'name' => 'Thị xã Quảng Yên',
                'gso_id' => '206',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        156 =>
            array (
                'id' => $current + 157,
                'name' => 'Huyện Cô Tô',
                'gso_id' => '207',
                'parent_id' => 14,
                'grade' => config('vietnamzone.district'),
            ),
        157 =>
            array (
                'id' => $current + 158,
                'name' => 'Thành phố Bắc Giang',
                'gso_id' => '213',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        158 =>
            array (
                'id' => $current + 159,
                'name' => 'Huyện Yên Thế',
                'gso_id' => '215',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        159 =>
            array (
                'id' => $current + 160,
                'name' => 'Huyện Tân Yên',
                'gso_id' => '216',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        160 =>
            array (
                'id' => $current + 161,
                'name' => 'Huyện Lạng Giang',
                'gso_id' => '217',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        161 =>
            array (
                'id' => $current + 162,
                'name' => 'Huyện Lục Nam',
                'gso_id' => '218',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        162 =>
            array (
                'id' => $current + 163,
                'name' => 'Huyện Lục Ngạn',
                'gso_id' => '219',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        163 =>
            array (
                'id' => $current + 164,
                'name' => 'Huyện Sơn Động',
                'gso_id' => '220',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        164 =>
            array (
                'id' => $current + 165,
                'name' => 'Huyện Yên Dũng',
                'gso_id' => '221',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        165 =>
            array (
                'id' => $current + 166,
                'name' => 'Huyện Việt Yên',
                'gso_id' => '222',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        166 =>
            array (
                'id' => $current + 167,
                'name' => 'Huyện Hiệp Hòa',
                'gso_id' => '223',
                'parent_id' => 15,
                'grade' => config('vietnamzone.district'),
            ),
        167 =>
            array (
                'id' => $current + 168,
                'name' => 'Thành phố Việt Trì',
                'gso_id' => '227',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        168 =>
            array (
                'id' => $current + 169,
                'name' => 'Thị xã Phú Thọ',
                'gso_id' => '228',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        169 =>
            array (
                'id' => $current + 170,
                'name' => 'Huyện Đoan Hùng',
                'gso_id' => '230',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        170 =>
            array (
                'id' => $current + 171,
                'name' => 'Huyện Hạ Hoà',
                'gso_id' => '231',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        171 =>
            array (
                'id' => $current + 172,
                'name' => 'Huyện Thanh Ba',
                'gso_id' => '232',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        172 =>
            array (
                'id' => $current + 173,
                'name' => 'Huyện Phù Ninh',
                'gso_id' => '233',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        173 =>
            array (
                'id' => $current + 174,
                'name' => 'Huyện Yên Lập',
                'gso_id' => '234',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        174 =>
            array (
                'id' => $current + 175,
                'name' => 'Huyện Cẩm Khê',
                'gso_id' => '235',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        175 =>
            array (
                'id' => $current + 176,
                'name' => 'Huyện Tam Nông',
                'gso_id' => '236',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        176 =>
            array (
                'id' => $current + 177,
                'name' => 'Huyện Lâm Thao',
                'gso_id' => '237',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        177 =>
            array (
                'id' => $current + 178,
                'name' => 'Huyện Thanh Sơn',
                'gso_id' => '238',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        178 =>
            array (
                'id' => $current + 179,
                'name' => 'Huyện Thanh Thuỷ',
                'gso_id' => '239',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        179 =>
            array (
                'id' => $current + 180,
                'name' => 'Huyện Tân Sơn',
                'gso_id' => '240',
                'parent_id' => 16,
                'grade' => config('vietnamzone.district'),
            ),
        180 =>
            array (
                'id' => $current + 181,
                'name' => 'Thành phố Vĩnh Yên',
                'gso_id' => '243',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        181 =>
            array (
                'id' => $current + 182,
                'name' => 'Thành phố Phúc Yên',
                'gso_id' => '244',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        182 =>
            array (
                'id' => $current + 183,
                'name' => 'Huyện Lập Thạch',
                'gso_id' => '246',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        183 =>
            array (
                'id' => $current + 184,
                'name' => 'Huyện Tam Dương',
                'gso_id' => '247',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        184 =>
            array (
                'id' => $current + 185,
                'name' => 'Huyện Tam Đảo',
                'gso_id' => '248',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        185 =>
            array (
                'id' => $current + 186,
                'name' => 'Huyện Bình Xuyên',
                'gso_id' => '249',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        186 =>
            array (
                'id' => $current + 187,
                'name' => 'Huyện Yên Lạc',
                'gso_id' => '251',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        187 =>
            array (
                'id' => $current + 188,
                'name' => 'Huyện Vĩnh Tường',
                'gso_id' => '252',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        188 =>
            array (
                'id' => $current + 189,
                'name' => 'Huyện Sông Lô',
                'gso_id' => '253',
                'parent_id' => 17,
                'grade' => config('vietnamzone.district'),
            ),
        189 =>
            array (
                'id' => $current + 190,
                'name' => 'Thành phố Bắc Ninh',
                'gso_id' => '256',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        190 =>
            array (
                'id' => $current + 191,
                'name' => 'Huyện Yên Phong',
                'gso_id' => '258',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        191 =>
            array (
                'id' => $current + 192,
                'name' => 'Huyện Quế Võ',
                'gso_id' => '259',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        192 =>
            array (
                'id' => $current + 193,
                'name' => 'Huyện Tiên Du',
                'gso_id' => '260',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        193 =>
            array (
                'id' => $current + 194,
                'name' => 'Thị xã Từ Sơn',
                'gso_id' => '261',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        194 =>
            array (
                'id' => $current + 195,
                'name' => 'Huyện Thuận Thành',
                'gso_id' => '262',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        195 =>
            array (
                'id' => $current + 196,
                'name' => 'Huyện Gia Bình',
                'gso_id' => '263',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        196 =>
            array (
                'id' => $current + 197,
                'name' => 'Huyện Lương Tài',
                'gso_id' => '264',
                'parent_id' => 18,
                'grade' => config('vietnamzone.district'),
            ),
        197 =>
            array (
                'id' => $current + 198,
                'name' => 'Thành phố Hải Dương',
                'gso_id' => '288',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        198 =>
            array (
                'id' => $current + 199,
                'name' => 'Thành phố Chí Linh',
                'gso_id' => '290',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        199 =>
            array (
                'id' => $current + 200,
                'name' => 'Huyện Nam Sách',
                'gso_id' => '291',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        200 =>
            array (
                'id' => $current + 201,
                'name' => 'Thị xã Kinh Môn',
                'gso_id' => '292',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        201 =>
            array (
                'id' => $current + 202,
                'name' => 'Huyện Kim Thành',
                'gso_id' => '293',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        202 =>
            array (
                'id' => $current + 203,
                'name' => 'Huyện Thanh Hà',
                'gso_id' => '294',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        203 =>
            array (
                'id' => $current + 204,
                'name' => 'Huyện Cẩm Giàng',
                'gso_id' => '295',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        204 =>
            array (
                'id' => $current + 205,
                'name' => 'Huyện Bình Giang',
                'gso_id' => '296',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
        205 =>
            array (
                'id' => $current + 206,
                'name' => 'Huyện Gia Lộc',
                'gso_id' => '297',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
            206 =>
            array (
                'id' => $current + 207,
                'name' => 'Huyện Tứ Kỳ',
                'gso_id' => '298',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
            207 =>
            array (
                'id' => $current + 208,
                'name' => 'Huyện Ninh Giang',
                'gso_id' => '299',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
            208 =>
            array (
                'id' => $current + 209,
                'name' => 'Huyện Thanh Miện',
                'gso_id' => '300',
                'parent_id' => 19,
                'grade' => config('vietnamzone.district'),
            ),
            209 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 210,
                'name' => 'Quận Hồng Bàng',
                'gso_id' => '303',
                'parent_id' => 20,
            ),
            210 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 211,
                'name' => 'Quận Ngô Quyền',
                'gso_id' => '304',
                'parent_id' => 20,
            ),
            211 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 212,
                'name' => 'Quận Lê Chân',
                'gso_id' => '305',
                'parent_id' => 20,
            ),
            212 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 213,
                'name' => 'Quận Hải An',
                'gso_id' => '306',
                'parent_id' => 20,
            ),
            213 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 214,
                'name' => 'Quận Kiến An',
                'gso_id' => '307',
                'parent_id' => 20,
            ),
            214 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 215,
                'name' => 'Quận Đồ Sơn',
                'gso_id' => '308',
                'parent_id' => 20,
            ),
            215 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 216,
                'name' => 'Quận Dương Kinh',
                'gso_id' => '309',
                'parent_id' => 20,
            ),
            216 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 217,
                'name' => 'Huyện Thuỷ Nguyên',
                'gso_id' => '311',
                'parent_id' => 20,
            ),
            217 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 218,
                'name' => 'Huyện An Dương',
                'gso_id' => '312',
                'parent_id' => 20,
            ),
            218 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 219,
                'name' => 'Huyện An Lão',
                'gso_id' => '313',
                'parent_id' => 20,
            ),
            219 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 220,
                'name' => 'Huyện Kiến Thuỵ',
                'gso_id' => '314',
                'parent_id' => 20,
            ),
            220 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 221,
                'name' => 'Huyện Tiên Lãng',
                'gso_id' => '315',
                'parent_id' => 20,
            ),
            221 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 222,
                'name' => 'Huyện Vĩnh Bảo',
                'gso_id' => '316',
                'parent_id' => 20,
            ),
            222 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 223,
                'name' => 'Huyện Cát Hải',
                'gso_id' => '317',
                'parent_id' => 20,
            ),
            223 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 224,
                'name' => 'Thành phố Hưng Yên',
                'gso_id' => '323',
                'parent_id' => 21,
            ),
            224 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 225,
                'name' => 'Huyện Văn Lâm',
                'gso_id' => '325',
                'parent_id' => 21,
            ),
            225 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 226,
                'name' => 'Huyện Văn Giang',
                'gso_id' => '326',
                'parent_id' => 21,
            ),
            226 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 227,
                'name' => 'Huyện Yên Mỹ',
                'gso_id' => '327',
                'parent_id' => 21,
            ),
            227 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 228,
                'name' => 'Thị xã Mỹ Hào',
                'gso_id' => '328',
                'parent_id' => 21,
            ),
            228 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 229,
                'name' => 'Huyện Ân Thi',
                'gso_id' => '329',
                'parent_id' => 21,
            ),
            229 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 230,
                'name' => 'Huyện Khoái Châu',
                'gso_id' => '330',
                'parent_id' => 21,
            ),
            230 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 231,
                'name' => 'Huyện Kim Động',
                'gso_id' => '331',
                'parent_id' => 21,
            ),
            231 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 232,
                'name' => 'Huyện Tiên Lữ',
                'gso_id' => '332',
                'parent_id' => 21,
            ),
            232 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 233,
                'name' => 'Huyện Phù Cừ',
                'gso_id' => '333',
                'parent_id' => 21,
            ),
            233 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 234,
                'name' => 'Thành phố Thái Bình',
                'gso_id' => '336',
                'parent_id' => 22,
            ),
            234 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 235,
                'name' => 'Huyện Quỳnh Phụ',
                'gso_id' => '338',
                'parent_id' => 22,
            ),
            235 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 236,
                'name' => 'Huyện Hưng Hà',
                'gso_id' => '339',
                'parent_id' => 22,
            ),
            236 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 237,
                'name' => 'Huyện Đông Hưng',
                'gso_id' => '340',
                'parent_id' => 22,
            ),
            237 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 238,
                'name' => 'Huyện Thái Thụy',
                'gso_id' => '341',
                'parent_id' => 22,
            ),
            238 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 239,
                'name' => 'Huyện Tiền Hải',
                'gso_id' => '342',
                'parent_id' => 22,
            ),
            239 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 240,
                'name' => 'Huyện Kiến Xương',
                'gso_id' => '343',
                'parent_id' => 22,
            ),
            240 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 241,
                'name' => 'Huyện Vũ Thư',
                'gso_id' => '344',
                'parent_id' => 22,
            ),
            241 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 242,
                'name' => 'Thành phố Phủ Lý',
                'gso_id' => '347',
                'parent_id' => 23,
            ),
            242 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 243,
                'name' => 'Thị xã Duy Tiên',
                'gso_id' => '349',
                'parent_id' => 23,
            ),
            243 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 244,
                'name' => 'Huyện Kim Bảng',
                'gso_id' => '350',
                'parent_id' => 23,
            ),
            244 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 245,
                'name' => 'Huyện Thanh Liêm',
                'gso_id' => '351',
                'parent_id' => 23,
            ),
            245 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 246,
                'name' => 'Huyện Bình Lục',
                'gso_id' => '352',
                'parent_id' => 23,
            ),
            246 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 247,
                'name' => 'Huyện Lý Nhân',
                'gso_id' => '353',
                'parent_id' => 23,
            ),
            247 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 248,
                'name' => 'Thành phố Nam Định',
                'gso_id' => '356',
                'parent_id' => 24,
            ),
            248 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 249,
                'name' => 'Huyện Mỹ Lộc',
                'gso_id' => '358',
                'parent_id' => 24,
            ),
            249 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 250,
                'name' => 'Huyện Vụ Bản',
                'gso_id' => '359',
                'parent_id' => 24,
            ),
            250 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 251,
                'name' => 'Huyện Ý Yên',
                'gso_id' => '360',
                'parent_id' => 24,
            ),
            251 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 252,
                'name' => 'Huyện Nghĩa Hưng',
                'gso_id' => '361',
                'parent_id' => 24,
            ),
            252 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 253,
                'name' => 'Huyện Nam Trực',
                'gso_id' => '362',
                'parent_id' => 24,
            ),
            253 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 254,
                'name' => 'Huyện Trực Ninh',
                'gso_id' => '363',
                'parent_id' => 24,
            ),
            254 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 255,
                'name' => 'Huyện Xuân Trường',
                'gso_id' => '364',
                'parent_id' => 24,
            ),
            255 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 256,
                'name' => 'Huyện Giao Thủy',
                'gso_id' => '365',
                'parent_id' => 24,
            ),
            256 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 257,
                'name' => 'Huyện Hải Hậu',
                'gso_id' => '366',
                'parent_id' => 24,
            ),
            257 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 258,
                'name' => 'Thành phố Ninh Bình',
                'gso_id' => '369',
                'parent_id' => 25,
            ),
            258 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 259,
                'name' => 'Thành phố Tam Điệp',
                'gso_id' => '370',
                'parent_id' => 25,
            ),
            259 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 260,
                'name' => 'Huyện Nho Quan',
                'gso_id' => '372',
                'parent_id' => 25,
            ),
            260 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 261,
                'name' => 'Huyện Gia Viễn',
                'gso_id' => '373',
                'parent_id' => 25,
            ),
            261 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 262,
                'name' => 'Huyện Hoa Lư',
                'gso_id' => '374',
                'parent_id' => 25,
            ),
            262 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 263,
                'name' => 'Huyện Yên Khánh',
                'gso_id' => '375',
                'parent_id' => 25,
            ),
            263 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 264,
                'name' => 'Huyện Kim Sơn',
                'gso_id' => '376',
                'parent_id' => 25,
            ),
            264 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 265,
                'name' => 'Huyện Yên Mô',
                'gso_id' => '377',
                'parent_id' => 25,
            ),
            265 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 266,
                'name' => 'Thành phố Thanh Hóa',
                'gso_id' => '380',
                'parent_id' => 26,
            ),
            266 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 267,
                'name' => 'Thị xã Bỉm Sơn',
                'gso_id' => '381',
                'parent_id' => 26,
            ),
            267 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 268,
                'name' => 'Thành phố Sầm Sơn',
                'gso_id' => '382',
                'parent_id' => 26,
            ),
            268 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 269,
                'name' => 'Huyện Mường Lát',
                'gso_id' => '384',
                'parent_id' => 26,
            ),
            269 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 270,
                'name' => 'Huyện Quan Hóa',
                'gso_id' => '385',
                'parent_id' => 26,
            ),
            270 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 271,
                'name' => 'Huyện Bá Thước',
                'gso_id' => '386',
                'parent_id' => 26,
            ),
            271 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 272,
                'name' => 'Huyện Quan Sơn',
                'gso_id' => '387',
                'parent_id' => 26,
            ),
            272 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 273,
                'name' => 'Huyện Lang Chánh',
                'gso_id' => '388',
                'parent_id' => 26,
            ),
            273 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 274,
                'name' => 'Huyện Ngọc Lặc',
                'gso_id' => '389',
                'parent_id' => 26,
            ),
            274 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 275,
                'name' => 'Huyện Cẩm Thủy',
                'gso_id' => '390',
                'parent_id' => 26,
            ),
            275 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 276,
                'name' => 'Huyện Thạch Thành',
                'gso_id' => '391',
                'parent_id' => 26,
            ),
            276 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 277,
                'name' => 'Huyện Hà Trung',
                'gso_id' => '392',
                'parent_id' => 26,
            ),
            277 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 278,
                'name' => 'Huyện Vĩnh Lộc',
                'gso_id' => '393',
                'parent_id' => 26,
            ),
            278 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 279,
                'name' => 'Huyện Yên Định',
                'gso_id' => '394',
                'parent_id' => 26,
            ),
            279 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 280,
                'name' => 'Huyện Thọ Xuân',
                'gso_id' => '395',
                'parent_id' => 26,
            ),
            280 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 281,
                'name' => 'Huyện Thường Xuân',
                'gso_id' => '396',
                'parent_id' => 26,
            ),
            281 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 282,
                'name' => 'Huyện Triệu Sơn',
                'gso_id' => '397',
                'parent_id' => 26,
            ),
            282 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 283,
                'name' => 'Huyện Thiệu Hóa',
                'gso_id' => '398',
                'parent_id' => 26,
            ),
            283 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 284,
                'name' => 'Huyện Hoằng Hóa',
                'gso_id' => '399',
                'parent_id' => 26,
            ),
            284 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 285,
                'name' => 'Huyện Hậu Lộc',
                'gso_id' => '400',
                'parent_id' => 26,
            ),
            285 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 286,
                'name' => 'Huyện Nga Sơn',
                'gso_id' => '401',
                'parent_id' => 26,
            ),
            286 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 287,
                'name' => 'Huyện Như Xuân',
                'gso_id' => '402',
                'parent_id' => 26,
            ),
            287 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 288,
                'name' => 'Huyện Như Thanh',
                'gso_id' => '403',
                'parent_id' => 26,
            ),
            288 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 289,
                'name' => 'Huyện Nông Cống',
                'gso_id' => '404',
                'parent_id' => 26,
            ),
            289 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 290,
                'name' => 'Huyện Đông Sơn',
                'gso_id' => '405',
                'parent_id' => 26,
            ),
            290 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 291,
                'name' => 'Huyện Quảng Xương',
                'gso_id' => '406',
                'parent_id' => 26,
            ),
            291 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 292,
                'name' => 'Thị xã Nghi Sơn',
                'gso_id' => '407',
                'parent_id' => 26,
            ),
            292 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 293,
                'name' => 'Thành phố Vinh',
                'gso_id' => '412',
                'parent_id' => 27,
            ),
            293 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 294,
                'name' => 'Thị xã Cửa Lò',
                'gso_id' => '413',
                'parent_id' => 27,
            ),
            294 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 295,
                'name' => 'Thị xã Thái Hoà',
                'gso_id' => '414',
                'parent_id' => 27,
            ),
            295 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 296,
                'name' => 'Huyện Quế Phong',
                'gso_id' => '415',
                'parent_id' => 27,
            ),
            296 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 297,
                'name' => 'Huyện Quỳ Châu',
                'gso_id' => '416',
                'parent_id' => 27,
            ),
            297 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 298,
                'name' => 'Huyện Kỳ Sơn',
                'gso_id' => '417',
                'parent_id' => 27,
            ),
            298 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 299,
                'name' => 'Huyện Tương Dương',
                'gso_id' => '418',
                'parent_id' => 27,
            ),
            299 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 300,
                'name' => 'Huyện Nghĩa Đàn',
                'gso_id' => '419',
                'parent_id' => 27,
            ),
            300 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 301,
                'name' => 'Huyện Quỳ Hợp',
                'gso_id' => '420',
                'parent_id' => 27,
            ),
            301 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 302,
                'name' => 'Huyện Quỳnh Lưu',
                'gso_id' => '421',
                'parent_id' => 27,
            ),
            302 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 303,
                'name' => 'Huyện Con Cuông',
                'gso_id' => '422',
                'parent_id' => 27,
            ),
            303 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 304,
                'name' => 'Huyện Tân Kỳ',
                'gso_id' => '423',
                'parent_id' => 27,
            ),
            304 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 305,
                'name' => 'Huyện Anh Sơn',
                'gso_id' => '424',
                'parent_id' => 27,
            ),
            305 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 306,
                'name' => 'Huyện Diễn Châu',
                'gso_id' => '425',
                'parent_id' => 27,
            ),
            306 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 307,
                'name' => 'Huyện Yên Thành',
                'gso_id' => '426',
                'parent_id' => 27,
            ),
            307 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 308,
                'name' => 'Huyện Đô Lương',
                'gso_id' => '427',
                'parent_id' => 27,
            ),
            308 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 309,
                'name' => 'Huyện Thanh Chương',
                'gso_id' => '428',
                'parent_id' => 27,
            ),
            309 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 310,
                'name' => 'Huyện Nghi Lộc',
                'gso_id' => '429',
                'parent_id' => 27,
            ),
            310 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 311,
                'name' => 'Huyện Nam Đàn',
                'gso_id' => '430',
                'parent_id' => 27,
            ),
            311 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 312,
                'name' => 'Huyện Hưng Nguyên',
                'gso_id' => '431',
                'parent_id' => 27,
            ),
            312 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 313,
                'name' => 'Thị xã Hoàng Mai',
                'gso_id' => '432',
                'parent_id' => 27,
            ),
            313 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 314,
                'name' => 'Thành phố Hà Tĩnh',
                'gso_id' => '436',
                'parent_id' => 28,
            ),
            314 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 315,
                'name' => 'Thị xã Hồng Lĩnh',
                'gso_id' => '437',
                'parent_id' => 28,
            ),
            315 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 316,
                'name' => 'Huyện Hương Sơn',
                'gso_id' => '439',
                'parent_id' => 28,
            ),
            316 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 317,
                'name' => 'Huyện Đức Thọ',
                'gso_id' => '440',
                'parent_id' => 28,
            ),
            317 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 318,
                'name' => 'Huyện Vũ Quang',
                'gso_id' => '441',
                'parent_id' => 28,
            ),
            318 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 319,
                'name' => 'Huyện Nghi Xuân',
                'gso_id' => '442',
                'parent_id' => 28,
            ),
            319 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 320,
                'name' => 'Huyện Can Lộc',
                'gso_id' => '443',
                'parent_id' => 28,
            ),
            320 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 321,
                'name' => 'Huyện Hương Khê',
                'gso_id' => '444',
                'parent_id' => 28,
            ),
            321 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 322,
                'name' => 'Huyện Thạch Hà',
                'gso_id' => '445',
                'parent_id' => 28,
            ),
            322 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 323,
                'name' => 'Huyện Cẩm Xuyên',
                'gso_id' => '446',
                'parent_id' => 28,
            ),
            323 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 324,
                'name' => 'Huyện Kỳ Anh',
                'gso_id' => '447',
                'parent_id' => 28,
            ),
            324 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 325,
                'name' => 'Huyện Lộc Hà',
                'gso_id' => '448',
                'parent_id' => 28,
            ),
            325 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 326,
                'name' => 'Thị xã Kỳ Anh',
                'gso_id' => '449',
                'parent_id' => 28,
            ),
            326 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 327,
                'name' => 'Thành Phố Đồng Hới',
                'gso_id' => '450',
                'parent_id' => 29,
            ),
            327 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 328,
                'name' => 'Huyện Minh Hóa',
                'gso_id' => '452',
                'parent_id' => 29,
            ),
            328 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 329,
                'name' => 'Huyện Tuyên Hóa',
                'gso_id' => '453',
                'parent_id' => 29,
            ),
            329 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 330,
                'name' => 'Huyện Quảng Trạch',
                'gso_id' => '454',
                'parent_id' => 29,
            ),
            330 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 331,
                'name' => 'Huyện Bố Trạch',
                'gso_id' => '455',
                'parent_id' => 29,
            ),
            331 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 332,
                'name' => 'Huyện Quảng Ninh',
                'gso_id' => '456',
                'parent_id' => 29,
            ),
            332 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 333,
                'name' => 'Huyện Lệ Thủy',
                'gso_id' => '457',
                'parent_id' => 29,
            ),
            333 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 334,
                'name' => 'Thị xã Ba Đồn',
                'gso_id' => '458',
                'parent_id' => 29,
            ),
            334 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 335,
                'name' => 'Thành phố Đông Hà',
                'gso_id' => '461',
                'parent_id' => 30,
            ),
            335 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 336,
                'name' => 'Thị xã Quảng Trị',
                'gso_id' => '462',
                'parent_id' => 30,
            ),
            336 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 337,
                'name' => 'Huyện Vĩnh Linh',
                'gso_id' => '464',
                'parent_id' => 30,
            ),
            337 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 338,
                'name' => 'Huyện Hướng Hóa',
                'gso_id' => '465',
                'parent_id' => 30,
            ),
            338 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 339,
                'name' => 'Huyện Gio Linh',
                'gso_id' => '466',
                'parent_id' => 30,
            ),
            339 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 340,
                'name' => 'Huyện Đa Krông',
                'gso_id' => '467',
                'parent_id' => 30,
            ),
            340 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 341,
                'name' => 'Huyện Cam Lộ',
                'gso_id' => '468',
                'parent_id' => 30,
            ),
            341 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 342,
                'name' => 'Huyện Triệu Phong',
                'gso_id' => '469',
                'parent_id' => 30,
            ),
            342 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 343,
                'name' => 'Huyện Hải Lăng',
                'gso_id' => '470',
                'parent_id' => 30,
            ),
            343 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 344,
                'name' => 'Thành phố Huế',
                'gso_id' => '474',
                'parent_id' => 31,
            ),
            344 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 345,
                'name' => 'Huyện Phong Điền',
                'gso_id' => '476',
                'parent_id' => 31,
            ),
            345 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 346,
                'name' => 'Huyện Quảng Điền',
                'gso_id' => '477',
                'parent_id' => 31,
            ),
            346 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 347,
                'name' => 'Huyện Phú Vang',
                'gso_id' => '478',
                'parent_id' => 31,
            ),
            347 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 348,
                'name' => 'Thị xã Hương Thủy',
                'gso_id' => '479',
                'parent_id' => 31,
            ),
            348 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 349,
                'name' => 'Thị xã Hương Trà',
                'gso_id' => '480',
                'parent_id' => 31,
            ),
            349 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 350,
                'name' => 'Huyện A Lưới',
                'gso_id' => '481',
                'parent_id' => 31,
            ),
            350 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 351,
                'name' => 'Huyện Phú Lộc',
                'gso_id' => '482',
                'parent_id' => 31,
            ),
            351 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 352,
                'name' => 'Huyện Nam Đông',
                'gso_id' => '483',
                'parent_id' => 31,
            ),
            352 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 353,
                'name' => 'Quận Liên Chiểu',
                'gso_id' => '490',
                'parent_id' => 32,
            ),
            353 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 354,
                'name' => 'Quận Thanh Khê',
                'gso_id' => '491',
                'parent_id' => 32,
            ),
            354 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 355,
                'name' => 'Quận Hải Châu',
                'gso_id' => '492',
                'parent_id' => 32,
            ),
            355 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 356,
                'name' => 'Quận Sơn Trà',
                'gso_id' => '493',
                'parent_id' => 32,
            ),
            356 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 357,
                'name' => 'Quận Ngũ Hành Sơn',
                'gso_id' => '494',
                'parent_id' => 32,
            ),
            357 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 358,
                'name' => 'Quận Cẩm Lệ',
                'gso_id' => '495',
                'parent_id' => 32,
            ),
            358 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 359,
                'name' => 'Huyện Hòa Vang',
                'gso_id' => '497',
                'parent_id' => 32,
            ),
            359 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 360,
                'name' => 'Thành phố Tam Kỳ',
                'gso_id' => '502',
                'parent_id' => 33,
            ),
            360 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 361,
                'name' => 'Thành phố Hội An',
                'gso_id' => '503',
                'parent_id' => 33,
            ),
            361 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 362,
                'name' => 'Huyện Tây Giang',
                'gso_id' => '504',
                'parent_id' => 33,
            ),
            362 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 363,
                'name' => 'Huyện Đông Giang',
                'gso_id' => '505',
                'parent_id' => 33,
            ),
            363 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 364,
                'name' => 'Huyện Đại Lộc',
                'gso_id' => '506',
                'parent_id' => 33,
            ),
            364 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 365,
                'name' => 'Thị xã Điện Bàn',
                'gso_id' => '507',
                'parent_id' => 33,
            ),
            365 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 366,
                'name' => 'Huyện Duy Xuyên',
                'gso_id' => '508',
                'parent_id' => 33,
            ),
            366 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 367,
                'name' => 'Huyện Quế Sơn',
                'gso_id' => '509',
                'parent_id' => 33,
            ),
            367 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 368,
                'name' => 'Huyện Nam Giang',
                'gso_id' => '510',
                'parent_id' => 33,
            ),
            368 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 369,
                'name' => 'Huyện Phước Sơn',
                'gso_id' => '511',
                'parent_id' => 33,
            ),
            369 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 370,
                'name' => 'Huyện Hiệp Đức',
                'gso_id' => '512',
                'parent_id' => 33,
            ),
            370 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 371,
                'name' => 'Huyện Thăng Bình',
                'gso_id' => '513',
                'parent_id' => 33,
            ),
            371 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 372,
                'name' => 'Huyện Tiên Phước',
                'gso_id' => '514',
                'parent_id' => 33,
            ),
            372 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 373,
                'name' => 'Huyện Bắc Trà My',
                'gso_id' => '515',
                'parent_id' => 33,
            ),
            373 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 374,
                'name' => 'Huyện Nam Trà My',
                'gso_id' => '516',
                'parent_id' => 33,
            ),
            374 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 375,
                'name' => 'Huyện Núi Thành',
                'gso_id' => '517',
                'parent_id' => 33,
            ),
            375 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 376,
                'name' => 'Huyện Phú Ninh',
                'gso_id' => '518',
                'parent_id' => 33,
            ),
            376 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 377,
                'name' => 'Huyện Nông Sơn',
                'gso_id' => '519',
                'parent_id' => 33,
            ),
            377 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 378,
                'name' => 'Thành phố Quảng Ngãi',
                'gso_id' => '522',
                'parent_id' => 34,
            ),
            378 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 379,
                'name' => 'Huyện Bình Sơn',
                'gso_id' => '524',
                'parent_id' => 34,
            ),
            379 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 380,
                'name' => 'Huyện Trà Bồng',
                'gso_id' => '525',
                'parent_id' => 34,
            ),
            380 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 381,
                'name' => 'Huyện Sơn Tịnh',
                'gso_id' => '527',
                'parent_id' => 34,
            ),
            381 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 382,
                'name' => 'Huyện Tư Nghĩa',
                'gso_id' => '528',
                'parent_id' => 34,
            ),
            382 =>
            array (

                'grade' => config('vietnamzone.district'),
                'id' => $current + 383,
                'name' => 'Huyện Sơn Hà',
                'gso_id' => '529',
                'parent_id' => 34,
            ),
            383 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 384,
                'name' => 'Huyện Sơn Tây',
                'gso_id' => '530',
                'parent_id' => 34,
            ),
            384 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 385,
                'name' => 'Huyện Minh Long',
                'gso_id' => '531',
                'parent_id' => 34,
            ),
            385 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 386,
                'name' => 'Huyện Nghĩa Hành',
                'gso_id' => '532',
                'parent_id' => 34,
            ),
            386 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 387,
                'name' => 'Huyện Mộ Đức',
                'gso_id' => '533',
                'parent_id' => 34,
            ),
            387 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 388,
                'name' => 'Thị xã Đức Phổ',
                'gso_id' => '534',
                'parent_id' => 34,
            ),
            388 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 389,
                'name' => 'Huyện Ba Tơ',
                'gso_id' => '535',
                'parent_id' => 34,
            ),
            389 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 390,
                'name' => 'Thành phố Qui Nhơn',
                'gso_id' => '540',
                'parent_id' => 35,
            ),
            390 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 391,
                'name' => 'Huyện An Lão',
                'gso_id' => '542',
                'parent_id' => 35,
            ),
            391 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 392,
                'name' => 'Thị xã Hoài Nhơn',
                'gso_id' => '543',
                'parent_id' => 35,
            ),
            392 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 393,
                'name' => 'Huyện Hoài Ân',
                'gso_id' => '544',
                'parent_id' => 35,
            ),
            393 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 394,
                'name' => 'Huyện Phù Mỹ',
                'gso_id' => '545',
                'parent_id' => 35,
            ),
            394 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 395,
                'name' => 'Huyện Vĩnh Thạnh',
                'gso_id' => '546',
                'parent_id' => 35,
            ),
            395 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 396,
                'name' => 'Huyện Tây Sơn',
                'gso_id' => '547',
                'parent_id' => 35,
            ),
            396 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 397,
                'name' => 'Huyện Phù Cát',
                'gso_id' => '548',
                'parent_id' => 35,
            ),
            397 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 398,
                'name' => 'Thị xã An Nhơn',
                'gso_id' => '549',
                'parent_id' => 35,
            ),
            398 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 399,
                'name' => 'Huyện Tuy Phước',
                'gso_id' => '550',
                'parent_id' => 35,
            ),
            399 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 400,
                'name' => 'Huyện Vân Canh',
                'gso_id' => '551',
                'parent_id' => 35,
            ),
            400 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 401,
                'name' => 'Thành phố Tuy Hoà',
                'gso_id' => '555',
                'parent_id' => 36,
            ),
            401 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 402,
                'name' => 'Thị xã Sông Cầu',
                'gso_id' => '557',
                'parent_id' => 36,
            ),
            402 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 403,
                'name' => 'Huyện Đồng Xuân',
                'gso_id' => '558',
                'parent_id' => 36,
            ),
            403 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 404,
                'name' => 'Huyện Tuy An',
                'gso_id' => '559',
                'parent_id' => 36,
            ),
            404 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 405,
                'name' => 'Huyện Sơn Hòa',
                'gso_id' => '560',
                'parent_id' => 36,
            ),
            405 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 406,
                'name' => 'Huyện Sông Hinh',
                'gso_id' => '561',
                'parent_id' => 36,
            ),
            406 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 407,
                'name' => 'Huyện Tây Hoà',
                'gso_id' => '562',
                'parent_id' => 36,
            ),
            407 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 408,
                'name' => 'Huyện Phú Hoà',
                'gso_id' => '563',
                'parent_id' => 36,
            ),
            408 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 409,
                'name' => 'Thị xã Đông Hòa',
                'gso_id' => '564',
                'parent_id' => 36,
            ),
            409 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 410,
                'name' => 'Thành phố Nha Trang',
                'gso_id' => '568',
                'parent_id' => 37,
            ),
            410 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 411,
                'name' => 'Thành phố Cam Ranh',
                'gso_id' => '569',
                'parent_id' => 37,
            ),
            411 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 412,
                'name' => 'Huyện Cam Lâm',
                'gso_id' => '570',
                'parent_id' => 37,
            ),
            412 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 413,
                'name' => 'Huyện Vạn Ninh',
                'gso_id' => '571',
                'parent_id' => 37,
            ),
            413 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 414,
                'name' => 'Thị xã Ninh Hòa',
                'gso_id' => '572',
                'parent_id' => 37,
            ),
            414 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 415,
                'name' => 'Huyện Khánh Vĩnh',
                'gso_id' => '573',
                'parent_id' => 37,
            ),
            415 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 416,
                'name' => 'Huyện Diên Khánh',
                'gso_id' => '574',
                'parent_id' => 37,
            ),
            416 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 417,
                'name' => 'Huyện Khánh Sơn',
                'gso_id' => '575',
                'parent_id' => 37,
            ),
            417 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 418,
                'name' => 'Huyện Trường Sa',
                'gso_id' => '576',
                'parent_id' => 37,
            ),
            418 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 419,
                'name' => 'Thành phố Phan Rang-Tháp Chàm',
                'gso_id' => '582',
                'parent_id' => 38,
            ),
            419 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 420,
                'name' => 'Huyện Bác Ái',
                'gso_id' => '584',
                'parent_id' => 38,
            ),
            420 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 421,
                'name' => 'Huyện Ninh Sơn',
                'gso_id' => '585',
                'parent_id' => 38,
            ),
            421 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 422,
                'name' => 'Huyện Ninh Hải',
                'gso_id' => '586',
                'parent_id' => 38,
            ),
            422 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 423,
                'name' => 'Huyện Ninh Phước',
                'gso_id' => '587',
                'parent_id' => 38,
            ),
            423 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 424,
                'name' => 'Huyện Thuận Bắc',
                'gso_id' => '588',
                'parent_id' => 38,
            ),
            424 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 425,
                'name' => 'Huyện Thuận Nam',
                'gso_id' => '589',
                'parent_id' => 38,
            ),
            425 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 426,
                'name' => 'Thành phố Phan Thiết',
                'gso_id' => '593',
                'parent_id' => 39,
            ),
            426 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 427,
                'name' => 'Thị xã La Gi',
                'gso_id' => '594',
                'parent_id' => 39,
            ),
            427 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 428,
                'name' => 'Huyện Tuy Phong',
                'gso_id' => '595',
                'parent_id' => 39,
            ),
            428 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 429,
                'name' => 'Huyện Bắc Bình',
                'gso_id' => '596',
                'parent_id' => 39,
            ),
            429 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 430,
                'name' => 'Huyện Hàm Thuận Bắc',
                'gso_id' => '597',
                'parent_id' => 39,
            ),
            430 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 431,
                'name' => 'Huyện Hàm Thuận Nam',
                'gso_id' => '598',
                'parent_id' => 39,
            ),
            431 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 432,
                'name' => 'Huyện Tánh Linh',
                'gso_id' => '599',
                'parent_id' => 39,
            ),
            432 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 433,
                'name' => 'Huyện Đức Linh',
                'gso_id' => '600',
                'parent_id' => 39,
            ),
            433 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 434,
                'name' => 'Huyện Hàm Tân',
                'gso_id' => '601',
                'parent_id' => 39,
            ),
            434 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 435,
                'name' => 'Huyện Phú Quí',
                'gso_id' => '602',
                'parent_id' => 39,
            ),
            435 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 436,
                'name' => 'Thành phố Kon Tum',
                'gso_id' => '608',
                'parent_id' => 40,
            ),
            436 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 437,
                'name' => 'Huyện Đắk Glei',
                'gso_id' => '610',
                'parent_id' => 40,
            ),
            437 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 438,
                'name' => 'Huyện Ngọc Hồi',
                'gso_id' => '611',
                'parent_id' => 40,
            ),
            438 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 439,
                'name' => 'Huyện Đắk Tô',
                'gso_id' => '612',
                'parent_id' => 40,
            ),
            439 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 440,
                'name' => 'Huyện Kon Plông',
                'gso_id' => '613',
                'parent_id' => 40,
            ),
            440 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 441,
                'name' => 'Huyện Kon Rẫy',
                'gso_id' => '614',
                'parent_id' => 40,
            ),
            441 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 442,
                'name' => 'Huyện Đắk Hà',
                'gso_id' => '615',
                'parent_id' => 40,
            ),
            442 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 443,
                'name' => 'Huyện Sa Thầy',
                'gso_id' => '616',
                'parent_id' => 40,
            ),
            443 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 444,
                'name' => 'Huyện Tu Mơ Rông',
                'gso_id' => '617',
                'parent_id' => 40,
            ),
            444 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 445,
                'name' => 'Huyện Ia H\' Drai',
                'gso_id' => '618',
                'parent_id' => 40,
            ),
            445 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 446,
                'name' => 'Thành phố Pleiku',
                'gso_id' => '622',
                'parent_id' => 41,
            ),
            446 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 447,
                'name' => 'Thị xã An Khê',
                'gso_id' => '623',
                'parent_id' => 41,
            ),
            447 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 448,
                'name' => 'Thị xã Ayun Pa',
                'gso_id' => '624',
                'parent_id' => 41,
            ),
            448 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 449,
                'name' => 'Huyện KBang',
                'gso_id' => '625',
                'parent_id' => 41,
            ),
            449 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 450,
                'name' => 'Huyện Đăk Đoa',
                'gso_id' => '626',
                'parent_id' => 41,
            ),
            450 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 451,
                'name' => 'Huyện Chư Păh',
                'gso_id' => '627',
                'parent_id' => 41,
            ),
            451 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 452,
                'name' => 'Huyện Ia Grai',
                'gso_id' => '628',
                'parent_id' => 41,
            ),
            452 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 453,
                'name' => 'Huyện Mang Yang',
                'gso_id' => '629',
                'parent_id' => 41,
            ),
            453 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 454,
                'name' => 'Huyện Kông Chro',
                'gso_id' => '630',
                'parent_id' => 41,
            ),
            454 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 455,
                'name' => 'Huyện Đức Cơ',
                'gso_id' => '631',
                'parent_id' => 41,
            ),
            455 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 456,
                'name' => 'Huyện Chư Prông',
                'gso_id' => '632',
                'parent_id' => 41,
            ),
            456 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 457,
                'name' => 'Huyện Chư Sê',
                'gso_id' => '633',
                'parent_id' => 41,
            ),
            457 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 458,
                'name' => 'Huyện Đăk Pơ',
                'gso_id' => '634',
                'parent_id' => 41,
            ),
            458 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 459,
                'name' => 'Huyện Ia Pa',
                'gso_id' => '635',
                'parent_id' => 41,
            ),
            459 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 460,
                'name' => 'Huyện Krông Pa',
                'gso_id' => '637',
                'parent_id' => 41,
            ),
            460 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 461,
                'name' => 'Huyện Phú Thiện',
                'gso_id' => '638',
                'parent_id' => 41,
            ),
            461 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 462,
                'name' => 'Huyện Chư Pưh',
                'gso_id' => '639',
                'parent_id' => 41,
            ),
            462 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 463,
                'name' => 'Thành phố Buôn Ma Thuột',
                'gso_id' => '643',
                'parent_id' => 42,
            ),
            463 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 464,
                'name' => 'Thị Xã Buôn Hồ',
                'gso_id' => '644',
                'parent_id' => 42,
            ),
            464 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 465,
                'name' => 'Huyện Ea H\'leo',
                'gso_id' => '645',
                'parent_id' => 42,
            ),
            465 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 466,
                'name' => 'Huyện Ea Súp',
                'gso_id' => '646',
                'parent_id' => 42,
            ),
            466 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 467,
                'name' => 'Huyện Buôn Đôn',
                'gso_id' => '647',
                'parent_id' => 42,
            ),
            467 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 468,
                'name' => 'Huyện Cư M\'gar',
                'gso_id' => '648',
                'parent_id' => 42,
            ),
            468 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 469,
                'name' => 'Huyện Krông Búk',
                'gso_id' => '649',
                'parent_id' => 42,
            ),
            469 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 470,
                'name' => 'Huyện Krông Năng',
                'gso_id' => '650',
                'parent_id' => 42,
            ),
            470 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 471,
                'name' => 'Huyện Ea Kar',
                'gso_id' => '651',
                'parent_id' => 42,
            ),
            471 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 472,
                'name' => 'Huyện M\'Đrắk',
                'gso_id' => '652',
                'parent_id' => 42,
            ),
            472 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 473,
                'name' => 'Huyện Krông Bông',
                'gso_id' => '653',
                'parent_id' => 42,
            ),
            473 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 474,
                'name' => 'Huyện Krông Pắc',
                'gso_id' => '654',
                'parent_id' => 42,
            ),
            474 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 475,
                'name' => 'Huyện Krông A Na',
                'gso_id' => '655',
                'parent_id' => 42,
            ),
            475 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 476,
                'name' => 'Huyện Lắk',
                'gso_id' => '656',
                'parent_id' => 42,
            ),
            476 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 477,
                'name' => 'Huyện Cư Kuin',
                'gso_id' => '657',
                'parent_id' => 42,
            ),
            477 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 478,
                'name' => 'Thành phố Gia Nghĩa',
                'gso_id' => '660',
                'parent_id' => 43,
            ),
            478 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 479,
                'name' => 'Huyện Đăk Glong',
                'gso_id' => '661',
                'parent_id' => 43,
            ),
            479 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 480,
                'name' => 'Huyện Cư Jút',
                'gso_id' => '662',
                'parent_id' => 43,
            ),
            480 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 481,
                'name' => 'Huyện Đắk Mil',
                'gso_id' => '663',
                'parent_id' => 43,
            ),
            481 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 482,
                'name' => 'Huyện Krông Nô',
                'gso_id' => '664',
                'parent_id' => 43,
            ),
            482 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 483,
                'name' => 'Huyện Đắk Song',
                'gso_id' => '665',
                'parent_id' => 43,
            ),
            483 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 484,
                'name' => 'Huyện Đắk R\'Lấp',
                'gso_id' => '666',
                'parent_id' => 43,
            ),
            484 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 485,
                'name' => 'Huyện Tuy Đức',
                'gso_id' => '667',
                'parent_id' => 43,
            ),
            485 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 486,
                'name' => 'Thành phố Đà Lạt',
                'gso_id' => '672',
                'parent_id' => 44,
            ),
            486 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 487,
                'name' => 'Thành phố Bảo Lộc',
                'gso_id' => '673',
                'parent_id' => 44,
            ),
            487 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 488,
                'name' => 'Huyện Đam Rông',
                'gso_id' => '674',
                'parent_id' => 44,
            ),
            488 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 489,
                'name' => 'Huyện Lạc Dương',
                'gso_id' => '675',
                'parent_id' => 44,
            ),
            489 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 490,
                'name' => 'Huyện Lâm Hà',
                'gso_id' => '676',
                'parent_id' => 44,
            ),
            490 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 491,
                'name' => 'Huyện Đơn Dương',
                'gso_id' => '677',
                'parent_id' => 44,
            ),
            491 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 492,
                'name' => 'Huyện Đức Trọng',
                'gso_id' => '678',
                'parent_id' => 44,
            ),
            492 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 493,
                'name' => 'Huyện Di Linh',
                'gso_id' => '679',
                'parent_id' => 44,
            ),
            493 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 494,
                'name' => 'Huyện Bảo Lâm',
                'gso_id' => '680',
                'parent_id' => 44,
            ),
            494 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 495,
                'name' => 'Huyện Đạ Huoai',
                'gso_id' => '681',
                'parent_id' => 44,
            ),
            495 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 496,
                'name' => 'Huyện Đạ Tẻh',
                'gso_id' => '682',
                'parent_id' => 44,
            ),
            496 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 497,
                'name' => 'Huyện Cát Tiên',
                'gso_id' => '683',
                'parent_id' => 44,
            ),
            497 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 498,
                'name' => 'Thị xã Phước Long',
                'gso_id' => '688',
                'parent_id' => 45,
            ),
            498 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 499,
                'name' => 'Thành phố Đồng Xoài',
                'gso_id' => '689',
                'parent_id' => 45,
            ),
            499 =>
            array (
                'grade' => config('vietnamzone.district'),
                'id' => $current + 500,
                'name' => 'Thị xã Bình Long',
                'gso_id' => '690',
                'parent_id' => 45,
            ),
        ));

        \DB::table('vietnam_zones')->insert(array (
            0 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 501,
                    'name' => 'Huyện Bù Gia Mập',
                    'gso_id' => '691',
                    'parent_id' => 45,
                ),
            1 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 502,
                    'name' => 'Huyện Lộc Ninh',
                    'gso_id' => '692',
                    'parent_id' => 45,
                ),
            2 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 503,
                    'name' => 'Huyện Bù Đốp',
                    'gso_id' => '693',
                    'parent_id' => 45,
                ),
            3 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 504,
                    'name' => 'Huyện Hớn Quản',
                    'gso_id' => '694',
                    'parent_id' => 45,
                ),
            4 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 505,
                    'name' => 'Huyện Đồng Phú',
                    'gso_id' => '695',
                    'parent_id' => 45,
                ),
            5 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 506,
                    'name' => 'Huyện Bù Đăng',
                    'gso_id' => '696',
                    'parent_id' => 45,
                ),
            6 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 507,
                    'name' => 'Huyện Chơn Thành',
                    'gso_id' => '697',
                    'parent_id' => 45,
                ),
            7 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 508,
                    'name' => 'Huyện Phú Riềng',
                    'gso_id' => '698',
                    'parent_id' => 45,
                ),
            8 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 509,
                    'name' => 'Thành phố Tây Ninh',
                    'gso_id' => '703',
                    'parent_id' => 46,
                ),
            9 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 510,
                    'name' => 'Huyện Tân Biên',
                    'gso_id' => '705',
                    'parent_id' => 46,
                ),
            10 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 511,
                    'name' => 'Huyện Tân Châu',
                    'gso_id' => '706',
                    'parent_id' => 46,
                ),
            11 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 512,
                    'name' => 'Huyện Dương Minh Châu',
                    'gso_id' => '707',
                    'parent_id' => 46,
                ),
            12 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 513,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '708',
                    'parent_id' => 46,
                ),
            13 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 514,
                    'name' => 'Thị xã Hòa Thành',
                    'gso_id' => '709',
                    'parent_id' => 46,
                ),
            14 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 515,
                    'name' => 'Huyện Gò Dầu',
                    'gso_id' => '710',
                    'parent_id' => 46,
                ),
            15 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 516,
                    'name' => 'Huyện Bến Cầu',
                    'gso_id' => '711',
                    'parent_id' => 46,
                ),
            16 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 517,
                    'name' => 'Thị xã Trảng Bàng',
                    'gso_id' => '712',
                    'parent_id' => 46,
                ),
            17 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 518,
                    'name' => 'Thành phố Thủ Dầu Một',
                    'gso_id' => '718',
                    'parent_id' => 47,
                ),
            18 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 519,
                    'name' => 'Huyện Bàu Bàng',
                    'gso_id' => '719',
                    'parent_id' => 47,
                ),
            19 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 520,
                    'name' => 'Huyện Dầu Tiếng',
                    'gso_id' => '720',
                    'parent_id' => 47,
                ),
            20 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 521,
                    'name' => 'Thị xã Bến Cát',
                    'gso_id' => '721',
                    'parent_id' => 47,
                ),
            21 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 522,
                    'name' => 'Huyện Phú Giáo',
                    'gso_id' => '722',
                    'parent_id' => 47,
                ),
            22 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 523,
                    'name' => 'Thị xã Tân Uyên',
                    'gso_id' => '723',
                    'parent_id' => 47,
                ),
            23 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 524,
                    'name' => 'Thành phố Dĩ An',
                    'gso_id' => '724',
                    'parent_id' => 47,
                ),
            24 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 525,
                    'name' => 'Thành phố Thuận An',
                    'gso_id' => '725',
                    'parent_id' => 47,
                ),
            25 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 526,
                    'name' => 'Huyện Bắc Tân Uyên',
                    'gso_id' => '726',
                    'parent_id' => 47,
                ),
            26 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 527,
                    'name' => 'Thành phố Biên Hòa',
                    'gso_id' => '731',
                    'parent_id' => 48,
                ),
            27 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 528,
                    'name' => 'Thành phố Long Khánh',
                    'gso_id' => '732',
                    'parent_id' => 48,
                ),
            28 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 529,
                    'name' => 'Huyện Tân Phú',
                    'gso_id' => '734',
                    'parent_id' => 48,
                ),
            29 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 530,
                    'name' => 'Huyện Vĩnh Cửu',
                    'gso_id' => '735',
                    'parent_id' => 48,
                ),
            30 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 531,
                    'name' => 'Huyện Định Quán',
                    'gso_id' => '736',
                    'parent_id' => 48,
                ),
            31 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 532,
                    'name' => 'Huyện Trảng Bom',
                    'gso_id' => '737',
                    'parent_id' => 48,
                ),
            32 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 533,
                    'name' => 'Huyện Thống Nhất',
                    'gso_id' => '738',
                    'parent_id' => 48,
                ),
            33 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 534,
                    'name' => 'Huyện Cẩm Mỹ',
                    'gso_id' => '739',
                    'parent_id' => 48,
                ),
            34 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 535,
                    'name' => 'Huyện Long Thành',
                    'gso_id' => '740',
                    'parent_id' => 48,
                ),
            35 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 536,
                    'name' => 'Huyện Xuân Lộc',
                    'gso_id' => '741',
                    'parent_id' => 48,
                ),
            36 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 537,
                    'name' => 'Huyện Nhơn Trạch',
                    'gso_id' => '742',
                    'parent_id' => 48,
                ),
            37 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 538,
                    'name' => 'Thành phố Vũng Tàu',
                    'gso_id' => '747',
                    'parent_id' => 49,
                ),
            38 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 539,
                    'name' => 'Thành phố Bà Rịa',
                    'gso_id' => '748',
                    'parent_id' => 49,
                ),
            39 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 540,
                    'name' => 'Huyện Châu Đức',
                    'gso_id' => '750',
                    'parent_id' => 49,
                ),
            40 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 541,
                    'name' => 'Huyện Xuyên Mộc',
                    'gso_id' => '751',
                    'parent_id' => 49,
                ),
            41 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 542,
                    'name' => 'Huyện Long Điền',
                    'gso_id' => '752',
                    'parent_id' => 49,
                ),
            42 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 543,
                    'name' => 'Huyện Đất Đỏ',
                    'gso_id' => '753',
                    'parent_id' => 49,
                ),
            43 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 544,
                    'name' => 'Thị xã Phú Mỹ',
                    'gso_id' => '754',
                    'parent_id' => 49,
                ),
            44 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 545,
                    'name' => 'Quận 1',
                    'gso_id' => '760',
                    'parent_id' => 50,
                ),
            45 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 546,
                    'name' => 'Quận 12',
                    'gso_id' => '761',
                    'parent_id' => 50,
                ),
            46 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 547,
                    'name' => 'Quận Thủ Đức',
                    'gso_id' => '762',
                    'parent_id' => 50,
                ),
            47 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 548,
                    'name' => 'Quận 9',
                    'gso_id' => '763',
                    'parent_id' => 50,
                ),
            48 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 549,
                    'name' => 'Quận Gò Vấp',
                    'gso_id' => '764',
                    'parent_id' => 50,
                ),
            49 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 550,
                    'name' => 'Quận Bình Thạnh',
                    'gso_id' => '765',
                    'parent_id' => 50,
                ),
            50 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 551,
                    'name' => 'Quận Tân Bình',
                    'gso_id' => '766',
                    'parent_id' => 50,
                ),
            51 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 552,
                    'name' => 'Quận Tân Phú',
                    'gso_id' => '767',
                    'parent_id' => 50,
                ),
            52 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 553,
                    'name' => 'Quận Phú Nhuận',
                    'gso_id' => '768',
                    'parent_id' => 50,
                ),
            53 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 554,
                    'name' => 'Quận 2',
                    'gso_id' => '769',
                    'parent_id' => 50,
                ),
            54 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 555,
                    'name' => 'Quận 3',
                    'gso_id' => '770',
                    'parent_id' => 50,
                ),
            55 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 556,
                    'name' => 'Quận 10',
                    'gso_id' => '771',
                    'parent_id' => 50,
                ),
            56 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 557,
                    'name' => 'Quận 11',
                    'gso_id' => '772',
                    'parent_id' => 50,
                ),
            57 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 558,
                    'name' => 'Quận 4',
                    'gso_id' => '773',
                    'parent_id' => 50,
                ),
            58 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 559,
                    'name' => 'Quận 5',
                    'gso_id' => '774',
                    'parent_id' => 50,
                ),
            59 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 560,
                    'name' => 'Quận 6',
                    'gso_id' => '775',
                    'parent_id' => 50,
                ),
            60 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 561,
                    'name' => 'Quận 8',
                    'gso_id' => '776',
                    'parent_id' => 50,
                ),
            61 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 562,
                    'name' => 'Quận Bình Tân',
                    'gso_id' => '777',
                    'parent_id' => 50,
                ),
            62 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 563,
                    'name' => 'Quận 7',
                    'gso_id' => '778',
                    'parent_id' => 50,
                ),
            63 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 564,
                    'name' => 'Huyện Củ Chi',
                    'gso_id' => '783',
                    'parent_id' => 50,
                ),
            64 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 565,
                    'name' => 'Huyện Hóc Môn',
                    'gso_id' => '784',
                    'parent_id' => 50,
                ),
            65 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 566,
                    'name' => 'Huyện Bình Chánh',
                    'gso_id' => '785',
                    'parent_id' => 50,
                ),
            66 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 567,
                    'name' => 'Huyện Nhà Bè',
                    'gso_id' => '786',
                    'parent_id' => 50,
                ),
            67 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 568,
                    'name' => 'Huyện Cần Giờ',
                    'gso_id' => '787',
                    'parent_id' => 50,
                ),
            68 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 569,
                    'name' => 'Thành phố Tân An',
                    'gso_id' => '794',
                    'parent_id' => 51,
                ),
            69 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 570,
                    'name' => 'Thị xã Kiến Tường',
                    'gso_id' => '795',
                    'parent_id' => 51,
                ),
            70 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 571,
                    'name' => 'Huyện Tân Hưng',
                    'gso_id' => '796',
                    'parent_id' => 51,
                ),
            71 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 572,
                    'name' => 'Huyện Vĩnh Hưng',
                    'gso_id' => '797',
                    'parent_id' => 51,
                ),
            72 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 573,
                    'name' => 'Huyện Mộc Hóa',
                    'gso_id' => '798',
                    'parent_id' => 51,
                ),
            73 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 574,
                    'name' => 'Huyện Tân Thạnh',
                    'gso_id' => '799',
                    'parent_id' => 51,
                ),
            74 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 575,
                    'name' => 'Huyện Thạnh Hóa',
                    'gso_id' => '800',
                    'parent_id' => 51,
                ),
            75 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 576,
                    'name' => 'Huyện Đức Huệ',
                    'gso_id' => '801',
                    'parent_id' => 51,
                ),
            76 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 577,
                    'name' => 'Huyện Đức Hòa',
                    'gso_id' => '802',
                    'parent_id' => 51,
                ),
            77 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 578,
                    'name' => 'Huyện Bến Lức',
                    'gso_id' => '803',
                    'parent_id' => 51,
                ),
            78 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 579,
                    'name' => 'Huyện Thủ Thừa',
                    'gso_id' => '804',
                    'parent_id' => 51,
                ),
            79 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 580,
                    'name' => 'Huyện Tân Trụ',
                    'gso_id' => '805',
                    'parent_id' => 51,
                ),
            80 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 581,
                    'name' => 'Huyện Cần Đước',
                    'gso_id' => '806',
                    'parent_id' => 51,
                ),
            81 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 582,
                    'name' => 'Huyện Cần Giuộc',
                    'gso_id' => '807',
                    'parent_id' => 51,
                ),
            82 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 583,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '808',
                    'parent_id' => 51,
                ),
            83 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 584,
                    'name' => 'Thành phố Mỹ Tho',
                    'gso_id' => '815',
                    'parent_id' => 52,
                ),
            84 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 585,
                    'name' => 'Thị xã Gò Công',
                    'gso_id' => '816',
                    'parent_id' => 52,
                ),
            85 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 586,
                    'name' => 'Thị xã Cai Lậy',
                    'gso_id' => '817',
                    'parent_id' => 52,
                ),
            86 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 587,
                    'name' => 'Huyện Tân Phước',
                    'gso_id' => '818',
                    'parent_id' => 52,
                ),
            87 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 588,
                    'name' => 'Huyện Cái Bè',
                    'gso_id' => '819',
                    'parent_id' => 52,
                ),
            88 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 589,
                    'name' => 'Huyện Cai Lậy',
                    'gso_id' => '820',
                    'parent_id' => 52,
                ),
            89 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 590,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '821',
                    'parent_id' => 52,
                ),
            90 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 591,
                    'name' => 'Huyện Chợ Gạo',
                    'gso_id' => '822',
                    'parent_id' => 52,
                ),
            91 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 592,
                    'name' => 'Huyện Gò Công Tây',
                    'gso_id' => '823',
                    'parent_id' => 52,
                ),
            92 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 593,
                    'name' => 'Huyện Gò Công Đông',
                    'gso_id' => '824',
                    'parent_id' => 52,
                ),
            93 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 594,
                    'name' => 'Huyện Tân Phú Đông',
                    'gso_id' => '825',
                    'parent_id' => 52,
                ),
            94 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 595,
                    'name' => 'Thành phố Bến Tre',
                    'gso_id' => '829',
                    'parent_id' => 53,
                ),
            95 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 596,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '831',
                    'parent_id' => 53,
                ),
            96 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 597,
                    'name' => 'Huyện Chợ Lách',
                    'gso_id' => '832',
                    'parent_id' => 53,
                ),
            97 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 598,
                    'name' => 'Huyện Mỏ Cày Nam',
                    'gso_id' => '833',
                    'parent_id' => 53,
                ),
            98 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 599,
                    'name' => 'Huyện Giồng Trôm',
                    'gso_id' => '834',
                    'parent_id' => 53,
                ),
            99 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 600,
                    'name' => 'Huyện Bình Đại',
                    'gso_id' => '835',
                    'parent_id' => 53,
                ),
            100 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 601,
                    'name' => 'Huyện Ba Tri',
                    'gso_id' => '836',
                    'parent_id' => 53,
                ),
            101 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 602,
                    'name' => 'Huyện Thạnh Phú',
                    'gso_id' => '837',
                    'parent_id' => 53,
                ),
            102 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 603,
                    'name' => 'Huyện Mỏ Cày Bắc',
                    'gso_id' => '838',
                    'parent_id' => 53,
                ),
            103 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 604,
                    'name' => 'Thành phố Trà Vinh',
                    'gso_id' => '842',
                    'parent_id' => 54,
                ),
            104 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 605,
                    'name' => 'Huyện Càng Long',
                    'gso_id' => '844',
                    'parent_id' => 54,
                ),
            105 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 606,
                    'name' => 'Huyện Cầu Kè',
                    'gso_id' => '845',
                    'parent_id' => 54,
                ),
            106 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 607,
                    'name' => 'Huyện Tiểu Cần',
                    'gso_id' => '846',
                    'parent_id' => 54,
                ),
            107 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 608,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '847',
                    'parent_id' => 54,
                ),
            108 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 609,
                    'name' => 'Huyện Cầu Ngang',
                    'gso_id' => '848',
                    'parent_id' => 54,
                ),
            109 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 610,
                    'name' => 'Huyện Trà Cú',
                    'gso_id' => '849',
                    'parent_id' => 54,
                ),
            110 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 611,
                    'name' => 'Huyện Duyên Hải',
                    'gso_id' => '850',
                    'parent_id' => 54,
                ),
            111 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 612,
                    'name' => 'Thị xã Duyên Hải',
                    'gso_id' => '851',
                    'parent_id' => 54,
                ),
            112 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 613,
                    'name' => 'Thành phố Vĩnh Long',
                    'gso_id' => '855',
                    'parent_id' => 55,
                ),
            113 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 614,
                    'name' => 'Huyện Long Hồ',
                    'gso_id' => '857',
                    'parent_id' => 55,
                ),
            114 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 615,
                    'name' => 'Huyện Mang Thít',
                    'gso_id' => '858',
                    'parent_id' => 55,
                ),
            115 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 616,
                    'name' => 'Huyện  Vũng Liêm',
                    'gso_id' => '859',
                    'parent_id' => 55,
                ),
            116 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 617,
                    'name' => 'Huyện Tam Bình',
                    'gso_id' => '860',
                    'parent_id' => 55,
                ),
            117 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 618,
                    'name' => 'Thị xã Bình Minh',
                    'gso_id' => '861',
                    'parent_id' => 55,
                ),
            118 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 619,
                    'name' => 'Huyện Trà Ôn',
                    'gso_id' => '862',
                    'parent_id' => 55,
                ),
            119 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 620,
                    'name' => 'Huyện Bình Tân',
                    'gso_id' => '863',
                    'parent_id' => 55,
                ),
            120 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 621,
                    'name' => 'Thành phố Cao Lãnh',
                    'gso_id' => '866',
                    'parent_id' => 56,
                ),
            121 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 622,
                    'name' => 'Thành phố Sa Đéc',
                    'gso_id' => '867',
                    'parent_id' => 56,
                ),
            122 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 623,
                    'name' => 'Thị xã Hồng Ngự',
                    'gso_id' => '868',
                    'parent_id' => 56,
                ),
            123 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 624,
                    'name' => 'Huyện Tân Hồng',
                    'gso_id' => '869',
                    'parent_id' => 56,
                ),
            124 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 625,
                    'name' => 'Huyện Hồng Ngự',
                    'gso_id' => '870',
                    'parent_id' => 56,
                ),
            125 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 626,
                    'name' => 'Huyện Tam Nông',
                    'gso_id' => '871',
                    'parent_id' => 56,
                ),
            126 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 627,
                    'name' => 'Huyện Tháp Mười',
                    'gso_id' => '872',
                    'parent_id' => 56,
                ),
            127 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 628,
                    'name' => 'Huyện Cao Lãnh',
                    'gso_id' => '873',
                    'parent_id' => 56,
                ),
            128 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 629,
                    'name' => 'Huyện Thanh Bình',
                    'gso_id' => '874',
                    'parent_id' => 56,
                ),
            129 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 630,
                    'name' => 'Huyện Lấp Vò',
                    'gso_id' => '875',
                    'parent_id' => 56,
                ),
            130 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 631,
                    'name' => 'Huyện Lai Vung',
                    'gso_id' => '876',
                    'parent_id' => 56,
                ),
            131 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 632,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '877',
                    'parent_id' => 56,
                ),
            132 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 633,
                    'name' => 'Thành phố Long Xuyên',
                    'gso_id' => '883',
                    'parent_id' => 57,
                ),
            133 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 634,
                    'name' => 'Thành phố Châu Đốc',
                    'gso_id' => '884',
                    'parent_id' => 57,
                ),
            134 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 635,
                    'name' => 'Huyện An Phú',
                    'gso_id' => '886',
                    'parent_id' => 57,
                ),
            135 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 636,
                    'name' => 'Thị xã Tân Châu',
                    'gso_id' => '887',
                    'parent_id' => 57,
                ),
            136 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 637,
                    'name' => 'Huyện Phú Tân',
                    'gso_id' => '888',
                    'parent_id' => 57,
                ),
            137 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 638,
                    'name' => 'Huyện Châu Phú',
                    'gso_id' => '889',
                    'parent_id' => 57,
                ),
            138 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 639,
                    'name' => 'Huyện Tịnh Biên',
                    'gso_id' => '890',
                    'parent_id' => 57,
                ),
            139 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 640,
                    'name' => 'Huyện Tri Tôn',
                    'gso_id' => '891',
                    'parent_id' => 57,
                ),
            140 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 641,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '892',
                    'parent_id' => 57,
                ),
            141 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 642,
                    'name' => 'Huyện Chợ Mới',
                    'gso_id' => '893',
                    'parent_id' => 57,
                ),
            142 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 643,
                    'name' => 'Huyện Thoại Sơn',
                    'gso_id' => '894',
                    'parent_id' => 57,
                ),
            143 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 644,
                    'name' => 'Thành phố Rạch Giá',
                    'gso_id' => '899',
                    'parent_id' => 58,
                ),
            144 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 645,
                    'name' => 'Thành phố Hà Tiên',
                    'gso_id' => '900',
                    'parent_id' => 58,
                ),
            145 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 646,
                    'name' => 'Huyện Kiên Lương',
                    'gso_id' => '902',
                    'parent_id' => 58,
                ),
            146 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 647,
                    'name' => 'Huyện Hòn Đất',
                    'gso_id' => '903',
                    'parent_id' => 58,
                ),
            147 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 648,
                    'name' => 'Huyện Tân Hiệp',
                    'gso_id' => '904',
                    'parent_id' => 58,
                ),
            148 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 649,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '905',
                    'parent_id' => 58,
                ),
            149 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 650,
                    'name' => 'Huyện Giồng Riềng',
                    'gso_id' => '906',
                    'parent_id' => 58,
                ),
            150 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 651,
                    'name' => 'Huyện Gò Quao',
                    'gso_id' => '907',
                    'parent_id' => 58,
                ),
            151 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 652,
                    'name' => 'Huyện An Biên',
                    'gso_id' => '908',
                    'parent_id' => 58,
                ),
            152 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 653,
                    'name' => 'Huyện An Minh',
                    'gso_id' => '909',
                    'parent_id' => 58,
                ),
            153 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 654,
                    'name' => 'Huyện Vĩnh Thuận',
                    'gso_id' => '910',
                    'parent_id' => 58,
                ),
            154 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 655,
                    'name' => 'Huyện Phú Quốc',
                    'gso_id' => '911',
                    'parent_id' => 58,
                ),
            155 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 656,
                    'name' => 'Huyện Kiên Hải',
                    'gso_id' => '912',
                    'parent_id' => 58,
                ),
            156 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 657,
                    'name' => 'Huyện U Minh Thượng',
                    'gso_id' => '913',
                    'parent_id' => 58,
                ),
            157 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 658,
                    'name' => 'Huyện Giang Thành',
                    'gso_id' => '914',
                    'parent_id' => 58,
                ),
            158 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 659,
                    'name' => 'Quận Ninh Kiều',
                    'gso_id' => '916',
                    'parent_id' => 59,
                ),
            159 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 660,
                    'name' => 'Quận Ô Môn',
                    'gso_id' => '917',
                    'parent_id' => 59,
                ),
            160 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 661,
                    'name' => 'Quận Bình Thuỷ',
                    'gso_id' => '918',
                    'parent_id' => 59,
                ),
            161 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 662,
                    'name' => 'Quận Cái Răng',
                    'gso_id' => '919',
                    'parent_id' => 59,
                ),
            162 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 663,
                    'name' => 'Quận Thốt Nốt',
                    'gso_id' => '923',
                    'parent_id' => 59,
                ),
            163 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 664,
                    'name' => 'Huyện Vĩnh Thạnh',
                    'gso_id' => '924',
                    'parent_id' => 59,
                ),
            164 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 665,
                    'name' => 'Huyện Cờ Đỏ',
                    'gso_id' => '925',
                    'parent_id' => 59,
                ),
            165 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 666,
                    'name' => 'Huyện Phong Điền',
                    'gso_id' => '926',
                    'parent_id' => 59,
                ),
            166 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 667,
                    'name' => 'Huyện Thới Lai',
                    'gso_id' => '927',
                    'parent_id' => 59,
                ),
            167 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 668,
                    'name' => 'Thành phố Vị Thanh',
                    'gso_id' => '930',
                    'parent_id' => 60,
                ),
            168 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 669,
                    'name' => 'Thành phố Ngã Bảy',
                    'gso_id' => '931',
                    'parent_id' => 60,
                ),
            169 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 670,
                    'name' => 'Huyện Châu Thành A',
                    'gso_id' => '932',
                    'parent_id' => 60,
                ),
            170 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 671,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '933',
                    'parent_id' => 60,
                ),
            171 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 672,
                    'name' => 'Huyện Phụng Hiệp',
                    'gso_id' => '934',
                    'parent_id' => 60,
                ),
            172 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 673,
                    'name' => 'Huyện Vị Thuỷ',
                    'gso_id' => '935',
                    'parent_id' => 60,
                ),
            173 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 674,
                    'name' => 'Huyện Long Mỹ',
                    'gso_id' => '936',
                    'parent_id' => 60,
                ),
            174 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 675,
                    'name' => 'Thị xã Long Mỹ',
                    'gso_id' => '937',
                    'parent_id' => 60,
                ),
            175 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 676,
                    'name' => 'Thành phố Sóc Trăng',
                    'gso_id' => '941',
                    'parent_id' => 61,
                ),
            176 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 677,
                    'name' => 'Huyện Châu Thành',
                    'gso_id' => '942',
                    'parent_id' => 61,
                ),
            177 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 678,
                    'name' => 'Huyện Kế Sách',
                    'gso_id' => '943',
                    'parent_id' => 61,
                ),
            178 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 679,
                    'name' => 'Huyện Mỹ Tú',
                    'gso_id' => '944',
                    'parent_id' => 61,
                ),
            179 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 680,
                    'name' => 'Huyện Cù Lao Dung',
                    'gso_id' => '945',
                    'parent_id' => 61,
                ),
            180 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 681,
                    'name' => 'Huyện Long Phú',
                    'gso_id' => '946',
                    'parent_id' => 61,
                ),
            181 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 682,
                    'name' => 'Huyện Mỹ Xuyên',
                    'gso_id' => '947',
                    'parent_id' => 61,
                ),
            182 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 683,
                    'name' => 'Thị xã Ngã Năm',
                    'gso_id' => '948',
                    'parent_id' => 61,
                ),
            183 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 684,
                    'name' => 'Huyện Thạnh Trị',
                    'gso_id' => '949',
                    'parent_id' => 61,
                ),
            184 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 685,
                    'name' => 'Thị xã Vĩnh Châu',
                    'gso_id' => '950',
                    'parent_id' => 61,
                ),
            185 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 686,
                    'name' => 'Huyện Trần Đề',
                    'gso_id' => '951',
                    'parent_id' => 61,
                ),
            186 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 687,
                    'name' => 'Thành phố Bạc Liêu',
                    'gso_id' => '954',
                    'parent_id' => 62,
                ),
            187 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 688,
                    'name' => 'Huyện Hồng Dân',
                    'gso_id' => '956',
                    'parent_id' => 62,
                ),
            188 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 689,
                    'name' => 'Huyện Phước Long',
                    'gso_id' => '957',
                    'parent_id' => 62,
                ),
            189 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 690,
                    'name' => 'Huyện Vĩnh Lợi',
                    'gso_id' => '958',
                    'parent_id' => 62,
                ),
            190 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 691,
                    'name' => 'Thị xã Giá Rai',
                    'gso_id' => '959',
                    'parent_id' => 62,
                ),
            191 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 692,
                    'name' => 'Huyện Đông Hải',
                    'gso_id' => '960',
                    'parent_id' => 62,
                ),
            192 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 693,
                    'name' => 'Huyện Hoà Bình',
                    'gso_id' => '961',
                    'parent_id' => 62,
                ),
            193 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 694,
                    'name' => 'Thành phố Cà Mau',
                    'gso_id' => '964',
                    'parent_id' => 63,
                ),
            194 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 695,
                    'name' => 'Huyện U Minh',
                    'gso_id' => '966',
                    'parent_id' => 63,
                ),
            195 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 696,
                    'name' => 'Huyện Thới Bình',
                    'gso_id' => '967',
                    'parent_id' => 63,
                ),
            196 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 697,
                    'name' => 'Huyện Trần Văn Thời',
                    'gso_id' => '968',
                    'parent_id' => 63,
                ),
            197 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 698,
                    'name' => 'Huyện Cái Nước',
                    'gso_id' => '969',
                    'parent_id' => 63,
                ),
            198 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 699,
                    'name' => 'Huyện Đầm Dơi',
                    'gso_id' => '970',
                    'parent_id' => 63,
                ),
            199 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 700,
                    'name' => 'Huyện Năm Căn',
                    'gso_id' => '971',
                    'parent_id' => 63,
                ),
            200 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 701,
                    'name' => 'Huyện Phú Tân',
                    'gso_id' => '972',
                    'parent_id' => 63,
                ),
            201 =>
                array (
                    'grade' => config('vietnamzone.district'),
                    'id' => $current + 702,
                    'name' => 'Huyện Ngọc Hiển',
                    'gso_id' => '973',
                    'parent_id' => 63,
                ),
        ));

    }
}
