<?php
namespace Phpwisdom\User\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class Login extends Form 
{
    public function __construct() {
        
        parent::__construct();
        
        $this->add(array(
            'name' => 'username',
            'options' => array(
                'label' => 'Username:'
             ),
            'attributes' => array(
                'type' => 'text'
            )
        ));
        
        $this->add(array(
            'name' => 'password',
            'options' => array(
                'label' => 'Password:'
             ),
            'attributes' => array(
                'type' => 'password'
            )
        ));        
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Login'
            )
        ));                
        
    }
}