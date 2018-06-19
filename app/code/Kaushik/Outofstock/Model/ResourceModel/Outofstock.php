<?php
namespace Kaushik\Outofstock\Model\ResourceModel;

class Outofstock extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('outofstock', 'outofstock_id');
    }
}
?>