<?php
class Solicitation_model extends CI_Model
{
	function getSolicitacao() {
		$query = $this->db->get('solicitation');
		return $query->result();
	}

	function getSaques() {
		$query = $this->db->get_where('solicitation', array('status' => null));
		return $query->result();
	}
	
	function getSaquesAnalise($id) {
		$query = $this->db->get_where('solicitation', array('client' => $id, 'status' => null));
		return $query->result();
	}

	function getSaquesAprovado($id) {
		$query = $this->db->get_where('solicitation', array('client' => $id, 'status' => 1));
		return $query->result();
	}

	function getSaquesReprovado($id) {
		$query = $this->db->get_where('solicitation', array('client' => $id, 'status' => 0));
		return $query->result();
	}

	function insert($data)
	{
		$this->db->insert('solicitation', $data);
		return $this->db->insert_id();
	}

	function update($id, $data)
	{
		$this->db->update('solicitation', $data, array('id' => $id));
	}

	function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('solicitation');
    }  
}

?>