<?php

namespace Kaushik\Outofstock\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (version_compare($context->getVersion(), '1.0.0') < 0){

		$installer->run('CREATE TABLE outofstock (
  `outofstock_id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default "",
  `product_id` MEDIUMINT NOT NULL,
  `created_time` datetime NULL,
  PRIMARY KEY (`outofstock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
//$installer->run('\")');


		

		}

        $installer->endSetup();

    }
}