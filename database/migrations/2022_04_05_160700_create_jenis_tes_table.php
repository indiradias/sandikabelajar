<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('jenis_tes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tes');
            $table->timestamps();
        });

        DB::table('jenis_tes')->insert([
            'id' =>'1',
            'nama_tes'=>'tes_wawancara'

        ]);

        DB::table('jenis_tes')->insert([
            'id' =>'2',
            'nama_tes'=>'tes_tulis'

        ]);

        DB::table('jenis_tes')->insert([
            'id' =>'3',
            'nama_tes'=>'tes_mengaji'

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_tes');
    }
};
