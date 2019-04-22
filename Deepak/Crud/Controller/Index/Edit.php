<?php

namespace Deepak\Crud\Controller\Index;
 
class Edit extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_request;
	protected $_coreRegistry; 
	protected $_BookingFactory;
 
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Magento\Framework\App\Request\Http $request,
		\Magento\Framework\Registry $coreRegistry,
		\Deepak\Crud\Model\BookingFactory  $booking
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_request = $request;		
		$this->_coreRegistry = $coreRegistry;
		$this->_BookingFactory = $booking;
		return parent::__construct($context);
	}
 
	public function execute()
	{	
		$id = $this->_request->getParam('id');

		if ($this->getRequest()->isPost()) 
		{
			$input = $this->getRequest()->getPostValue();	
			$booking = $this->_BookingFactory->create();
			$booking->load($id);
			$booking->addData($input);
			$booking->setId($id);
			

			if($booking->save()){
			$this->messageManager->addSuccessMessage('Booking done !');
		
			}else{
				$this->messageManager->addErrorMessage('Booking Error !');
				//$this->messageManager->addErrorMessage(__('Data was not saved.'));
		
			}

			return $this->_redirect('crud/index/view');

		}else{

					            
        $this->_coreRegistry->register('booking_id', $id);		
		return $this->_pageFactory->create();

		}	

        
	}
}


?>