<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Formulir Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_user'] = $this->db->get('data_user')->row_array();


        // if ($data['user']['login_cek'] == 0) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');



        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('daftar/index', $data);
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


            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types']    = 'gif|jpg|img|jpeg|png';
                $config['max_size']         = '2000';
                $config['upload_path']      = './assets/img/profile/';
                $config['max_width']        = 472;
                $config['max_height']       = 709;

                $this->load->library('upload', $config);


                if ($this->upload->do_upload('image')) {

                    $new_image = $this->upload->data('file_name');
                    $gambar = ['gambar' => ($new_image)];
                    global $uplud;
                    $uplud = $gambar['gambar'];
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('daftar/index');
                }
            }



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

            $data1 = [
                'email' => ($email),
                'name' => htmlspecialchars($name),
                'no_hp' => htmlspecialchars($no_hp),
                'agama' => htmlspecialchars($agama),
                'jenis_kelamin' => htmlspecialchars($jenis_kelamin),
                'tempat_lahir' => htmlspecialchars($tempat_lahir),
                'ttl_tanggal' => htmlspecialchars(date('Y-m-d', strtotime($ttl_tanggal))),
                'gambar' => ($uplud),
                'jurusan' => htmlspecialchars($jurusan),
                'name_ortu' => htmlspecialchars($name_ortu),
                'tempat_lahir_ortu' => htmlspecialchars($tempat_lahir_ortu),
                'ttl_tanggal_ortu' => htmlspecialchars(date('Y-m-d', strtotime($ttl_tanggal_ortu))),
                'agama_ortu' => htmlspecialchars($agama_ortu),
                'no_hp_ortu' => htmlspecialchars($no_hp_ortu),
                'alamat_ortu' => htmlspecialchars($alamat_ortu),
                'kabupaten' => htmlspecialchars($kabupaten),
                'kecamatan' => htmlspecialchars($kecamatan),
                'kode_pos' => htmlspecialchars($kode_pos),
                'alamat_rumah' => htmlspecialchars($alamat_rumah),
                'date_created' => time(),

            ];

            $this->db->insert('data_user', $data1);

            $this->db->set('login_cek', 0);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran Selesai!</div>');
            redirect('user');
        }
    }
}
