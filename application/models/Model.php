<?php
class Model extends CI_Model {
	public $table = 'schema.tb_table';
	public $primary_key = 'field_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';
	public function __construct() {
		parent::__construct ();
	}
	function get($id = null) {
		$this->db->from ( $this->table );
		if ($id) {
			$this->db->where ( $this->primary_key, $id );
		}
		$this->db->where ( $this->is_deleted_field, NULL );
		return $this->db->get ()->result ();
	}
	function getWhere($field = "", $value = "") {
		$this->db->from ( $this->table );
		$this->db->where ( $field, $value );
		return $this->db->get ()->result ();
	}
	function last($filed="", $num = 5) {
		$this->db->from ( $this->table );
		if ($filed){
			$this->db->order_by ( $filed, 'DESC' );
		}else{
			$this->db->order_by ( $this->primary_key, 'DESC' );
		}
		$this->db->limit ( $num );
		return $this->db->get ()->result ();
	}
	function add($name = "", $timestamp) {
		$data = array (
				'name' => $name,
				$this->date_created_field => $timestamp 
		);
		return $this->db->insert ( $this->table, $data );
	}
	function update($id, $name = "", $timestamp) {
		$data = array (
				'name' => $name,
				$this->date_updated_field => $timestamp 
		);
		$this->db->where ( $this->primary_key, $id_bug );
		return $this->db->update ( $this->table, $data );
	}
	function delete($id) {
		$data = array (
				$this->is_deleted_field => true 
		);
		$this->db->where ( $this->primary_key, $id );
		return $this->db->update ( $this->table, $data );
	}
	function destroy($id) {
		$this->db->where ( $this->primary_key, $id );
		return $this->db->delete ( $this->table );
	}
	function count() {
		return $this->db->count_all ( $this->table );
	}
}
