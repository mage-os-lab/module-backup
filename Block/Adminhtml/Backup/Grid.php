<?php
declare(strict_types=1);

namespace MageOS\Backup\Block\Adminhtml\Backup;

use Magento\Backend\Block\Widget\Grid\Container;

class Grid extends Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_backup';
        $this->_blockGroup = 'MageOS_Backup';
        $this->_headerText = __('Backup Management');
        parent::_construct();
    }
}