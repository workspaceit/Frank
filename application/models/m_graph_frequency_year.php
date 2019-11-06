<?php
class m_graph_frequency_year extends CI_Model{
	function insert_row_data($insert_data_array){
		return $this->db->insert('graph_frequency_year',$insert_data_array);
	}
	
	function update_row_data($update_data_array,$category_id){
		$this->db->where('year(date)',date('Y'));
		$this->db->where('category_id',$category_id);
		return $this->db->update('graph_frequency_year',$update_data_array);
	}
	
	function is_empty($year=""){
		$sql="select count(*) c from graph_frequency_year";
		if($year!=""){
			$sql.=" where YEAR(date) = '".$year."'";
		}
		$sql.=" limit 1";
		foreach($this->db->query($sql)->result() as $rowData){
			if($rowData->c==0)
				return true;
			return false;
		}
		return true;
	}
	
	public function get_graph_frequency_day_by_cat_and_year($category_id,$year){
		$sql = "SELECT *
				FROM `graph_frequency_year`
				WHERE category_id = {$category_id}
				AND YEAR(`date`)  = '{$year}'";
		
		$data = $this->db->query($sql);
			
		if($data->num_rows() >0 ){
			return $data->result_array();
		}else {
			return false;
		}
	}
}
?>