<?php
class Webinse_Faq_IndexController extends Mage_Core_Controller_Front_Action{
    /**
     * This method has been created to show output to screen
     * for example you may visit http://localhost/frontName/index/index
     * frontName you must set in etc/config.xml
     */
    public function indexAction(){
        echo 'Webinse Test Module';
    }

    /**
     * This method has been created to show output to screen
     * you may visit http://localhost/frontName/index/index2
     */
    public function index2Action(){
        $string = 'Webinse Test Module';
        $this->getResponse()->setBody($string);
    }

    /**
     * Use this url to send paramets http://localhost/frontName/index/params?foo=bar&foo2=bar2
     */
    public function paramsAction(){
        /**
         * here we can get params which we send in url
         */
        $params = $this->getRequest()->getParams();
        echo '<dl>';
        foreach ($params as $key=>$value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dt><strong>Value: </strong>'.$value.'</dt>';
        }
        echo '</dl>';
    }

    /**
     * use this url to send one parameter http://localhost/frontName/index/getCustomerById/id/1
     */
    public function getCustomerByIdAction(){
        /**
         * we can retrieve one param from url by using getReguest->getParam('key')
         */
        $id = $this->getRequest()->getParam('id');
        $customerObject = Mage::getModel('customer/customer')->load($id);
        var_dump($customerObject->getData());
    }
}