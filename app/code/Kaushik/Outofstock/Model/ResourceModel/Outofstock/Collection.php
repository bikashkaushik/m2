<?php

namespace Kaushik\Outofstock\Model\ResourceModel\Outofstock;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Kaushik\Outofstock\Model\Outofstock', 'Kaushik\Outofstock\Model\ResourceModel\Outofstock');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>