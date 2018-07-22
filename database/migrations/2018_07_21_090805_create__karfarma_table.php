<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarfarmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karfarmaha', function (Blueprint $table) {
            $table->increments('id')->comment('شناسه شرکت');
            $table->integer('user_id')->comment('ارتباط با جدول کاربران');

            $table->string('name',50)->comment('نام فارسی شرکت');
            $table->string('en_name',50)->comment('نام انگلیسی شرکت');
            $table->string('ostan',50)->comment('استان');
            $table->string('address',200)->comment('آدرس');
            $table->string('email')->comment('ایمیل شرکت');
            $table->string('map')->comment('موقعیت روی نقشه');
            $table->string('tedad_karkonan')->comment('تعداد کارکنان شرکت');
            $table->string('activity_type')->comment('حوزه های فعالیت شرکت');
            $table->string('phone_numbers')->comment('شماره تماسها');
            $table->string('about_us')->comment('درباره شرکت');
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
        Schema::dropIfExists('karfarmaha');
    }
}
