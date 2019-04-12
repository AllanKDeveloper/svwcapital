<?php
class Solicitation_model extends CI_Model
{
	function getSolicitacao($id) {
		$query = $this->db->get_where('solicitation', array('id' => $id));
		return $query->result();
	}

	function getSaques() {
		$this->db->select('solicitation.*, clients.name as client_name');
		$this->db->where('solicitation.status', null);
		$this->db->from("solicitation");
		$this->db->join('clients', 'solicitation.client = clients.id');
		$this->db->order_by("solicitation.date", 'asc');
		$query = $this->db->get();
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

	function reprove($id, $data)
    {
        $this->db->update('solicitation', $data, array('id' => $id));
    }

    function aprove($id, $data)
    {
        $this->db->update('solicitation', $data, array('id' => $id));
    }

    function getSaquesAll($id) {
    	$query = $this->db->get_where('solicitation', array('client' => $id));
		return $query->result();
    }
}

?>