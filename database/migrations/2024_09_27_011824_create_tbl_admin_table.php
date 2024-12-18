<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_email', 100);
            $table->string('admin_password');
            $table->tinyInteger('admin_roles'); // Sửa 'tiniInteger' thành 'tinyInteger'
            $table->string('admin_name');
            $table->string('admin_phone');
            $table->string('admin_img')->nullable();
            $table->tinyInteger('admin_status'); // Sửa 'tiniInteger' thành 'tinyInteger'
            $table->string('admin_remember_token', 100)->nullable();
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
        Schema::dropIfExists('tbl_admin');
    }
};
