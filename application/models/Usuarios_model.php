<?php

/**
 * Usuarios Model.
 */
class Usuarios_model extends CI_Model {

	# save $data on 'usuarios'
	function save($data) {
		
		$this->db->set('nome', $data['nome']);
		$this->db->set('email', $data['email']);
		$this->db->set('idade', $data['idade']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('usuarios');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('usuarios');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'usuarios'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('usuarios')->row();
		} else {
			return $this->db->get('usuarios')->result();
		}
	}

	# destroy $data from  'usuarios'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('usuarios');

		return $this->db->affected_rows();
	}

}
