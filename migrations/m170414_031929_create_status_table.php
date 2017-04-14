<?php

use yii\db\Migration;

/**
 * Handles the creation of table `status`.
 */
class m170414_031929_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('status', [
            'id' => $this->primaryKey(),
            'message' => $this->text()->notNull()->defaultValue(''),
            'permissions' => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at' => $this->time(),
            'updated_at' => $this->timestamp(),
        ],$tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }

}
