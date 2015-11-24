<?php

/**
 * Product controller override
 *
 * @category   Company
 * @package    Company_Feed
 */

require_once 'Mage/Catalog/controllers/ProductController.php';
class Company_Feed_Catalog_ProductController extends Mage_Catalog_ProductController
{
    public function feedAction() {
        $id = $this->getRequest()->getParam('id');
        $product = Mage::getModel('catalog/product')->load($id);

        if ($product->getId()) {
            $fields = array(
                'entity_id',
                'sku',
                'name',
                'description'
            );

            $xml = $product->toXml($fields);

            $this->getResponse()
                ->clearHeaders()
                ->setHeader('Content-Type', 'text/xml')
                ->setBody($xml);
            return $this;
        }

        $this->_forward('noRoute');
    }
}
