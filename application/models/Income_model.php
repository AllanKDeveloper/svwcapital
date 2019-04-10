<?php
class Income_model extends CI_Model
{
	function getIncome() {
		$query = $this->db->get('income');
		return $query->result();
	}

	function getPerfil($id) {
		$query = $this->db->get_where('income', array('id' => $id));
		return $query->result();
	}

	function insert($data)
	{
		$this->db->insert('income', $data);
		return $this->db->insert_id();
	}

	function update($id, $data)
	{
		$this->db->update('income', $data, array('id' => $id));
	}

	function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('income');
    }  
}

?>