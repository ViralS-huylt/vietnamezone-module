<?php

namespace Modules\VietNamZone\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Database\Seeders\Traits\DisableForeignKeys;
use Modules\Core\Entities\Label;

class LabelTableSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->disableForeignKeys();
        $module = 'vietnamzone';
        Label::where('module', $module)->delete();

        $labels = [
            ["key" => "list_province", "vi" => ["value" => "Danh sách tỉnh/thành phố"], "en" => ["value" => "List province"]],
            ["key" => "province", "vi" => ["value" => "Tỉnh/thành phố"], "en" => ["value" => "Province"]],
            ["key" => "code_province", "vi" => ["value" => "Mã khu vực"], "en" => ["value" => "Code"]],
            ["key" => "name_province", "vi" => ["value" => "Tên "], "en" => ["value" => "Name "]],
            ["key" => "active_province", "vi" => ["value" => "Hoạt động"], "en" => ["value" => "Active"]],
            ["key" => "inactive_province", "vi" => ["value" => "không Hoạt động"], "en" => ["value" => "Inactive"]],
        ];

        foreach ($labels as $label) {
            $label['module'] = $module;
            Label::create($label);
        }

        $this->enableForeignKeys();
    }
}
