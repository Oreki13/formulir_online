<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        cek_login();
    }


    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['peserta'] = $this->db->get_where('data_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($data['user']['login_cek'] == 1) {
            redirect('daftar');
        }
         if ($data['user']['role_id'] == 1) {
            redirect('admin');
        }


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
    public function gantipassword()
    {
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/gantipassword', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('user/gantipassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama tidak boleh sama dengan password baru!</div>');
                    redirect('user/gantipassword');
                } else {
                    // Password Sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil di Ubah!</div>');
                    redirect('user/gantipassword');
                }
            }
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $cek= $data['user']['email'];


        $data['data'] = $this->db->get_where('data_user', ['email' => $cek])->row_array();
        $data['data_user'] = $this->db->get('data_user')->row_array();
        $data['bulan'] = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $data['agama'] = ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Budha', 'Kong Hu Cu'];
        $data['jurusan'] = ['Profesional 1 Tahun (Komputer dan Internet)', 'English Course (Speak Out)', 'Program PTIK', 'Short Course (Desain Grafis)', 'Short Course(Auto Cad)', 'Short Course (Microsoft Office)'];
        $data['jenis_kelamin'] = ['laki-Laki', 'Perempuan'];


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $no_hp = $this->input->post('no_hp');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $ttl_tanggal = $this->input->post('ttl_tanggal');
            $agama = $this->input->post('agama');
            $jurusan = $this->input->post('jurusan');
            $kabupaten = $this->input->post('kabupaten');
            $kecamatan = $this->input->post('kecamatan');
            $kode_pos = $this->input->post('kode_pos');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $name_ortu = $this->input->post('name_ortu');
            $tempat_lahir_ortu = $this->input->post('tempat_lahir_ortu');
            $ttl_tanggal_ortu = $this->input->post('ttl_tanggal_ortu');
            $agama_ortu = $this->input->post('agama_ortu');
            $no_hp_ortu = $this->input->post('no_hp_ortu');
            $alamat_ortu = $this->input->post('alamat_ortu');
            $kelurahan = $this->input->post('kel');

            // Cek jika ada gambar yang mau di upload!
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types']    = 'gif|jpg|img|jpeg|png';
                $config['max_size']         = '2048';
                $config['upload_path']      = './assets/img/profile/';
                $config['max_width']        = 472;
                $config['max_height']       = 709;

                $this->load->library('upload', $config);
                // $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['data_user']['gambar'];

                    if ($old_image == $old_image) {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin');
                }
            }


            $this->db->set('name', $name);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('tempat_lahir', $tempat_lahir);
            $this->db->set('ttl_tanggal', date('Y-m-d', strtotime($ttl_tanggal)));
            $this->db->set('agama', $agama);
            $this->db->set('jurusan', $jurusan);
            $this->db->set('kabupaten', $kabupaten);
            $this->db->set('kecamatan', $kecamatan);
            $this->db->set('kode_pos', $kode_pos);
            $this->db->set('alamat_rumah', $alamat_rumah);
            $this->db->set('name_ortu', $name_ortu);
            $this->db->set('tempat_lahir_ortu', $tempat_lahir_ortu);
            $this->db->set('ttl_tanggal_ortu', date('Y-m-d', strtotime($ttl_tanggal_ortu)));
            $this->db->set('agama_ortu', $agama_ortu);
            $this->db->set('no_hp_ortu', $no_hp_ortu);
            $this->db->set('alamat_ortu', $alamat_ortu);
            $this->db->set('kelurahan', $kelurahan);
            $this->db->where('email', $email);
            $this->db->update('data_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('user');
        }
    }
    public function detail($id)
    {
        $data['title'] = 'User Page';
        $data['judul'] = 'Detail Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->db->get_where('data_user', ['id' => $id])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('template/footer');
    }
}
