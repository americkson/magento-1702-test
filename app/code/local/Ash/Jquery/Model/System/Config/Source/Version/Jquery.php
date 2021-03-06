<?php
/**
 * Add Jquery/Jquery UI support
 *
 * @category    Ash
 * @package     Ash_Jquery
 * @copyright   Copyright (c) 2013 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Ash_Jquery_Model_System_Config_Source_Version_Jquery
{
    /**
     * Select options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Return a dropdown menu array of values
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $this->_options = array(
            array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => '1.7.2', 'label' => '1.7.2'),
            array('value' => '1.8.3', 'label' => '1.8.3'),
            array('value' => '1.9.1', 'label' => '1.9.1'),
        );

        return $this->_options;
    }
}
