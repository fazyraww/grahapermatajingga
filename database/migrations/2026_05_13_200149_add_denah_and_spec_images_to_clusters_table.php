<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('clusters', function (Blueprint $table) {
            $table->string('denah_image')->nullable()->after('image');
            $table->string('spec_image')->nullable()->after('denah_image');
        });
    }

    public function down()
    {
        Schema::table('clusters', function (Blueprint $table) {
            $table->dropColumn(['denah_image', 'spec_image']);
        });
    }
};
