<?php
class tb_member_model extends CI_Model
{

	public function getAnggotaByIdBos($id)
	{
		$this->db->where('id_member', $id);

		return $this->db->get('tb_member')->result();
	}
}
