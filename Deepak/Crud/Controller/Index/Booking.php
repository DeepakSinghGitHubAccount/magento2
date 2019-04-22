<?php

namespace Deepak\Crud\Controller\Index;


class Booking extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */

	protected $_booking;
	protected $_pageFactory;
	
	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Deepak\Crud\Model\BookingFactory  $booking
        
    ) {
		$this->_booking = $booking;
		$this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
   

    public function execute()
    {
        // 1. POST request : Get booking data
		
        
		$post = (array) $this->getRequest()->getPost();
        if (!empty($post)) {
			// Retrieve your form data
		
		  $insertData = array(	
            'firstname'   => $post['firstname'],
            'lastname'    => $post['lastname'],
            'phone'       => $post['phone'],
            'bookingTime' => $post['bookingTime'],
		  );	

		  $booking = $this->_booking->create();
		  $booking->setData($insertData);

		  if($booking->save()){
			$this->messageManager->addSuccessMessage('Booking done !');
		
			}else{
				$this->messageManager->addErrorMessage('Booking Error !');
				//$this->messageManager->addErrorMessage(__('Data was not saved.'));
		
			}
		  
		

            $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
            //$resultRedirect->setUrl('/deepakSingh/magento_demo/crud/index/booking/');
			$resultRedirect->setPath('crud/index/booking');
            return $resultRedirect;
		}
		
        // 2. GET request : Render the booking page 
        return $this->_pageFactory->create();
    }
}