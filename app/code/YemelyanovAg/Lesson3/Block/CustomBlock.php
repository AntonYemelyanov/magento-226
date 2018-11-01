<?php
namespace YemelyanovAg\Lesson3\Block;


class CustomBlock extends \Magento\Framework\View\Element\Template
{
    public function getGeneratedUrlToController()
    {
        return $this->getUrl('home-work/jsonResponse/index');
    }
}






