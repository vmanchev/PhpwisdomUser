<?php

namespace PhpwisdomUser\Controller;

use Zend\Form\Form;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function loginAction() {

        $request = $this->getRequest();

        $loginForm = $this->getServiceLocator()->get('phpwisdomuser_login_form');



        if ($request->isPost()) {
            $loginForm->setData($request->getPost());

            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            
            $user = new \PhpwisdomUser\Entity\User();
            $user->setEmail($request->getPost('username'));
            $user->setPassword($request->getPost('password'));

            $em->persist($user);
            $em->flush();
        }

        return array(
            'loginForm' => $loginForm
        );
    }

    public function registerAction() {
        return new ViewModel();
    }

}
