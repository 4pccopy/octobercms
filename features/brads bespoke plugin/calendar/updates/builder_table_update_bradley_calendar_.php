<?php namespace Bradley\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBradleyCalendar extends Migration
{
    public function up()
    {
        Schema::table('bradley_calendar_', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('bradley_calendar_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
