<?php
class User extends CI_Model {
	public $table = 'tb_user';
	public $primary_key = 'user_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';
	public function __construct() {
		parent::__construct ();
		$this->create_table ();
	}
	function create_table() {
		if (! $this->db->table_exists ( $this->table )) {
			$query = 'CREATE TABLE tb_user(
						user_id SERIAL, 
						user_name character varying(255) NOT NULL, 
						created_at timestamp without time zone, 
  						updated_at timestamp without time zone, 
	  					is_deleted boolean
					)';
			
			return $this->db->query($query);
		}
	}
	function get($id = null) {
		$this->db->from ( $this->table );
		if ($id) {
			$this->db->where ( $this->primary_key, $id );
		}
		$this->db->where ( $this->is_deleted_field, NULL );
		return $this->db->get ()->result ();
	}
	function getWhere($field = "", $content = "") {
		$this->db->from ( $this->table );
		$this->db->where ( $field, $content );
		return $this->db->get ()->result ();
	}
	function add($name, $timestamp) {
		$data = array (
				'user_name' => $name,
				$this->date_created_field => $timestamp 
		);
		return $this->db->insert ( $this->table, $data );
	}
	function update($id, $name, $timestamp) {
		$data = array (
				'user_name' => $name,
				$this->date_updated_field => $timestamp 
		);
		$this->db->where ( $this->primary_key, $id );
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
		$this->db->delete ( $this->table );
	}
}
