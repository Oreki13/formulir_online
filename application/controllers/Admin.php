<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        cek_login();
    }

     public function index(){


        $data['title'] = 'Tes Table';
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        

        $data['calon'] = $this->db->get('data_user')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/tables', $data);
        $this->load->view('template/footer');

    }
    
    
    public function hapus($id)
    {
        $data1 = $this->db->get_where('data_user', ['id' => $id])->row_array();
        $tes = $data1['email'];
        $namanya = $data1['name'];
        


        $data2 = $this->db->get_where('user', ['email' => $tes])->row_array();
        
        $email = $data2['email'];
        $old_image = $data1['gambar'];

        $this->db->where('id', $id);
        $this->db->delete('data_user');

        $this->db->where('email', $email);
        $this->db->delete('user');

        unlink(FCPATH . 'assets/img/profile/' . $old_image);


        $this->session->set_flashdata('message', "{$namanya} Dihapus!");
        redirect('admin');
    }

    public function detail($id)
    {
        $data['title'] = 'Admin Page';
        $data['judul'] = 'Detail siswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['detail'] = $this->db->get_where('data_user', ['id' => $id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('data_user', ['id' => $id])->row_array();
        $data['data_user'] = $this->db->get('data_user')->row_array();
        $data['bulan'] = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $data['agama'] = ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Budha', 'Kong Hu Cu'];
        $data['jurusan'] = ['Profesional 1 Tahun', 'Short Chourse', 'English'];
        $data['jenis_kelamin'] = ['laki-Laki', 'Perempuan'];


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/edit', $data);
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
            $ttl_bulan_ortu = $this->input->post('ttl_bulan_ortu');
            $ttl_tahun_ortu = $this->input->post('ttl_tahun_ortu');
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

            $this->session->set_flashdata('message', 'Data Berhasil DiUpdate!');
            redirect('admin');
        }
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
            $this->load->view('admin/gantipassword', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('admin/gantipassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama tidak boleh sama dengan password baru!</div>');
                    redirect('admin/gantipassword');
                } else {
                    // Password Sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil di Ubah!</div>');
                    redirect('admin/gantipassword');
                }
            }
        }
    }

    public function create (){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin_data.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'min_length' => 'Password too short!',
            'matches' => 'Password do match!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Admin';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/create', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data1 = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'gambar' => 'user.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'login_cek' => 0,
                'is_active' => 1,
                'date_created' => time(),

            ];

          


            $this->db->insert('user', $data1);
            

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Admin telah ditambahkan</div>');
            redirect('admin/create');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'orekisan1306@gmail.com',
            'smtp_pass' => '123nugraha345',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'crlf' => "\r\n",
        ];
        $this->email->initialize($config);
        // $this->load->library('email', $config);

        $this->email->from('orekisan1306@gmail.com', 'orekisan');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Verification Code');
            $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activated</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function list(){
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'List Admin';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/List', $data);
        $this->load->view('template/footer');

    }

    public function hapus2($id)
    {

        $this->db->where('id', $id );
        $this->db->delete('user');

        $this->session->set_flashdata('message', 'Data Berhasil di hapus');
        redirect('admin/list');
    }

}

