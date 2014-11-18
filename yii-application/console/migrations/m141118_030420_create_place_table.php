<?php

use yii\db\Schema;
use yii\db\Migration;

class m141118_030420_create_place_table extends Migration
{
    public function up()
    {
      $this->createTable('place', [
        'id' => 'pk',
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'city_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'submitter' => Schema::TYPE_INTEGER . ' NOT NULL',
        'lng' => Schema::TYPE_FLOAT . ' NOT NULL',
        'lat' => Schema::TYPE_FLOAT . ' NOT NULL',
        'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        'updated_at' => Schema::TYPE_DATETIME . ' NULL',
        'del_flg' => Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0'
      ]);
    }

    public function down()
    {
      $this->dropTable('place');
    }
}
