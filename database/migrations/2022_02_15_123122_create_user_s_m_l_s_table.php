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
        Schema::create('user_s_m_l_s', function (Blueprint $table) {
            $table->id();
            $table->integer("userBasicId");
            $table->string("mediaName")->nullable();
            $table->string("mediaLinks")->unique();
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
        Schema::dropIfExists('user_s_m_l_s');
    }
};
