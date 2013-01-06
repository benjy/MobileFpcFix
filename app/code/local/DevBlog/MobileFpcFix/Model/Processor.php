<?php
/**
 * Add the theme key onto the full page cache url.
 *
 * @category   DevBlog
 * @package    DevBlog_MobileFpcFix
 * @author     Ben Dougherty <ben@devblog.com.au>
 */
class DevBlog_MobileFpcFix_Model_Processor extends Enterprise_PageCache_Model_Processor
{
    /**
     * Populate request ids
     * @return Enterprise_PageCache_Model_Processor
     */
    protected function _createRequestIds()
    {
        // We specifically call our parent method first so it can do most of th work in creating the
        // uri for FPC.
        parent::_createRequestIds();

        $uri = $this->_getFullPageUrl();

        // If caching is enabled we append the theme to the URI.
        if ($uri) {
            $theme = Mage::getSingleton('core/design_package')->getTheme('frontend');

            // Update the requestId and the requestCacheId.
            $this->_requestId .= $theme;
            $this->_requestCacheId  = $this->prepareCacheId($this->_requestId);
        }

        return $this;
    }
}
