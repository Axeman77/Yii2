<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180530_113349_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login'=>$this->string(50)->notNull()->unique(),
            'password'=>$this->string(100)->notNull(),
            'first_name'=>$this->string(50),
            'last_name'=>$this->string(50),
            'email'=>$this->string(50)
        ]);

    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
