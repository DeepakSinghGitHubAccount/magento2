<?php

namespace Deepak\Crud\Block;

class View extends \Magento\Framework\View\Element\Template
{

    protected $_BookingFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Deepak\Crud\Model\BookingFactory $BookingFactory
    )
    {
        $this->_BookingFactory = $BookingFactory;    
        parent::__construct($context);
    }

    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
   
    
    public function getBookingCollection(){
		$booking = $this->_BookingFactory->create();
		return $booking->getCollection();
	}
}