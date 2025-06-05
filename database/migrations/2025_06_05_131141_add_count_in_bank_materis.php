<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bank_materis', function (Blueprint $table) {
            $table->integer('download_count')->default(0)->after('tanggal_publikasi');
            $table->integer('view_count')->default(0)->after('download_count');
            $table->integer('like_count')->default(0)->after('view_count');
        });
    }

    public function down()
    {
        Schema::table('bank_materis', function (Blueprint $table) {
            $table->dropColumn(['download_count', 'view_count', 'like_count']);
        });
    }
};