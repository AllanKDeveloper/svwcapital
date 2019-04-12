<?php
class Income_model extends CI_Model
{
	function getIncome() {
		$query = $this->db->get('income');
		return $query->result();
	}

	function getBalanco($id) {
		$sql = 'SELECT *
				FROM income
				WHERE id IN (
			    SELECT MAX(id)
			    FROM income
			    GROUP BY contract_id ) order by id desc';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
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

    function updateInterest($client, $draft) {
    	$query = $this->db->order_by('id', 'desc')->get_where('income', array('client' => $client));
		$lastIncome = $query->result()[0];

		$draft_formated = strtr($draft, array('.' => '', ',' => '.'));
		$interest = strtr($lastIncome->interest, array('.' => '', ',' => '.'));
		$total = strtr($lastIncome->total, array('.' => '', ',' => '.'));

		$new_interest = $interest - $draft_formated;
	    $new_interest = number_format($new_interest, 2, ',', '.');
	    $new_total = $total - $draft_formated;
	    $new_total = number_format($new_total, 2, ',', '.');

		$data = array(
			'interest' => $new_interest,
			'draft' => $draft,
			'total' => $new_total
		);
		$this->db->update('income', $data, array('id' => $lastIncome->id));
    }
}

?>