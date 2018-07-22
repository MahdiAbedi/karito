<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarjooTbl extends Migration
{

    /**
    * Table name: plural and _ to separate words (users, tags, ...)
    *  Columns name: singular and _ to separate words (user, tag, ...)
    * Models: singular with first letter capitalized and capitalization to separate words (User, Tag, ...)
    *Controllers: singular with capitalized first letter and capitalization to separate words followed by "Controller" (UserController, TagController, ...)
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //این فایل در 29 مرداد 1397 توسط مهدی عابدی ایجاد شد.

        Schema::create('karjooha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ارتباط با جدول کاربران');
            $table->smallInteger('birth_date')->comment('سال تولد');


            $table->string('name',50)->comment('نام و نام خانوادگی');
            $table->string('job_title',50)->comment('عنوان شغلی');
            $table->string('email',50)->comment('ایمیل');
            $table->string('ostan',50)->comment('استان محل سکونت');
            $table->string('address',100)->comment('آدرس محل سکونت')->nullable();
            $table->string('about_me',500)->comment('درباره من')->nullable();
            $table->string('skills')->comment('مهارتها');
            $table->string('salary')->comment('حقوق در خواستی');
            $table->string('phone_numbers')->comment('شماره تماسها');
            $table->string('languages')->comment('زبانهایی که بلد هستند')->nullable();
            $table->string('job_categories')->comment('دسته بندی شغلی و زمینه کاری');
            $table->string('cooperation_type')->comment('نوع همکاری')->nullable();

            
            $table->enum('status',['فعال','مشغول','مسدود'])->comment('وضعیت فعال بودن و در جستجوی کار بودن');
            $table->enum('mojarad',['مجرد','متاهل'])->comment('وضعیت تاهل');
            $table->enum('gender',['آقا','خانم'])->comment('جنسیت');
            $table->enum('madrak_tahsili',['مهم نیست','دیپلم','لیسانس','ارشد','دکترا'])->comment('حداقل مدرک تحصیلی');
            $table->enum('military_state',['پایان خدمت','معافیت موقت','معافیت دائم','مشمول'])->comment('وضعیت سربازی')->nullable();
            //$table->enum('level',['تازه کار','متخصص','مدیر','مدیر ارشد'])->comment('سطح توانایی در زمینه کاری')->nullable();
           
            $table->text('job_history')->comment('سوابق شغلی')->nullable();
            $table->text('study_history')->comment('سوابق تحصیلی')->nullable();

            $table->timestamps();
            //for ->json you must use mariaDB v2+ 
            //in mariaDB JSON is an anlias for LONGTEXT TYPE so i think it's not usefull for us

            // $table->json('phone_numbers')->comment('شماره تماسها');
            // $table->json('job_history')->comment('سوابق شغلی')->nullable();
            // $table->json('study_history')->comment('سوابق تحصیلی')->nullable();
            // $table->json('languages')->comment('زبانهایی که بلد هستند')->nullable();
            // $table->json('job_categories')->comment('دسته بندی شغلی و زمینه کاری');
            // $table->json('level')->comment('سطح توانایی در زمینه کاری')->nullable();
            // $table->json('cooperation_type')->comment('نوع همکاری')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karjooha');
    }
}
