<?php

namespace Deepak\Crud\Controller\Index;


class View extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */

	
	protected $_pageFactory;
	
	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
		
        
    ) {
		
		$this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
   

    public function execute()
    {
        
        return $this->_pageFactory->create();
    }
}