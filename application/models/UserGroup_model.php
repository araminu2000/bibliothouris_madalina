<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH . 'models/Entities/User.php');
require_once(APPPATH . 'models/Entities/UserGroup.php');

/**
 * Class UserGroup_model
 */
class UserGroup_model extends MY_Model
{
    public function findAll()
    {

//        $dql = "SELECT u FROM Entity\UserGroup u ORDER BY u.id DESC";
//
//        $query = $em->createQuery($dql);
//        $query->setMaxResults(30);
//        $groups = $query->getResult();
//        var_dump($groups);

        $groupRepository = $this->em->getRepository('Entity\UserGroup');
        $groups = $groupRepository->findAll();

        return $groups;
    }

    public function addUserGroup(array $data)
    {
        $group = new Entity\UserGroup;
        $group->setName($data['name']);

        $this->em->persist($group);
        $this->em->flush();
    }

}