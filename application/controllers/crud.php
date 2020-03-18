<?php
    //jangan lupa load library database, dan helper url (autoload di folder config)
	class Crud extends CI_controller{
		public $nama_tabel='pengguna';

		public function __construct(){
			parent::__construct();
			$this->load->model("model_crud");
		}

		public function index(){
			//echo $this->nama_tabel;
			$data["pengguna"] = $this->model_crud->ambil_all_data($this->nama_tabel);
			$this->load->view("view_data",$data);
		}

		public function add_form(){
			$this->load->view("form_add_view");
		}

		public function aksi_add(){
			$dataNya = array(
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'agama'=>$this->input->post('agama'),
				'type'=>$this->input->post('type'),
				'alamat'=>$this->input->post('alamat')
			);
			$this->model_crud->masukan_data($this->nama_tabel,$dataNya);
			redirect("crud");
		}

		public function call_edit_form($id){
			$where = array('id'=>$id);
			$data["pengguna"] = $this->model_crud->ambil_satu_data($this->nama_tabel,$where);
			$this->load->view("form_edit_view",$data);
		}

		public function aksi_edit($id){
			$dataNya = array(
				'nama'=>$this->input->post('nama'),
				'agama'=>$this->input->post('agama'),
				'type'=>$this->input->post('type'),
				'alamat'=>$this->input->post('alamat')
			);

			print_r($dataNya);

			$where = array('id'=>$id);
			$this->model_crud->ubah_data($this->nama_tabel,$where,$dataNya);
			redirect("crud");
		}

		public function delete($id){
			$where = array('id'=>$id);
			$this->model_crud->hapus($this->nama_tabel,$where);
			redirect("crud");
		}
	}

?>