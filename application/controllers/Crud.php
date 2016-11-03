<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author Yang
 */
class Crud extends Application {

    public function index() {
        
        $result = '';
        $role = $this->session->userdata('userrole');
        
        if ($role == 'user') {
             $result = "Access denied.";
        } else {
            $result = "Welcome!";
        }

        $this->data['content'] = $result;
        $this->render();
    }

}
