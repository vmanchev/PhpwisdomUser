<?php
namespace Phpwisdom\User\Controller;

use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction() {
        return new ViewModel();
    }
    
    public function loginAction(){
        
        $loginForm = $this->getServiceLocator()->get('phpwisdomuser_login_form');
        
        return array(
            'loginForm' => $loginForm
        );
    }
    
    public function registerAction(){
        return new ViewModel();
    }    
}
