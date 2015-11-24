<?php
/**
 * Product model override
 *
 * @category   Company
 * @package    Company_Feed
 */
class Company_Feed_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    public function getProductUrl($useSid = null) {

        $params = array(
            'id' => $this->getId()
        );

        if ($useSid === null) {
            $useSid = Mage::app()->getUseSessionInUrl();
        }

        if (!$useSid) {
            $params['_nosid'] = true;
        }

        return Mage::getUrl('catalog/product/view', $params);
    }
}
