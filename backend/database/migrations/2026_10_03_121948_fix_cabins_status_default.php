<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cabins', function (Blueprint $table) {
            $table->string('status', 30)
                ->default('available')
                ->change();
        });

        DB::table('cabins')
            ->whereIn('code', ['DEMO-1', 'DEMO-2', 'DEMO-3'])
            ->where('status', '1')
            ->update([
                'status' => 'available',
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        Schema::table('cabins', function (Blueprint $table) {
            $table->string('status', 30)
                ->default('1')
                ->change();
        });

        // Os dados corrigidos não são convertidos novamente para "1".
    }
};