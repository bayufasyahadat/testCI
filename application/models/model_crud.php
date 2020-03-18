<?php

	class model_crud extends CI_model{

		public function ambil_all_data($tbl){
			return $this->db->get($tbl)->result();
		}

		public function masukan_data($tbl,$data){
			$this->db->insert($tbl,$data);
		}

		public function ambil_satu_data($tabel,$where){
			return $this->db->get_where($tabel,$where)->result();
		}

		public function ubah_data($tabel,$where,$data){
			$this->db->where($where);
			$this->db->update($tabel,$data);
		}

		public function hapus($tabel,$where){
			$this->db->where($where);
			$this->db->delete($tabel);
		}

	}


?>