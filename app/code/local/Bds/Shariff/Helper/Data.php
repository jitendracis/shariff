<?php

class Bds_Shariff_Helper_Data extends Mage_Core_Helper_Abstract
{   
    public function checkStore(){
	return Mage::app()->getStore(); 
    }

    public function checkStatus(){
	return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_enable', Mage::app()->getStore()); 
    }
    
    public function checkCmsPageStatus(){
	return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_cmspage_enable', Mage::app()->getStore()); 
    }
    
    public function checkCmsTopStatus(){
	return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_cmspage_top', Mage::app()->getStore()); 
    }
    
    public function checkCmsBottomStatus(){
	return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_cmspage_bottom', Mage::app()->getStore()); 
    }
    
    public function getCmsPages(){
	$pages_string = Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_cmspages', Mage::app()->getStore());
	$pages_array = explode(",", $pages_string);
	return $pages_array;
    }
    
    public function checkStaticBlockStatus(){
	return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_staticblock', Mage::app()->getStore()); 
    }
    
    public function shariffSerivcesStatus($flag){
	
	if($flag == 'status'){
	    return Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_service', Mage::app()->getStore());
	}
	if($flag == 'services'){
	    $services_data = Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_service', Mage::app()->getStore());
	    $services_array = explode("|", $services_data);
	    foreach($services_array as $service_array){
		$service_string .= '"'.$service_array.'",'; 
	    }
	    return rtrim($service_string,',');
	}
    }
    
    public function shariffLanguage($language_code){
	$language_array = explode("_", $language_code);
	if($language_array[0] != ''){
	    return $language_array[0];
	}else{
	    return 'en';
	}
    }
    
    public function checkProductStatus(){
	$productpositions = Mage::getStoreConfig('bds_shariff/bds_shariff_group/bds_shariff_products', Mage::app()->getStore());
	$productposition_array = explode(",", $productpositions);
	return $productposition_array;
    }
    
    public function shariffDesign(){
	$design = Mage::getStoreConfig('bds_shariff/bds_shariff_design/bds_shariff_design', Mage::app()->getStore());
	if($design != ''){
	    return $design;
	}else{
	    return 'default';
	}
    }
    
    public function shariffDesignPosition(){
	$designposition = Mage::getStoreConfig('bds_shariff/bds_shariff_design/bds_shariff_vertical', Mage::app()->getStore());
	if($designposition == '1'){
	    return 'verticle';
	}else{
	    return 'horizontal';
	}
    }
}