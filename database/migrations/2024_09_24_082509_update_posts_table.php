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
        Schema::table('posts', function (Blueprint $table) {
            // creo la colonna per la FK
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            // creo la FK sulla colonna creata
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // elimino la FK
            // doppia sintassi possibile
            // $table->dropForeign('posts_category_id_foreign');
            // sintassi inserendo il nome della colonna con la FK
            $table->dropForeign(['category_id']);
            // elimino la colonna
            $table->dropColumn('category_id');
        });
    }
};
