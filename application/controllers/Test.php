<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserGroup_model', 'userGroup');
    }

    public function index()
    {

        $groups = $this->userGroup->findAll();

        $this->load->view('admin/showGroups', array(
            'groups' => $groups,
        ));
    }


}
