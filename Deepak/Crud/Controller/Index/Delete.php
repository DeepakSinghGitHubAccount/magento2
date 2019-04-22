<?php

namespace Deepak\Crud\Controller\Index;


class Delete extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */

	
	protected $_pageFactory;
	protected $_request;
	protected $_BookingFactory;
	
	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
        \Deepak\Crud\Model\BookingFactory  $booking,
        \Magento\Framework\App\Request\Http $request
        
    ) {
		
        $this->_pageFactory = $pageFactory;
        $this->_BookingFactory = $booking;
        $this->_request      = $request;
        parent::__construct($context);
    }
   

    public function execute()
    {
        $id  = $this->_request->getParam('id');
        
        $booking = $this->_BookingFactory->create();
        $result = $booking->setId($id);   
        $result = $result->delete();
        return $this->_redirect('crud/index/view');


    }
}