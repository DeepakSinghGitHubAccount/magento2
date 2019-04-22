<?php

namespace Deepak\Crud\Block;
 
class Edit extends \Magento\Framework\View\Element\Template
{
	protected $_pageFactory;
	protected $_coreRegistry;
	protected $_bookingFactory; 
 
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Magento\Framework\Registry $coreRegistry,
		\Deepak\Crud\Model\BookingFactory $booking
		
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_coreRegistry = $coreRegistry;
        $this->_bookingFactory = $booking;	
        			
		return parent::__construct($context);
	}
 
	public function execute()
	{
		return $this->_pageFactory->create();
	}
 
	public function getEditRecord()
    	{
    		$id = $this->_coreRegistry->registry('booking_id');    	
        	$booking = $this->_bookingFactory->create();
            $result = $booking->load($id);        	
            $result = $result->getData();       
        	return $result;
    	}
}


?>