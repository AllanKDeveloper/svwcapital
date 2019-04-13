<?php
class Client_model extends CI_Model
{
	function getClients() {
		$query = $this->db->get('clients');
		return $query->result();
	}

	function getPerfil($id) {
		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->result()[0];
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

    function insert_aporte($data)
	{
		$this->db->insert('contract', $data);
		return $this->db->insert_id();
	}

	function update_aporte($id, $data)
	{
		$this->db->update('contract', $data, array('id' => $id));
	}

	function getAporteContrato($id) {
		$query = $this->db->get_where('contract', array('id' => $id));
		return $query->result();
	}
}

?>