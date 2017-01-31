<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Sphinx Search Ultimate
 * @version   2.3.2
 * @build     1228
 * @copyright Copyright (C) 2015 Mirasvit (http://mirasvit.com/)
 */



class Mirasvit_SearchIndex_Model_Index_Mage_Catalog_Attribute_Indexer extends Mirasvit_SearchIndex_Model_Indexer_Abstract
{
    protected function _getSearchableEntities($storeId, $entityIds, $lastEntityId, $limit = 100)
    {
        if ($lastEntityId) {
            return new Varien_Data_Collection();
        }

        $attributeCode = $this->getIndexModel()->getProperty('attribute');
        $attribute = Mage::getSingleton('eav/config')->getAttribute(Mage_Catalog_Model_Product::ENTITY, $attributeCode);
        $options = $attribute->getSource()->getAllOptions(false);

        $collection = new Varien_Data_Collection();
        foreach ($options as $option) {
            $obj = new Varien_Object();
            $obj->addData($option);
            $collection->addItem($obj);
        }

        return $collection;
    }
}
