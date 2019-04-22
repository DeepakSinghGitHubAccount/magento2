<?php
namespace Deepak\Crud\Model\ResourceModel;


class Booking extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('deeapk_crud_booking', 'booking_id');
	}
	
}