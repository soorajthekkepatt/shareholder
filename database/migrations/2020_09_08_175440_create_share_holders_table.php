<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_holders', function (Blueprint $table) {
            $table->id();
            $table->string('sharehold_name');
            $table->string('sharholdemail');
            $table->string('sharehold_mob');
            $table->string('sharehold_country');
            $table->string('sharehold_area');
            $table->string('sharehold_unit');
            $table->string('sharehold_emirates');
            $table->text('sharehold_add');
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
        Schema::dropIfExists('share_holders');
    }
}
