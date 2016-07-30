<?php
class Bds_Shariff_Model_System_Config_Source_Verticle
{

    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('No')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Yes')),
        );
    }

}
