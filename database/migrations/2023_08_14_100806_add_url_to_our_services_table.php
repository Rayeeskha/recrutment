<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('our_services', function (Blueprint $table) {
            $table->string('url_en')->nullable()->after('title_en');
            $table->string('url_ar')->nullable()->after('title_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_services', function (Blueprint $table) {
            //
        });
    }
};
