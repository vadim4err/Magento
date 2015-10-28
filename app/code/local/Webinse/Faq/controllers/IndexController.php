<?php
class Webinse_Faq_IndexController extends Mage_Core_Controller_Front_Action{
    public function getAllFaqAction(){
        $collection = Mage::getModel('faq/faq')->getCollection();
        foreach($collection as $item){
            echo '<h2>'.$item->getQuestion().'</h2>';
            echo '<p>'.$item->getAnswer().'</p>';
            echo '<p>'.$item->getTimestamp().'</p>';
        }
    }
    public function addNewFaqAction(){
        $params = $this->getRequest()->getParams();
        $faqObject = Mage::getModel('faq/faq');
        $faqObject->setData($params);
        $faqObject->save();
        echo 'New record with id: '.$faqObject->getId().' successfully added.';
    }
    public function editFaqByIdAction(){
        $id = $this->getRequest()->getParam('id');
        $faqObject = Mage::getModel('faq/faq')->load($id);
        $faqObject->setQuestion('edit question');
        $faqObject->save();
        echo 'Record with id: '.$faqObject->getId().' has been changed';
    }
    public function deleteFaqByIdAction(){
        $id = $this->getRequest()->getParam('id');
        $faqObject = Mage::getModel('faq/faq')->load($id);
        $faqObject->delete();
        echo 'Record with id: '.$faqObject->getId().' has been deleted';
    }
}