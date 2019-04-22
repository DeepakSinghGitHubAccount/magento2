<?php
namespace Deepak\Crud\Model\ResourceModel\Booking;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'booking_id';
	protected $_eventPrefix = 'deeapk_crud_booking';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Deepak\Crud\Model\Booking', 'Deepak\Crud\Model\ResourceModel\Booking');
	}

}