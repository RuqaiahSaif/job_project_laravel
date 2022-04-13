<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_infos', function (Blueprint $table) {
             $table->string('name');
            $table->string('email');
            $table->integer('phone');
        $table->string('address');
$table->string('gender');
             $table->boolean("is_active")->default(1);
             });
            }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('personal_infos', function (Blueprint $table) {
          $table->dropColumn('name');
        $table->dropColumn('email');
          $table->dropColumn('email');
        $table->dropColumn('phone');
          $table->dropColumn('address');
          $table->dropColumn('gender');
        $table->dropColumn('is_active');

});
    }
};
