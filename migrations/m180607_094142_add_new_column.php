<?php

use yii\db\Migration;

/**
 * Class m180607_094142_add_new_column
 */
class m180607_094142_add_new_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('task', 'create_at', $this->dateTime());
        $this->addColumn('task', 'update_at', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180607_094142_add_new_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180607_094142_add_new_column cannot be reverted.\n";

        return false;
    }
    */
}
