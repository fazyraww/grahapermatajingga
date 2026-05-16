<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'is_admin')) {
            return;
        }

        $hasAdmin = DB::table('users')
            ->where('is_admin', true)
            ->exists();

        if ($hasAdmin) {
            return;
        }

        DB::table('users')->update([
            'is_admin' => true,
        ]);
    }

    public function down(): void
    {
        //
    }
};
