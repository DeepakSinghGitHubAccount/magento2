<?php

namespace Deepak\Crud\Block;

class Booking extends \Magento\Framework\View\Element\Template
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
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
            return $this->getUrl('crud/index/booking', ['_secure' => true]);
        
        // here controller_name is index, action is booking
    }

    public function getBookingCollection(){
		$booking = $this->_BookingFactory->create();
		return $booking->getCollection();
	}
}