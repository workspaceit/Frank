<?phpclass trait_like extends CI_Controller{    private $u_id;    private $gender;    private $pageData;    function __construct(){        parent::__construct();        $this->load->helper('url');        $this->pageData = array();        include_once(APPPATH . 'controllers/common_site_setting.php');        include_once(APPPATH . 'controllers/load_common_properties_of_user_for_ajax_request_json.php');    }    function submit_insert_data(){        $this->load->model('m_trait_like');        $this->load->model('m_gossip_main');        include_once(APPPATH . 'controllers/class_file/c_trait_like.php');        include_once(APPPATH . 'controllers/class_file/encrypt_tbl_primary_key.php');        $c_trait_like_obj = new c_trait_like();        $encrypt_tbl_primary_key_obj = new encrypt_tbl_primary_key();        $gossip_id = $encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post('gossip_id')));        $comment_id = $encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post('comment_id')));        $main_comment = trim($this->input->post('main_comment'));        $liker_id = $this->u_id;        $gossiper_id = $encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post('gossiper_id')));        $point = intval(trim($this->input->post('point')));        if ($point === -1 || $point === 1) {        } else {            $point = 0;        }        /*if ($point >= -1 && $point <= 1) {        } else {            $point = 1;        }*/        $oldPoint = $this->m_trait_like->getLikeOrDislikeStatusByLikerAndCommentId($main_comment, $liker_id, $comment_id);        If($point == $oldPoint){            if($point == 1){                $message = "You already Liked this !";            }else{                $message = "You already Disliked this !";            }            $respond_array['status'] =false;            $respond_array['msg'] = $message;            json_encode($respond_array);            echo json_encode($respond_array);            die();        }        $c_trait_like_obj->set_gossip_id($gossip_id);        $c_trait_like_obj->set_comment_id($comment_id);        $c_trait_like_obj->set_main_comment($main_comment);        $c_trait_like_obj->set_liker_id($liker_id);        $c_trait_like_obj->set_gossiper_id($gossiper_id);        $c_trait_like_obj->set_point($point);        if ($c_trait_like_obj->insert_row_and_update_gossip_main()) {            $data = $this->m_gossip_main->get_j_gossip_row_by_gossip_id($gossip_id);//            $respond_array['like'] = $data[0]['gossip_like'];//            $respond_array['comment'] = $data[0]['gossip_comments'];            if($data[0]->gossip_like<=-10)            {                $respond_array['comment'] = '(Hidden by Gossipe Audience)';            }else            {                $respond_array['comment'] = $data[0]->gossip_comments;            }            $likeCount = $this->m_trait_like->get_total_likes_By_comment_id_main_comment($comment_id,$main_comment);            $unlikeCount = $this->m_trait_like->get_total_unlikes_By_comment_id_main_comment($comment_id,$main_comment);            $respond_array['id'] = $data[0]->gossip_id;            $respond_array['hidden'] = $data[0]->gossip_hidden;            $respond_array['status'] = true;            $respond_array['msg'] = "";            $respond_array['like'] = $likeCount;            $respond_array['unlike'] = $unlikeCount;            json_encode($respond_array);            echo json_encode($respond_array);            die();        } else {            $respond_array['status'] = false;            $respond_array['msg'] = "";            json_encode($respond_array);            echo json_encode($respond_array);            die();        }    }}?>