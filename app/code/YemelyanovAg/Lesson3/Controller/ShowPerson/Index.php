<?php
namespace YemelyanovAg\Lesson3\Controller\ShowPerson;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {

        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}





  /*   {
         $geethubText = "You're so a lucky man! This is really your Day";

         $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
         $resultPage->getLayout()->getBlock('custom.lesson.page.result')->setGeethubText($geethubText);
         return $resultPage;
     }

   */