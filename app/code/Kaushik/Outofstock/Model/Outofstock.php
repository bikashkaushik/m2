<?php
namespace Kaushik\Outofstock\Model;

class Outofstock extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Kaushik\Outofstock\Model\ResourceModel\Outofstock');
    }
}
?>