<?php

class c_gossip_integrity {

    private $integrity_value;

    function __construct(){

        $this->integrity_value=0;

    }

    function set_integrity($traits_queue_data)
    {
        $traits_queue=json_decode($traits_queue_data);
        $total = 0;

        for($i=0;$i<sizeof($traits_queue);$i++){
            $diff = $traits_queue[$i]->real_point - $traits_queue[$i]->fake_point;
            $diff = ($diff<0)?$diff*-1:$diff;
            $temp=(1-(($diff)/200))*100;

            $total = $total + $temp;
        }

        $total = $total / sizeof($traits_queue);

        $total = ($total>100) ? 100: $total;

        $this->integrity_value = $total;
    }

    function get_integrity()
    {
        return $this->integrity_value;
    }

}