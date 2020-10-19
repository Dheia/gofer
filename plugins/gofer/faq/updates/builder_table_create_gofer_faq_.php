<?php namespace Gofer\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGoferFaq extends Migration
{
    public function up()
    {
        Schema::create('gofer_faq_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question');
            $table->text('answer');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gofer_faq_');
    }
}
