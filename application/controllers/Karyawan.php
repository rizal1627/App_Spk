<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function cek()
	{
		
		$data = array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),

			);
		
		$sql = $this->db->where($data)->get('users')->row();

		if(!empty($sql)){

			redirect('karyawan');

		}else{
			redirect('/');
		}
		
	}

	//    kriteria 

	public function kriteria(){

		$data = array(
			'page' => 'kriteria',
			'data' => $this->db->get('kriteria')->result(),
		);


		$this->load->view('template', $data);
	}

	public function kriteria_form(){

		$data = array(
			'page' => 'kriteria_form',
			
		);


		$this->load->view('template', $data);

	}

	public function kriteria_save(){

		$data = array(
			'nama' => $_POST['nama'],
			'keterangan' => $_POST['keterangan'],
			'bobot' => $_POST['bobot'],
			'atribut' => $_POST['atribut'],
		);

		$this->db->insert('kriteria',$data);

		redirect('kriteria');

	}

	public function kriteria_form_update($id){

		$data = array(
			'page' => 'kriteria_form_update',
			'data' => $this->db->where('id', $id)->get('kriteria')->row(),
		);


		$this->load->view('template', $data);


	}

	public function kriteria_update($id){

		$data = array(
			'nama' => $_POST['nama'],
			'keterangan' => $_POST['keterangan'],
			'bobot' => $_POST['bobot'],
			'atribut' => $_POST['atribut'],
		);

		$this->db->where('id', $id)->set($data)->update('kriteria');

		redirect('kriteria');

	}

	public function	kriteria_delete($id){

		

		$this->db->where('id', $id)->delete('kriteria');

		redirect('kriteria');
	}


	

// nilai 
	public function nilai(){

		$data = array(
			'page' => 'nilai',
			'data' => $this->db->get('nilai')->result(),
		);


		$this->load->view('template', $data);
	}

	public function nilai_form(){

		$data = array(
			'page' => 'nilai_form',
			
		);


		$this->load->view('template', $data);

	}

	public function nilai_save(){

		$data = array(
			'keterangan' => $_POST['keterangan'],
			'jumlah' => $_POST['jumlah'],
		);

		$this->db->insert('nilai',$data);

		redirect('nilai');

	}

	public function nilai_form_update($id){

		$data = array(
			'page' => 'nilai_form_update',
			'data' => $this->db->where('id', $id)->get('nilai')->row(),
		);


		$this->load->view('template', $data);


	}

	public function nilai_update($id){

		$data = array(
			'keterangan' => $_POST['keterangan'], 
			'jumlah' => $_POST['jumlah'],
		);

		$this->db->where('id', $id)->set($data)->update('nilai');

		redirect('nilai');

	}

	public function	nilai_delete($id){

		

		$this->db->where('id', $id)->delete('nilai');

		redirect('nilai');
	}

	// end nilai 

	public function data_karyawan(){

		$data = array(
			'page' => 'karyawan',
			'data' => $this->db->query("SELECT a.nik, a.nama, b.nama as jenis_kelamin, c.nama as status_kawin, d.nama as divisi, e.nama as pendidikan, f.nama as status_karyawan FROM karyawan a
			LEFT JOIN jenis_kelamin b ON a.id_kelamin = b.id
			LEFT JOIN status_kawin c ON a.id_status_kawin = c.id
			LEFT JOIN divisi d ON a.id_divisi = d.id
			LEFT JOIN pendidikan e ON a.id_pendidikan = e.id
			LEFT JOIN status_karyawan f ON a.id_status = f.id")->result(),
		);


		$this->load->view('template', $data);
	}

	public function form(){

		$data = array(
			'page' => 'form',
			'status_kawin' => $this->db->get('status_kawin')->result(),
			'divisi' => $this->db->get('divisi')->result(),
			'pendidikan' => $this->db->get('pendidikan')->result(),
			'jk' => $this->db->get('jenis_kelamin')->result(),
			'sk' => $this->db->get('status_karyawan')->result(),
			'stkawin' => $this->db->get('status_kawin')->result(),
		);

		$this->load->view('template', $data);
	}

	public function karyawan_save(){

		$data = array(
			'nik' => $_POST['nik'],
			'nama' => $_POST['nama'],
			'id_kelamin' => $_POST['jk'],
			'id_status_kawin' => $_POST['statkawin'],
			'id_divisi' => $_POST['divisi'],
			'id_pendidikan' => $_POST['pendidikan'],
			'id_status' => $_POST['stkrywn'],
		);

		$this->db->insert('karyawan',$data);

		redirect('karyawan');

	}

	public function karyawan_form_update($id){

		$data = array(
			'page' => 'karyawan_form_update',
			'data' => $this->db->where('nik', $id)->get('karyawan')->row(),
			'status_kawin' => $this->db->get('status_kawin')->result(),
			'jk' => $this->db->get('jenis_kelamin')->result(),
			'stkawin' => $this->db->get('status_kawin')->result(),
			'divisi' => $this->db->get('divisi')->result(),
			'pendidikan' => $this->db->get('pendidikan')->result(),
			'sk' => $this->db->get('status_karyawan')->result(),
			
		);

		$this->load->view('template', $data);
	}

	public function karyawan_update($id){

		$data = array(
			'nik' => $_POST['nik'],
			'nama' => $_POST['nama'],
			'id_kelamin' => $_POST['jk'],
			'id_status_kawin' => $_POST['stkawin'],
			'id_divisi' => $_POST['divisi'],
			'id_pendidikan' => $_POST['pendidikan'],
			'id_status' => $_POST['sk'],
		);

		$this->db->where('nik', $id)->set($data)->update('karyawan');

		redirect('karyawan');

	}

	public function	karyawan_delete($id){

		$this->db->where('nik', $id)->delete('karyawan');

		redirect('karyawan');
	}


	// penilaian 
	public function penilaian(){

		$data = array(
			'page' => 'penilaian', 
			// 'kriteria' => $this->db->get('kriteria')->result(),
			'data' => $this->db->get('kelompok')->result(),
		);

		$this->load->view('template', $data);
	}

	public function penilaian_form(){

		$data = array(
			'page' => 'penilaian_form',
			
			
		);


		$this->load->view('template', $data);

	}

	public function penilaian_save(){

		$data = array(
			'nama' => $_POST['nama'],
			'keterangan' => $_POST['keterangan'],
		);

		$this->db->insert('kelompok',$data);

		redirect('penilaian');

	}

	public function penilaian_form_update($id){

		$data = array(
			'page' => 'penilaian_form_update',
			'data' => $this->db->where('id', $id)->get('kelompok')->row(),
		);


		$this->load->view('template', $data);


	}

	public function penilaian_update($id){

		$data = array(
			'nama' => $_POST['nama'], 
			'keterangan' => $_POST['keterangan'],
		);

		$this->db->where('id', $id)->set($data)->update('kelompok');

		redirect('penilaian');

	}

	public function	penilaian_delete($id){

		$this->db->where('id', $id)->delete('kelompok');

		redirect('penilaian');
	}


	public function penilaian_all($id){

		$data = array(
			'page' => 'penilaian_all', 
			'data' => $this->db->query("SELECT a.nik, b.nama, a.id_kelompok FROM evaluasi a
										LEFT JOIN karyawan b ON a.nik = b.nik 
										WHERE a.id_kelompok = '$id' 
										GROUP BY a.nik")->result(),
			'kriteria' => $this->db->get('kriteria')->result(),
			'evaluasi' => $this->db->where('id_kelompok', $id)->get('evaluasi')->result(),
		);

		$this->load->view('template', $data);

	}

	public function penilaian_karwayan_form(){


		$data = array(
			'page' => 'penilaian_karwayan_form', 
			'data' => $this->db->query("SELECT a.* FROM karyawan a
			GROUP BY a.nik")->result(),
			'kriteria' => $this->db->get('kriteria')->result(),
		);

		$this->load->view('template', $data);

	}

	public function penilaian_karwayan_save($id){

		$kk = $this->db->get('kriteria')->result();

		foreach($kk as $k){

			$data = array(
				'nik' => $_POST['karyawan'], 
				'id_kelompok' => $id,
				'id_kriteria' => $k->id,
				'id_nilai' => $_POST[$k->id],
			);
			$this->db->insert('evaluasi', $data);

		}

		redirect('penilaian_all/'.$id);

	}


	public function penilaian_karwayan_delete($id, $id2){


		$this->db->where('nik', $id2)->delete('evaluasi');
		redirect('penilaian_all/'.$id);

	}

	public function penilaian_karwayan_form_update($id, $id2){

		$data = array(
			'page' => 'penilaian_karwayan_form_update', 
			'data' => $this->db->query("SELECT a.nik, b.nama FROM evaluasi a  LEFT JOIN karyawan b ON  a.nik= b.nik  WHERE a.nik='$id2' GROUP BY a.nik")->row(),
			'kriteria' => $this->db->get('kriteria')->result(),
			'val' => $this->db->query("SELECT * FROM evaluasi WHERE nik='$id2'")->result(),
		);

		$this->load->view('template', $data);
	}
	public function penilaian_karwayan_update($id, $id2){

		$kk = $this->db->get('kriteria')->result();

		foreach($kk as $k){

			$data = array(
				'id_nilai' => $_POST[$k->id],
			);

			$ids = array(
				'nik' => $id2, 
				'id_kriteria' =>$k->id,
			);
			$this->db->where($ids)->set($data)->update('evaluasi');

		}

		redirect('penilaian_all/'.$id);
	}





// end penilaian 


	public function list_laporan($id){
		$data = array(
			'page' => 'list_laporan', 
			'kriteria' => $this->db->get('kriteria')->result(),
			'data' => $this->db->query("SELECT a.nik, b.nama, a.id_kelompok FROM evaluasi a
										LEFT JOIN karyawan b ON a.nik = b.nik 
										WHERE a.id_kelompok = '$id' 
										GROUP BY a.nik")->result(),
			'v_evaluasi' => $this->db->query("SELECT * FROM v_n_evaluasi WHERE id_kelompok='$id'")->result(),
			'nilai' => $this->db->query("SELECT a.*, b.id as id_nilai, b.keterangan, b.jumlah FROM kriteria_nilai a
										 LEFT JOIN nilai b ON a.id_bobot = b.id ORDER BY id_kriteria ASC")->result(),
			'v_keterangan' => $this->db->get('v_keterangan')->result(), 
			'normal_1' => $this->db->query("SELECT a.*, max(a.id_nilai) AS maxdata, (SELECT b.jumlah FROM  v_keterangan b where b.nilai = max(a.id_nilai) limit 1) as normal 
											FROM v_n_evaluasi a 
											WHERE a.id_kelompok = '$id' AND a.id_kriteria != 12 GROUP BY id_kriteria")->result(), 
			'normal_2' => $this->db->query("SELECT a.*, max(a.id_nilai) AS maxdata, (SELECT b.jumlah FROM  v_keterangan b where b.nilai = max(a.id_nilai) limit 1) as normal 
											FROM v_n_evaluasi a 
											WHERE a.id_kelompok = '$id' AND a.id_kriteria = 12 GROUP BY id_kriteria")->row(), 
			'data_nilai' => $this->db->query("SELECT a.nilai, b.jumlah FROM kriteria_nilai a
												LEFT JOIN nilai b ON a.id_bobot = b.id
												where id_kriteria=12")->result(), 



		);
		

		$this->load->view('template', $data);
	}


	public function laporan(){

		$data = array(
			'page' => 'laporan',
			'data' => $this->db->query("SELECT a.*, (SELECT count( DISTINCT evaluasi.nik) FROM evaluasi WHERE evaluasi.id_kelompok = a.id  ) as karyawan  FROM kelompok a
			")->result(),
		);

		$this->load->view('template', $data);
	}
	public function print($id){

		$data = array(
			'page' => 'list_laporan', 
			'kriteria' => $this->db->get('kriteria')->result(),
			'data' => $this->db->query("SELECT a.nik, b.nama, a.id_kelompok FROM evaluasi a
										LEFT JOIN karyawan b ON a.nik = b.nik 
										WHERE a.id_kelompok = '$id' 
										GROUP BY a.nik")->result(),
			'v_evaluasi' => $this->db->query("SELECT * FROM v_n_evaluasi WHERE id_kelompok='$id'")->result(),
			'nilai' => $this->db->query("SELECT a.*, b.id as id_nilai, b.keterangan, b.jumlah FROM kriteria_nilai a
										 LEFT JOIN nilai b ON a.id_bobot = b.id ORDER BY id_kriteria ASC")->result(),
			'v_keterangan' => $this->db->get('v_keterangan')->result(), 
			'normal_1' => $this->db->query("SELECT a.*, max(a.id_nilai) AS maxdata, (SELECT b.jumlah FROM  v_keterangan b where b.nilai = max(a.id_nilai) limit 1) as normal 
											FROM v_n_evaluasi a 
											WHERE a.id_kelompok = '$id' AND a.id_kriteria != 12 GROUP BY id_kriteria")->result(), 
			'normal_2' => $this->db->query("SELECT a.*, max(a.id_nilai) AS maxdata, (SELECT b.jumlah FROM  v_keterangan b where b.nilai = max(a.id_nilai) limit 1) as normal 
											FROM v_n_evaluasi a 
											WHERE a.id_kelompok = '$id' AND a.id_kriteria = 12 GROUP BY id_kriteria")->row(), 
			'data_nilai' => $this->db->query("SELECT a.nilai, b.jumlah FROM kriteria_nilai a
												LEFT JOIN nilai b ON a.id_bobot = b.id
												where id_kriteria=12")->result(), 



		);
			$this->load->view('print', $data);
	}


	public function nilai_add_kriteria($id = null){


		$data = array(
			'page' => 'nilai_add_kriteria',
			'data' => $this->db->query("SELECT a.*, b.nama as nama_kriteria FROM kriteria_nilai a
			LEFT JOIN kriteria b ON a.id_kriteria = b.id WHERE a.id_bobot='$id'"  )->result() 
		
		);

		$this->load->view('template', $data);


	}

	public function nilai_form_kriteria($id = null){

	

		$data = array(
			'page' => 'nilai_form_kriteria',
			'kriteria' => $this->db->get("kriteria")->result(),
		
		);

		$this->load->view('template', $data);

	}

	public function kriteria_nilai_save($id = null){

		$data = array(
			'id_bobot' => $id,
			'id_kriteria' => $_POST['kriteria'],
			'nilai' => $_POST['nilai'],
			
		
		);

		$this->db->insert('kriteria_nilai', $data);

		redirect('nilai_add_kriteria/'.$id);

	}

	public function kriteria_nilai_update($id = null, $id2 = null){


		$data = array(
			'page' => 'kriteria_nilai_update',
			'kriteria' => $this->db->get("kriteria")->result(),
			'data' => $this->db->query("SELECT a.*, b.nama as nama_kriteria FROM kriteria_nilai a
			LEFT JOIN kriteria b ON a.id_kriteria = b.id WHERE a.id='$id2'")->row() 
		
		);

		$this->load->view('template', $data);


	}

	public function kriteria_nilai_form_update($id = null, $id2 = null){

		$data = array(
			'id_bobot' => $id,
			'id_kriteria' => $_POST['kriteria'],
			'nilai' => $_POST['nilai'],
			
		
		);

		$this->db->set($data)->where('id', $id2)->update('kriteria_nilai');

		redirect('nilai_add_kriteria/'.$id);

	}

	public function kriteria_nilai_nilai_delete($id = null, $id2 = null){

	

		$this->db->where('id', $id2)->delete('kriteria_nilai');

		redirect('nilai_add_kriteria/'.$id);

	}


}
