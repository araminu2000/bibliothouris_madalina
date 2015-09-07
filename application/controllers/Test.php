<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
        var_dump($this->doctrine->em);


//        $group = new Entity\UserGroup;
//        $group->setName('Users');
//        $user = new Entity\User;
//        $user->setUsername('wildlyinaccurate');
//        $user->setPassword('Passw0rd');
//        $user->setEmail('wildlyinaccurate@gmail.com');
//        $user->setGroup($group);
        // When you have set up your database, you can persist these entities:
        // $em = $this->doctrine->em;
        // $em->persist($group);
        // $em->persist($user);
        // $em->flush();
        $this->load->view('welcome_message', array(
//            'user' => $user,
//            'group' => $group,
        ));
	}


}
