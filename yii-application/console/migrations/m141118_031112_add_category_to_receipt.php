<?php

use yii\db\Schema;
use yii\db\Migration;

class m141118_031112_add_category_to_receipt extends Migration
{
    public function up()
    {
        $this->addColumn('receipt', 'category_id', Schema::TYPE_INTEGER);
    }

    public function down()
    {
        $this->dropColumn('receipt', 'category_id');
    }
}
