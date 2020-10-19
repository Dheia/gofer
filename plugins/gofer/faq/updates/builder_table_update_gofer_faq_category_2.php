<?php namespace Gofer\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGoferFaqCategory2 extends Migration
{
    public function up()
    {
        Schema::table('gofer_faq_category', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('gofer_faq_category', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
