<?php

/**
 * Optimiseweb Getclicky Data Helper
 *
 * @package     Optimiseweb_Getclicky
 * @author      Kathir Vel (sid@optimiseweb.co.uk)
 * @copyright   Copyright (c) 2013 Optimise Web Limited
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_Getclicky_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Check if enabled
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return (bool) Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/enabled');
    }

    /**
     * Returns all system configuration data for Optimiseweb Getclicky
     *
     * @return object $data
     */
    public function getClickyData()
    {
        $data = new stdClass();
        $data->SiteId = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/site_id');
        $data->TrackerType = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/tracker_type');
        $data->AffiliateDisplay = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/affiliate_display');
        $data->AffiliateTitle = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/affiliate_title');
        $data->AffiliateLink = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/affiliate_link');
        $data->AffiliateBadge = Mage::getStoreConfig('optimisewebgetclickyconfig/getclickygeneral/affiliate_badge');

        return $data;
    }

}