<?php
/**
 * MGS_ResponsiveSlideshow Extension
 *
 * @category    Local
 * @package     MGS_ResponsiveSlideshow
 * @author      dungnv (dungnv@arrowhitech.com)
 * @copyright   Copyright(c) 2011 Arrowhitech Inc. (http://www.arrowhitech.com)
 *
 */

/**
 *
 * @category   Local
 * @package    MGS_ResponsiveSlideshow
 * @author     dungnv <dungnv@arrowhitech.com>
 */
 
class MGS_ResponsiveSlideshow_Model_Mysql4_Slideshow_Image extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init('aslideshow/slideshow_image', 'slideshow_image_id');
    }
}