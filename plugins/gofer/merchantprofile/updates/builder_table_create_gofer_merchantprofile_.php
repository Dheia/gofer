<?php namespace Gofer\MerchantProfile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGoferMerchantprofile extends Migration
{
    public function up()
    {
        Schema::create('gofer_merchantprofile_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->text('desciption')->nullable();
            $table->text('address')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gofer_merchantprofile_');
    }
}
