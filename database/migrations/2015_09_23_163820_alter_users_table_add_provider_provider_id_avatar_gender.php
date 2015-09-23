<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddProviderProviderIdAvatarGender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table){
        $table->string('avatar', 2083)->nullable()->after('last_name');
        $table->string('gender')->nullable()->after('last_name');
        $table->string('provider')->nullable();
        $table->string('provider_id')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function($table){
        $table->dropColumn('avatar');
        $table->dropColumn('gender');
        $table->dropColumn('provider');
        $table->dropColumn('provider_id');
      });
    }
}
