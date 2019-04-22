<?php
namespace Deepak\Crud\Model;
class Booking extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'deeapk_crud_booking';

	protected $_cacheTag = 'deeapk_crud_booking';

	protected $_eventPrefix = 'deeapk_crud_booking';

	protected function _construct()
	{
		$this->_init('Deepak\Crud\Model\ResourceModel\Booking');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}