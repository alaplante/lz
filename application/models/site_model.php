<?php


if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Site_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function get_information() {
		$query = $this->db->get( 'information' );
		if ( $query->num_rows() > 0 ) {
			foreach ( $query->result() as $row ) {
				$data[] = $row;
			}
		}
		return $data;
	}


}
