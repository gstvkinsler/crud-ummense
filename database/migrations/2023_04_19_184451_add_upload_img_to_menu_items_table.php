<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->text('upload_img')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('menu_items', function (Blueprint $table) {
            //
        });
    }
};
