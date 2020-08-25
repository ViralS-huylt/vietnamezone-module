<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVietnameZoneTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vietnam_zone_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('viet_nam_zone_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->timestamps();

            $table->foreign('viet_nam_zone_id')->references('id')->on('vietnam_zones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vietnam_zone_translations');
    }
}
