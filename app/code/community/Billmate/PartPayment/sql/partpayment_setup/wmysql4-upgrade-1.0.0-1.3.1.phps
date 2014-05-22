<?php
$installer = $this;
/* @var $installer Mage_Catalog_Model_Entity_Setup */
$installer->startSetup();
$installer->run("ALTER TABLE {$this->getTable('sales_flat_quote_address')} ADD COLUMN `person_number` VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL AFTER `fax`");

$installer->run("ALTER TABLE `{$this->getTable('sales_flat_order_address')}` ADD COLUMN `person_number` VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL AFTER `fax`");
$installer->endSetup();

