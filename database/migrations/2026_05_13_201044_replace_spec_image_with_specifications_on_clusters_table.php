<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('clusters', function (Blueprint $table) {
            $table->dropColumn('spec_image');
            $table->json('specifications')->nullable()->after('features');
        });
    }

    public function down()
    {
        Schema::table('clusters', function (Blueprint $table) {
            $table->string('spec_image')->nullable();
            $table->dropColumn('specifications');
        });
    }
};
