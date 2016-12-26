<?php

use yii\db\Migration;

class m161226_200048_enhance_user_table extends Migration
{
    public function up()
    {

    }

    public function down()
    {
        echo "m161226_200048_ehnance_user_table cannot be reverted.\n";

        $this->renameColumn('user', 'name', 'first_name');
        $this->alterColumn('user', 'first_name', SCHEMA::TYPE_STRING);
        $this->addColumn('user', 'last_name', SCHEMA::TYPE_STRING);
        $this->alterColumn('user', 'email', SCHEMA::TYPE_STRING . ' NOT NULL');
        $this->createIndex('user_unique_email', 'user', 'email', true);

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
