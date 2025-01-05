<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('full_name')->after('user_id');
        });

        DB::statement('UPDATE contacts SET full_name = name');

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('name')->after('user_id');
        });

        DB::statement('UPDATE contacts SET name = full_name');

        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('full_name');
        });
    }
};
