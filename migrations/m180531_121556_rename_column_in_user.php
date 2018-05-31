<?php

use yii\db\Migration;

/**
 * Class m180531_121556_rename_column_in_user
 */
class m180531_121556_rename_column_in_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->renameColumn('user','login','username');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180531_121556_rename_column_in_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180531_121556_rename_column_in_user cannot be reverted.\n";

        return false;
    }
    */
}
