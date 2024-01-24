<?php
	#last update 2-23-2017
	class Dba_model extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function insert($table,$data)
		{
			$data=array_map('trim',$data);
			$this->db->insert($table,$data);
			$session_array['insertid']=$this->db->insert_id();
			$this->session->set_userdata($session_array);
			return $this->db->affected_rows();
			//$errNo   = $this->db->_error_number();
			//$errMess = $this->db->_error_message();
			//$lastquery=$this->db->last_query();
			}
		function update($table,$field,$condition)
		{
			$field=array_map('trim',$field);
			$condition=array_map('trim',$condition);
			$this->db->update($table, $field, $condition);
			$session_array['insertid']=$this->db->insert_id();
			$this->session->set_userdata($session_array);
			return $num_update = $this->db->affected_rows();
		}
		function del($table,$condition)
		{
			$condition=array_map('trim',$condition);
			$this->db->delete($table, $condition);
			return $num_update = $this->db->affected_rows();
		}
		function select_where($table,$data)
		{
			$data=array_map('trim',$data);
			return $this->db->get_where($table,$data);
		}
		function select($table)
		{
			return $this->db->get($table);
		}
		function select_one($table,$field,$data)
		{
			$data=array_map('trim',$data);
			$result=$this->db->get_where($table,$data);
			if($result->num_rows()>0)
			{
				$tables=$result->result();
				return $tables[0]->$field;
			}
			return 0;
		}
		public function select_where_rows($table,$condition)
		{
			$r = $this->db->get_where($table,$condition);
			return $r->num_rows();
		}
		function select_join($table,$on,$type='inner')
		{
			return $this->db->join($table, $on , $type);
		}
		function iud_query($query)
		{
			$this->db->query($query);
			return $this->db->affected_rows();
		}
		function select_query($query)
		{
			return $this->db->query($query);
		}
		function duplicate($table,$data)
	{
	$data=array_map('trim',$data);
	$result=$this->db->get_where($table,$data);
	if($result->num_rows()>0)
	return true;
	else
	return false;
	}
	function duplicate_edit($table,$data,$field,$value)
	{
	/*
	$this->db->select('*');
	$this->db->from('mytable');
	$this->db->where(name,'Joe');
	$this->db->where('name !=', $name);
	$this->db->or_where('id >', $id);
	// Produces: WHERE name != 'Joe' OR id > 50
	$bind = array('boss', 'active');
	$this->db->where_in('status', $bind);
	$query = $this->db->get();
	*/
	$data=array_map('trim',$data);
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($data);
	$this->db->where($field.'!=', $value);
	$result = $this->db->get();
	if($result->num_rows()>0)
	return true;
	else
	return false;
	}
	function select_count($table,$condition)
	{
	$result=$this->select($table,$condition);
	return $result->num_rows();
	/*$this->db->select('count(*)');
	$this->db->from($table);
	$this->db->where($condition);
	$query = $this->db->get();
	return $query->num_rows();
	*/
	}
	
	public function batch_data($table, $data)
{
    $this->db->update_batch($table, $data, 'tc_id'); // this will set the id column as the condition field
    return true;
}
	
	
	}	