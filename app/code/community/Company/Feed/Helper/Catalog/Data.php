<?php
/**
 * Product url model override
 *
 * @category   Company
 * @package    Company_Feed
 */
class Company_Feed_Helper_Catalog_Data extends Mage_Catalog_Helper_Data
{
    public function isCategory() {
        $fullActionName = Mage::app()->getFrontController()->getAction()->getFullActionName();
        if ($fullActionName == 'catalog_category_view') {
            return 1;
        }
        return 0;
    }
}
