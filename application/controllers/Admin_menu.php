<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/index', $data);
            $this->load->view('template/admin_footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url')
            ];
            //insert ke tabel admin menu
            $this->db->insert('admin_menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data menu anda sudah ditambahkan! </div>');
            redirect('admin_menu');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin_menu'] = $this->db->get_where('admin_menu', ['id' => $id])->row_array();

        //set rules untuk edit menu
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            // $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $nama = $this->input->post('nama', true);
            $icon = $this->input->post('icon', true);
            $url = $this->input->post('url', true);

            //kita set data mana yang mau di update
            $this->db->set('nama', $nama);
            $this->db->set('icon', $icon);
            $this->db->set('url', $url);
            $this->db->where('id', $this->input->post('id'));

            //update data ke tabel admin menu
            $this->db->update('admin_menu');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data menu anda sudah diupdate! </div>');
            redirect('admin_menu');
        }
    }

    // fungsi hapus
    public function hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // hapus data yang ada dalam admin_menu
        $this->db->delete('admin_menu', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Selamat, Data menu anda sudah dihapus! </div>');
        redirect('admin_menu');
    }


    public function about()
    {
        $data['judul'] = 'About';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('hb', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/about', $data);
            $this->load->view('template/admin_footer', $data);
        } else {
            $data = [
                'hb' => $this->input->post('hb'),
                'motto' => $this->input->post('motto'),
                'detail_bio' => $this->input->post('detail_bio')
            ];
            //insert ke tabel admin menu
            $this->db->insert('about', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data About anda sudah ditambahkan! </div>');
            redirect('admin_menu/about');
        }
    }

    public function banner_image()
    {
        $data['judul'] = 'Banner Image';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('text', 'Text', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/banner_image', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/banner';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Gambar Anda belum diupload! </div>');
                redirect('admin_menu/banner_image');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $text   = $this->input->post('text', true);
            }

            $data = [
                'text' => $text,
                'image' => $gambar

            ];
            //insert ke tabel admin menu
            $this->db->insert('banner_img', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data Banner anda sudah ditambahkan! </div>');
            redirect('admin_menu/banner_image');
        }
    }

    public function film_baru()
    {
        $data['judul'] = 'Film Baru';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['film_baru'] = $this->db->get_where('film_baru')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('youtube', 'Youtube', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/film_baru', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/film-baru';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Poster film Anda belum diupload! </div>');
                redirect('admin_menu/film_baru');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $judul   = $this->input->post('judul', true);
                $youtube   = $this->input->post('youtube', true);
            }

            $data = [
                'judul' => $judul,
                'image' => $gambar,
                'youtube' => $youtube

            ];
            //insert ke tabel admin menu
            $this->db->insert('film_baru', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data poster film anda sudah ditambahkan! </div>');
            redirect('admin_menu/film_baru');
        }
    }


    public function karyawan()
    {
        $data['judul'] = 'Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('nm_kry', 'Nama Karyawan', 'required|trim');
        $this->form_validation->set_rules('fb', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('ig', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('tw', 'Twitter', 'required|trim');
        $this->form_validation->set_rules('jbt', 'Jabatan', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/karyawan', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/karyawan';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Foto Karyawan Anda belum diupload! </div>');
                redirect('admin_menu/karyawan');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $nm     = $this->input->post('nm_kry', true);
                $fb     = $this->input->post('fb', true);
                $ig     = $this->input->post('ig', true);
                $tw     = $this->input->post('tw', true);
                $jbt    = $this->input->post('jbt', true);
            }

            $data = [
                'nm_kry' => $nm,
                'image' => $gambar,
                'fb'    => $fb,
                'ig'    => $ig,
                'tw'    => $tw,
                'jbt'   => $jbt,

            ];
            //insert ke tabel admin menu
            $this->db->insert('karyawan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data karyawan anda sudah ditambahkan! </div>');
            redirect('admin_menu/karyawan');
        }
    }


    public function detail_karyawan($id)
    {
        $data['judul'] = 'Detail Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        $this->load->view('template/admin_header', $data);
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('template/admin_topbar', $data);
        $this->load->view('admin_menu/detail_karyawan', $data);
        $this->load->view('template/admin_footer', $data);
    }


    public function blog()
    {
        $data['judul'] = 'Blog';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // query tabelnya (ambil tabelnya)
        $data['blog'] = $this->db->get_where('blog')->result_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        //set rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');


        if ($this->form_validation->run() == false) {

            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/blog', $data);
            $this->load->view('template/admin_footer', $data);
        } else {

            $config['upload_path']      = './front-end/assets/img/blog';
            $config['allowed_types']    = 'png|jpg|jpeg|gif';
            $config['max_size']         = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Foto Blog Anda belum diupload! </div>');
                redirect('admin_menu/blog');
            } else {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $judul          = $this->input->post('judul', true);
                $slug           = $this->input->post('slug', true);
                $isi_blog       = $this->input->post('isi_blog', true);
                $created_by     = $this->input->post('created_by', true);
            }

            $data = [
                'judul'        => $judul,
                'image'        => $gambar,
                'slug'         => $slug,
                'isi_blog'     => $isi_blog,
                'created_by'   => $created_by,
                'created_at'   => time()

            ];
            //insert ke tabel admin menu
            $this->db->insert('blog', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Data blog anda sudah ditambahkan! </div>');
            redirect('admin_menu/blog');
        }
    }
}
