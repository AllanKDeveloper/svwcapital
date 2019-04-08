<?php
class Client_model extends CI_Model
{
	function getClients() {
		$query = $this->db->get('clients');
		return $query->result();
	}

	function getPerfil($id) {
		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->result();
	}

	function insert($data)
	{
		$this->db->insert('clients', $data);
		return $this->db->insert_id();
	}

	function update($id, $data)
	{
		$this->db->update('clients', $data, array('id' => $id));
	}

	function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('clients');
    }  
}

?>