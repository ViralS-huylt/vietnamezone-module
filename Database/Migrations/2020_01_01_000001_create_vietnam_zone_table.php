<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVietNamZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vietnam_zones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->default(0);
            $table->string('gso_id');
            $table->tinyInteger('grade')->default(config('vietnamzone.province'))->comment( "1 : province; 2 : district; 3 : ward");
            $table->tinyInteger('active')->default(config('vietnamzone.active'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vietnam_zones');
    }
}
