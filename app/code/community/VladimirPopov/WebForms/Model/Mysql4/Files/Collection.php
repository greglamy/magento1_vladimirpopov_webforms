<?php
class VladimirPopov_WebForms_Model_Mysql4_Files_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init('webforms/files');
    }
}