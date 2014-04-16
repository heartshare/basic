<?php

class m140416_053454_init extends CDbMigration
{
    public function safeUp()
    {
        $sqlFiles = [
            'yincart-basic-data.1.1.0rc16.sql',
        ];
        foreach ($sqlFiles as $sqlFile) {
            $sql = file_get_contents(__DIR__ . '/../../data/' . $sqlFile);
            $this->execute($sql);
        }

    }

    public function safeDown()
    {
    }
}