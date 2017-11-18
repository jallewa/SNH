<?php
/*------------------------------------------------------------------------
# Websites: http://www.plazathemes.com/
-------------------------------------------------------------------------*/ 
class Magentothem_Themeoptions_Model_Config_Color
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'black_blue', 'label'=>Mage::helper('adminhtml')->__('Black Blue')),
            array('value'=>'black_green', 'label'=>Mage::helper('adminhtml')->__('Black Green')),
            array('value'=>'black_orange', 'label'=>Mage::helper('adminhtml')->__('Black Orange')),
            array('value'=>'black_red', 'label'=>Mage::helper('adminhtml')->__('Black Red')),
            array('value'=>'black_yellow', 'label'=>Mage::helper('adminhtml')->__('Black Yellow')),
            array('value'=>'blue_red', 'label'=>Mage::helper('adminhtml')->__('Blue Red')),
            array('value'=>'blue_yellow', 'label'=>Mage::helper('adminhtml')->__('Blue Yellow')),
            array('value'=>'green_red', 'label'=>Mage::helper('adminhtml')->__('Green Red'))
        );
    }

}
