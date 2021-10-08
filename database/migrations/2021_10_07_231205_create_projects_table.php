<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     // ID -> autoincrement
    // Name -> string
    // Short Name -> string
    // Slug -> Buat field name jadi url friendly slug, misal : "Halo halo bandung" jadi
    // "halo-halo-bandung", note : gunakan fungsi2 built in Laravel
    // Starting Date -> Date
    // Year Start -> Number
    // Year End -> Number
    // Reporting Month -> Number
    // Team Group Name -> string
    // Project Documents -> upload file doc/docx/xls/xlsx/pdf (Gunakan Laravel
    // Spatie MediaLibrary github) (di filter/validasi ketika upload)

    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('shortname');
            $table->string('slug');
            $table->date('startingdate');
            $table->integer('yearstart');
            $table->integer('yearend');
            $table->string('teamgroupname');
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
        Schema::dropIfExists('projects');
    }
}
