<?php namespace Gofer\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGoferFaqCategory extends Migration
{
    public function up()
    {
        Schema::create('gofer_faq_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gofer_faq_category');
    }
}
