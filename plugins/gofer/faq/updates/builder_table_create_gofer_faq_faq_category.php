<?php namespace Gofer\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGoferFaqFaqCategory extends Migration
{
    public function up()
    {
        Schema::create('gofer_faq_faq_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('faq_id');
            $table->integer('category_id');
            $table->primary(['faq_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gofer_faq_faq_category');
    }
}
