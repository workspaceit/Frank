<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22-Jun-15
 * Time: 2:34 PM
 */
require_once dirname(__FILE__).'/../C_BASE.php';
class C_Profile extends C_BASE{
    private $u_id;
    function __construct($u_id)
    {
        parent::__construct();
        $this->u_id=$u_id;
    }
    function updateProfileAuthintication($point){
        $this->CI->load->model('m_user_trait_final_values');
        $profileAuthincationPoint = 0;
        switch($point){
            case 1:
                $profileAuthincationPoint = 1;
                break;
            case -1;
                $profileAuthincationPoint = -1;
                break;
        }
        if($profileAuthincationPoint!=0)
            return $this->CI->m_user_trait_final_values->increase_profile_verification($this->u_id,$profileAuthincationPoint);
        return false;
    }
}