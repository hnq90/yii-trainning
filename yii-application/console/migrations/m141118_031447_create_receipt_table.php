<?php

use yii\db\Schema;
use yii\db\Migration;

class m141118_031447_create_receipt_table extends Migration
{
    public function up()
    {
      $this->createTable('receipt', [
        'id' => 'pk',
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'price' => Schema::TYPE_BIGINT . ' NOT NULL',
        'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        'updated_at' => Schema::TYPE_DATETIME . ' NULL',
        'del_flg' => Schema::TYPE_BOOLEAN . ' NOT NULL DEFAULT 0'
      ]);
    }

    public function down()
    {
        $this->dropTable('receipt');
    }
}
