<?php namespace Acme\BookShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePublishersTable extends Migration
{

    public function up()
    {
        Schema::create('acme_bookshop_publishers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_bookshop_publishers');
    }

}
