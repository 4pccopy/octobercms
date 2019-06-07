<?php namespace Bradley\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBradleyCalendar extends Migration
{
    public function up()
    {
        Schema::create('bradley_calendar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->date('date');
            $table->time('time');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bradley_calendar_');
    }
}
