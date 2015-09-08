<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class MY_Model
 */
class MY_Model extends CI_Model
{

    /**
     * @var $em
     */
    protected $em;

    /**
     * Class constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->em = $this->doctrine->em;
    }
}