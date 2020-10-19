<?php namespace Gofer\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGoferFaqCategory extends Migration
{
    public function up()
    {
        Schema::table('gofer_faq_category', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('gofer_faq_category', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
