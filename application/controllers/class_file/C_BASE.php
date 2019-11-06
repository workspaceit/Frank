<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04-Jun-15
 * Time: 4:03 PM
 */

class C_BASE {
    protected $pageData;
    protected $CI;
    function __construct()
    {
        $this->pageData = array();
        $this->CI = &get_instance();
    }
}