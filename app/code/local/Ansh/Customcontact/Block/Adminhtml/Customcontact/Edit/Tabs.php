<?php

class Ansh_Customcontact_Block_Adminhtml_Customcontact_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct() {
        parent::__construct();
        $this->setId('customcontact_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('customcontact')->__('Contact Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab('form_section', array(
            'label' => Mage::helper('customcontact')->__('Contact Information'),
            'title' => Mage::helper('customcontact')->__('Contact Information'),
            'content' => $this->getLayout()->createBlock('customcontact/adminhtml_customcontact_edit_tab_form')->toHtml(),
        ));

        return parent::_beforeToHtml();
    }

}
