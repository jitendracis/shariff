<?php

class Bds_Shariff_Block_Adminhtml_System_Config_Product extends Mage_Adminhtml_Block_System_Config_Form_Field{
    const CONFIG_PATH = 'bds_shariff/bds_shariff_group/bds_shariff_products'; //put here the full path from the config to your element
    protected $_values = null;
    protected function _construct()
    {
        $this->setTemplate('shariff/system/config/product.phtml');
        return parent::_construct();
    }
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setNamePrefix($element->getName())
            ->setHtmlId($element->getHtmlId());
        return $this->_toHtml();
    }
    public function getValues(){
        $values = array();
        //get the available values (use the source model from your question)
        foreach (Mage::getSingleton('shariff/system_config_source_product')->toOptionArray() as $value){
            $values[$value['value']] = $value['label'];
        }
        return $values;
    }
    public function getIsChecked($name){
        return in_array($name, $this->getCheckedValues());
    }
    public function getCheckedValues(){
        if (is_null($this->_values)){
            $data = $this->getConfigData();
            if (isset($data[self::CONFIG_PATH])){
                $data = $data[self::CONFIG_PATH];
            }
            else{
                $data = '';
            }
            $this->_values = explode(',', $data);
        }
        return $this->_values;
    }
}
?>