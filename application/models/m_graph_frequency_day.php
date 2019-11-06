<?php
class m_graph_frequency_day extends CI_Model{
	function insert_row_data($insert_data_array){
		return $this->db->insert('graph_frequency_day',$insert_data_array);
	}
	
	function is_empty($day=""){
		$sql="select count(*) c from graph_frequency_day";
		if($day!=""){
			$sql.=" where DATE(date) = '".$day."'";
		}
		$sql.=" limit 1";
		foreach($this->db->query($sql)->result() as $rowData){
			if($rowData->c==0)
				return true;
			return false;
		}
		return true;
	}
	
	function get_avg_by_category_id($category_id,$start_day=0,$finish_day=-1,$year){
		$day="";

		for($i=$start_day;$i<=$finish_day;$i++){
			if($i==$finish_day)
				$day.=$i;
			else
				$day.=$i.',';
		}
		 
		$return_array="";
		$sql="select avg from graph_frequency_day ";
		$sql.=" where category_id = ".$category_id;
		$sql.=" and year(date) = ".$year."";
		if($day!=""){
			$sql.=" and day(date) in (".$day.")";
			 
		}
		foreach($this->db->query($sql)->result() as $rowData){
			$return_array.=round($rowData->avg,3).',';
		}
		 
		return $return_array;
		 
	}
	
	function get_max_day(){
		$sql="select max(day(date)) m_date from graph_frequency_day where month(date) = ".date('m');
		foreach($this->db->query($sql)->result() as $rowData){
			return $rowData->m_date;
		}
		return 0;
	}
	
	function get_min_day(){
		$sql="select min(day(date)) m_date from graph_frequency_day where month(date) = ".date('m');
		foreach($this->db->query($sql)->result() as $rowData){
			return $rowData->m_date;
		}
		return 0;
	}
	
	public function get_graph_frequency_day_by_cat_and_date($category_id,$date){
		$sql = "SELECT *
				FROM `graph_frequency_day`
				WHERE category_id = {$category_id}
				AND DATE(`date`)  = '{$date}'";
		
		$data = $this->db->query($sql);
		 
		if($data->num_rows() >0 ){
			return $data->result_array();
		}else {
			return false;
		}
	}
}

