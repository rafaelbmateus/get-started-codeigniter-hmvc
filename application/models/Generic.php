<?php
class Generic extends CI_Model {	
	public function __construct() {
		parent::__construct ();
	}
	public function get($table, $fields = '*', $where = '', $filed_orderby = '', $orderby = 'desc', $one = false) {
		$this->db->select ( $fields );
		$this->db->from ( $table );
		$this->db->order_by ( $filed_orderby, $orderby );
		if ($where) {
			$this->db->where ( $where );
		}

		$query = $this->db->get ();

		$result = ! $one ? $query->result () : $query->row ();
		return $result;
	}
	public function add($table, $data) {
		$this->db->insert ( $table, $data );
		if ($this->db->affected_rows () == '1') {
			return TRUE;
		}
		return FALSE;
	}
	public function edit($table, $data, $fieldID, $ID) {
		$this->db->where ( $fieldID, $ID );
		$this->db->update ( $table, $data );

		if ($this->db->affected_rows () > 0) {
			return TRUE;
		}
		return FALSE;
	}
	public function delete($table, $field, $value) {
		/*
		 * Field = Name
		 * Value = James
		 */
		$this->db->where ( $field, $value );
		$this->db->delete ( $table );
		if ($this->db->affected_rows () == '1') {
			return true;
		} else {
			return false;
		}
	}
	public function count($table) {
		return $this->db->count_all ( $table );
	}
}
