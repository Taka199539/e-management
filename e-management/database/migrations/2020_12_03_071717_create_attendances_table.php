<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('date');
            $table->string('break_time');
            $table->string('out_time');
            $table->string('diary');
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
        Schema::dropIfExists('attendances');
    }
    
    public static function getAttendance($from, $until)
    {
        //created_atが20xx/xx/xx ~ 20xx/xx/xxのデータを取得
        $attendance = Attendance::whereBetween("created_at", [$from, $until])->get();

        return $attendance;
    }
}
