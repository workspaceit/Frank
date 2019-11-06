<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04-Jun-15
 * Time: 4:02 PM
 */
require_once dirname(__FILE__).'/../C_BASE.php';

class C_Aggrigates extends C_BASE{
    private $userTrait;
    private $userTraitIndex;
    public $isSmallBar = false;
    private $cssCls;
    function __construct(){
        parent::__construct();
        $this->userTraitIndex = array(  "appearance",
                                        "respect",
                                        "skills",
                                        "traits",
                                        "virtue");


        $this->userTrait = array();
        $this->userTrait['appearance']["cat_name"] = "appearance";
        $this->userTrait['appearance']["weightValue"]= 10;
        $this->userTrait['appearance']["weight"]= 10/100;
        $this->userTrait['appearance']["data"] = new ArrayObject();
        $this->userTrait['appearance']["avg_score"]["real"] = 0;
        $this->userTrait['appearance']["avg_score"]["fake"] = 0;

        $this->userTrait['respect']["cat_name"] = "respect";
        $this->userTrait['respect']["weightValue"]= 20;
        $this->userTrait['respect']["weight"]= 20/100;
        $this->userTrait['respect']["data"] = new  ArrayObject();
        $this->userTrait['respect']["avg_score"]["real"] = 0;
        $this->userTrait['respect']["avg_score"]["fake"] = 0;

        $this->userTrait['skills']["cat_name"] = "skills";
        $this->userTrait['skills']["weightValue"]= 20;
        $this->userTrait['skills']["weight"]= 20/100;
        $this->userTrait['skills']["data"] = new  ArrayObject();
        $this->userTrait['skills']["avg_score"]["real"] = 0;
        $this->userTrait['skills']["avg_score"]["fake"] = 0;

        $this->userTrait['traits']["cat_name"] = "traits";
        $this->userTrait['traits']["weightValue"]= 20;
        $this->userTrait['traits']["weight"]= 20/100;
        $this->userTrait['traits']["data"] = new  ArrayObject();
        $this->userTrait['traits']["avg_score"]["real"] = 0;
        $this->userTrait['traits']["avg_score"]["fake"] = 0;

        $this->userTrait['virtue']["cat_name"] = "virtue";
        $this->userTrait['virtue']["weightValue"]= 30;
        $this->userTrait['virtue']["weight"]= 30/100;
        $this->userTrait['virtue']["data"] = new  ArrayObject();
        $this->userTrait['virtue']["avg_score"]["real"] = 0;
        $this->userTrait['virtue']["avg_score"]["fake"] = 0;



    }
    function getReputation($u_id){

        $this->initializeUserTrait($u_id);
        $this->initiateAvg();
        $reputation = 0;
        $totalWeigtVal = 0;
        $remainingWeight = 0;
        for($i=0;$i<5;$i++){
            if(sizeof($this->userTrait[$this->userTraitIndex[$i]]["data"])>0){
                $totalWeigtVal += $this->userTrait[$this->userTraitIndex[$i]]["weightValue"];
            }
        }
        $remainingWeight = ($totalWeigtVal==0)?0:100 / $totalWeigtVal;
        for($i=0;$i<5;$i++){
            $avg = $this->userTrait[$this->userTraitIndex[$i]]["avg_score"]["real"];
            $weight = $this->userTrait[$this->userTraitIndex[$i]]["weight"]*$remainingWeight;
            $reputation += $avg*$weight;
        }



        return $reputation;
    }
    private  function convertToPositiveRange($val){
        // Converting -100 to 100 In 0 to 200
        $val = 100+$val;
        $val = ($val<0)?$val*-1:$val;
        return $val;
    }
    private function initializeUserTrait($u_id){
        // Initialize the '$ths->u_id' before using this function
        $this->CI->load->model("m_trait_users");
        $traitData  = $this->CI->m_trait_users->get_all_by_user_id($u_id);
        $nowCatStr = "";
        foreach($traitData as $traitRow){
            if($nowCatStr != $traitRow->category ){
                $nowCatStr =$traitRow->category;
                continue;
            }
        }

        foreach($traitData as $traitRow){
            $this->CI->load->model('m_trait_users_gossip');
           // echo " Before ".$traitRow->trait_categories_id." </br>";
            if(!$this->CI->m_trait_users_gossip->isRecevied($u_id,$traitRow->trait_categories_id)){
                continue;
            }
           // echo " After ".$traitRow->id." </br>";
            switch (strtolower($traitRow->category)) {
                case $this->userTrait['appearance']["cat_name"]:
                    $this->userTrait['appearance']["data"]->append($traitRow);
                    break;
                case $this->userTrait['respect']["cat_name"]:
                    $this->userTrait['respect']["data"]->append($traitRow);
                    break;
                case $this->userTrait['skills']["cat_name"]:
                    $this->userTrait['skills']["data"]->append($traitRow);
                    break;
                case $this->userTrait['traits']["cat_name"]:
                    $this->userTrait['traits']["data"]->append($traitRow);
                    break;
                case $this->userTrait['virtue']["cat_name"]:
                    $this->userTrait['virtue']["data"]->append($traitRow);
                    break;
            }
        }
    }
    public function updateReputation($u_id){
        $this->CI->load->model('m_user_trait_final_values');
        $update_data_array['reputation'] = $this->getReputation($u_id);
        $this->CI->m_user_trait_final_values->update_row_data($u_id,$update_data_array);
    }

    public function updateRank(){
        $this->CI->load->model('m_user_trait_final_values');
        $this->CI->m_user_trait_final_values->set_rank();
    }

    private function initiateAvg(){
        $i = 0;
        for($i=0;$i<5;$i++){
            $sumOftraitValue = 0;
            foreach($this->userTrait[$this->userTraitIndex[$i]]['data'] as $traitData){
                $sumOftraitValue += $traitData->sub_category_avg_point;
            }
            if(sizeof($this->userTrait[$this->userTraitIndex[$i]]['data'])>0){
                $this->userTrait[$this->userTraitIndex[$i]]["avg_score"]["real"] = intval($sumOftraitValue / sizeof($this->userTrait[$this->userTraitIndex[$i]]['data']));
            }
        }
    }
    public function getAggrigatesInPercentages($u_id){

        $this->CI->load->model("m_user_login");
        $this->CI->load->model("m_user_trait_final_values");
        $this->CI->load->model("m_gossip_main");
        $this->cssCls =($this->isSmallBar)? "i_bar_pink":"i_bar_l_p";

        $userAggrigates=array();

        $userAggrigates['rankPercantage']=0;
        $userAggrigates['reputationPercantage']=0;
        $userAggrigates['popularityPercantage']=0;
        $gossipCount = 0;
        $gossipCount =  $this->CI->m_gossip_main->get_total_gossip_count_by_target_id($u_id);
        $gossipCount +=  $this->CI->m_gossip_main->get_total_gossip_count_by_gossipper_id($u_id);

        $aggrigates = $this->CI->m_user_trait_final_values->get_aggrigates_by_user_id($u_id);
        $rankPosition = $this->CI->m_user_trait_final_values->get_rank_by_user_id($u_id);
        $totalUser =  $this->CI->m_user_login->getTotalUser();



        $max_popularity = $this->CI->m_user_trait_final_values->get_max_popularity();
        $max_reputation =  $this->CI->m_user_trait_final_values->get_max_reputation();

        $reputationPosition = $this->CI->m_user_trait_final_values->get_reputation_position_by_userId($u_id);
//        echo $reputationPosition.' ';
        $max_reputation = ($max_reputation==0)?1:$max_reputation;
        $max_popularity = ($max_popularity==0)?1:$max_popularity;

        if( $aggrigates->rank==0){
            $aggrigates->rank=$totalUser;
        }

        //$aggrigates->reputation = $this->convertToPositiveRange($aggrigates->reputation);
        $userAggrigates['aggrigates']=$aggrigates;
        $userAggrigates['rankPosition'] = $rankPosition;
        $userAggrigates['rankScore'] = $this->convertToPositiveRange($aggrigates->reputation)*$aggrigates->popularity;
        $userAggrigates['rankPercantage'] = intval( ( ( $totalUser - ($aggrigates->rank-1)) / $totalUser )*100);
        //$userAggrigates['reputationPercantage'] = intval( ceil( ( $aggrigates->reputation*100) / $max_reputation )); // Previous equation till 06.07.2015
        $userAggrigates['reputationPercantage']  = intval(( ( $totalUser - ($reputationPosition-1)) / $totalUser )*100  );
        $userAggrigates['popularityPercantage'] = intval( ceil(( ( $aggrigates->popularity*100) / $max_popularity )));




        $userAggrigates['rankPercantage'] = ($userAggrigates['rankPercantage'] < 0 ) ? 0: $userAggrigates['rankPercantage'];

        $userAggrigates['popularityPercantage'] = ($userAggrigates['popularityPercantage'] < 0 ) ? 0: $userAggrigates['popularityPercantage'];

        $userAggrigates['rankPercantage'] = ($userAggrigates['rankPercantage'] > 100 ) ? 0: $userAggrigates['rankPercantage'];
        $userAggrigates['reputationPercantage'] = ($userAggrigates['reputationPercantage'] > 100 ) ? 100: $userAggrigates['reputationPercantage'];
        $userAggrigates['popularityPercantage'] = ($userAggrigates['popularityPercantage'] > 100 ) ? 100: $userAggrigates['popularityPercantage'];

        $userAggrigates["reputationCssCls"] =( $aggrigates->reputation>=0)? $this->cssCls:"i_bar_red";
        $userAggrigates['reputationPercantage'] = abs($userAggrigates['reputationPercantage']);
        return $userAggrigates;
    }
    function getAggregatesInPercentagesByUserList($userList){
        $this->CI->load->model('m_gossip_main');

        $totalReputation = 0;

        $totalRankPercentage = 0;
        $totalReputationPercantage = 0;
        $totalPopularityPercantage = 0;

        $userCount = sizeof($userList);
        $weight = 0;
        for($i=0;$i<$userCount;$i++){
            if($this->CI->m_gossip_main->is_gossip_received_by_target($userList[$i])){
                $tempAggregate = $this->getAggrigatesInPercentages($userList[$i]);
                $totalRankPercentage += $tempAggregate['rankPercantage'];
                $totalReputationPercantage += $tempAggregate['aggrigates']->reputation;
                $totalPopularityPercantage += $tempAggregate['popularityPercantage'];
                $totalReputation += $tempAggregate['aggrigates']->reputation;
                $weight++;
            }else{
               // die($userList[$i]);
            }
        }

        $weight = ($weight<=0)?1:$weight;
        $groupAggrigates = array();
        $groupAggrigates['reputation'] = intval($totalReputation/$weight);

        $groupAggrigates['rankPercantage'] = intval($totalRankPercentage/$userCount);
        $groupAggrigates['reputationPercantage'] = intval($totalReputationPercantage/$weight);
        $groupAggrigates['popularityPercantage'] = intval($totalPopularityPercantage/$userCount);
        $groupAggrigates["reputationCssCls"] =( $groupAggrigates['popularityPercantage']>=0)? $this->cssCls:"i_bar_red";
        return $groupAggrigates;
    }
}