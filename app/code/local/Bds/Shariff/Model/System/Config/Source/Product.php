<?php
class Bds_Shariff_Model_System_Config_Source_Product
{

    public function toOptionArray()
    {
        return array('position' => 
                array('value' => 'top', 'label'=>Mage::helper('adminhtml')->__('Top')),
                array('value' => 'bottom', 'label'=>Mage::helper('adminhtml')->__('Bottom'))
        );
    }

}
