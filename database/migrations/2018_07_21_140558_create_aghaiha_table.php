<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAghaihaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agahiha', function (Blueprint $table) {
            $table->increments('id')->comment('شناسه آگهی');
            $table->string('job_title',50)->comment('عنوان شغلی');
            $table->string('job_category')->comment('دسته بندی شغلی');
            $table->string('cooperation_type')->comment('نوع همکاری');
            $table->string('ostan',100)->comment('شهر یا استان');
            $table->string('salary',50)->comment('میزان حقوق قابل پرداخت');
            $table->string('description')->comment('شرح موقعیت شغلی');
            $table->string('military_status',60)->comment('وضعیت سربازی');
            $table->string('reshtehaye_mortabet')->comment('رشته های تحصیلی مرتبط');
            
            $table->enum('madrak_tahsili',['مهم نیست','دیپلم','لیسانس','ارشد','دکترا'])->comment('حداقل مدرک تحصیلی');
            $table->enum('sabeghe_kar',['مهم نیست','زیر دو سال','بین سه تا شش سال','بالای هفت سال'])->comment('حداقل سابقه کار');
            $table->enum('status',['منتشر شده','معلق'])->comment('وضعیت آگهی');
            $table->enum('payment_status',['پرداخت شده','پرداخت نشده'])->comment('وضعیت پرداخت');
            $table->enum('gender',['مهم نیست','آقا','خانم'])->comment('جنسیت');
            
            $table->integer('viewed')->comment('تعداد بازدیدها');
            $table->smallInteger('applied')->comment('تعداد اعلام آمادگی کنندگان');
            $table->integer('shared')->comment('تعداد به اشتراک گذاری ها');

            $table->time('publish_time')->comment('زمان انتشار');
            $table->time('expire_time')->comment('زمان انقضاء');
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
        Schema::dropIfExists('agahiha');
    }
}
