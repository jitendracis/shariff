<?php
class Bds_Shariff_Model_System_Config_Source_Design
{

    public function toOptionArray()
    {
        return array(
                     array('value' => 'standard', 'label'=>'&nbsp;&nbsp;Default&nbsp;<img src="'.Mage::getBaseUrl('skin')."frontend/base/default/images/shariff/defaultBtns.png".'"/><br/>'),
                     array('value' => 'grey', 'label'=>'&nbsp;&nbsp;Grey&nbsp;<img src="'.Mage::getBaseUrl('skin')."frontend/base/default/images/shariff/greyBtns.png".'"/><br/>'),
                     array('value' => 'white', 'label'=>'&nbsp;&nbsp;White&nbsp;<img src="'.Mage::getBaseUrl('skin')."frontend/base/default/images/shariff/whiteBtns.png".'"/><br/>'),
        );
    }

}
