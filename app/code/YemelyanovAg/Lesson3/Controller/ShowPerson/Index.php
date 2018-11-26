<?php
namespace YemelyanovAg\Lesson3\Controller\ShowPerson;
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->getBlock('showperson')->setFirstName('Anton');
        $this->_view->getLayout()->getBlock('showperson')->setLastname('Yemelyanov');
        $this->_view->renderLayout();
    }
}
