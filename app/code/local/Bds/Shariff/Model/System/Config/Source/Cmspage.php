<?php
class Bds_Shariff_Model_System_Config_Source_Cmspage
{

    public function toOptionArray()
    {
        return $cmspage_array = Mage::getModel('cms/page')->getCollection()->toOptionArray();
    }

}
