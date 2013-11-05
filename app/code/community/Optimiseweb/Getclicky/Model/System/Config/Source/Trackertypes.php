<?php

/**
 * Optimiseweb Getclicky Model Config Trackertypes
 *
 * @package     Optimiseweb_Getclicky
 * @author      Kathir Vel (sid@optimiseweb.co.uk)
 * @copyright   Copyright (c) 2013 Optimise Web Limited
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_Getclicky_Model_System_Config_Source_Trackertypes {

    protected $_options;

    public function toOptionArray() {
        if (!$this->_options) {
            $this->_options = array(
                array(
                    'value' => 1,
                    'label' => 'Default'
                ),
                array(
                    'value' => 2,
                    'label' => 'Asynchronous'
                ),
                array(
                    'value' => 3,
                    'label' => 'Non-Javascript'
                )
            );
        }
        return $this->_options;
    }

}
