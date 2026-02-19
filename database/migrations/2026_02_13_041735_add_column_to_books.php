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
        Schema::table('books', function (Blueprint $table) {
            //title, author, star
            $table->string('title')->after('id');
            $table->string('author')->after('title');
            $table->integer('star')->after('author')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //
            $table->dropColumn('title');
            $table->dropColumn('author');
            $table->dropColumn('star');
        });
    }
};
