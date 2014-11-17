<?php

use yii\db\Schema;
use yii\db\Migration;

class m141117_102515_create_category_table extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => 'pk',
            'title' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
