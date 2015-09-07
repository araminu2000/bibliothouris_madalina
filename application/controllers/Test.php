<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'models/Entities/User.php');
require_once(APPPATH . 'models/Entities/UserGroup.php');

use Entity\User;

class Test extends CI_Controller {

	public function index()
	{
        $this->load->database();
        $query = $this->db->query('SHOW TABLES');

//        var_dump($query);

//        var_dump($this->doctrine->em);



        $group = new Entity\UserGroup;
        $group->setName('Users');
        $user = new User();
        $user->setUsername('astaeusername');
        $user->setPassword('Passw0rd');
        $user->setEmail('test@gmail.com');

        $user->setGroup($group);

        echo $user->getUsername();
        echo $user->getPassword();
        echo $user->getGroup()->getName();;
        // When you have set up your database, you can persist these entities:
         $em = $this->doctrine->em;
         $em->persist($group);
         $em->persist($user);
         $em->flush();
        $this->load->view('welcome_message', array(
//            'user' => $user,
//            'group' => $group,
        ));
	}


}
