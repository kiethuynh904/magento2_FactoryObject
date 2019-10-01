<?php

namespace Smartosc\Article\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $connect = $setup;
        $setup->startSetup();
        $tableName = $setup->getTable("sm_article");
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $connect->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'article_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ]
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    256,
                    ['nullable' => false],
                    'Article Title'
                )
                ->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => false],
                    'Article Content'
                )
                ->addColumn(
                    'image',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Article Image'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                    'Article Create At'
                )
                ->addColumn(
                    'updated_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                    'Article Update At'
                )
                ->setOption('charset','utf8');
            $connect->getConnection()->createTable($table);
        }
        $connect->endSetup();
    }
}