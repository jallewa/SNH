<?php
class Magentothem_Bestsellerproduct_Block_Bestsellerproduct extends Mage_Catalog_Block_Product_Abstract
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
    public function getBestsellerproduct()     
    { 
        if (!$this->hasData('bestsellerproduct')) {
            $this->setData('bestsellerproduct', Mage::registry('bestsellerproduct'));
        }
        return $this->getData('bestsellerproduct');
    }
	public function getProducts()
    {
    	$storeId    = Mage::app()->getStore()->getId();
    	$products = Mage::getResourceModel('reports/product_collection')
    		->addOrderedQty()
            ->addAttributeToSelect('*')
			->addMinimalPrice()
			->addUrlRewrite()
			->addTaxPercents()
            ->addAttributeToSelect(array('name', 'price', 'small_image'))
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->setOrder('ordered_qty', 'desc');		
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);
        $products->setPageSize($this->getConfig('qty'))->setCurPage(1);
        $this->setProductCollection($products);
    }
	public function getConfig($att) 
	{
		$config = Mage::getStoreConfig('bestsellerproduct');
		if (isset($config['bestsellerproduct_config']) ) {
			$value = $config['bestsellerproduct_config'][$att];
			return $value;
		} else {
			throw new Exception($att.' value not set');
		}
	}
}