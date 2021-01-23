<?php

namespace Magenteiro\ProductAttribute\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**  @var \Magento\Eav\Setup\EavSetupFactory */
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup'=> $setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'shape',
            [
                'type'=>'varchar',
                'backend'=>'',
                'frontend'=>'',
                'label'=>'Shape',
                'input'=>'text',
                'class'=>'',
                'source'=>'',
                'global'=>1,
                'visible'=>true,
                'required'=>false,
                'user_defined'=> true, 
                'default'=>null,
                'searchble'=> false,
                'filterable'=> false, 
                'comparable'=> false, 
                'visible_on_front'=>true,
                'used_in_product_listing'=>false,
                'unique'=>false,
                'apply_to'=>'simple',
                'system'=>0,
                'group'=>'General'

            ]
        );
        $setup->endSetup();
    }
}