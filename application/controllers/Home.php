<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {

        // query tabelnya (ambil tabelnya)
        $data['about'] = $this->db->get_where('about')->result_array();
        $data['banner_img'] = $this->db->get_where('banner_img')->result_array();
        $data['film_baru'] = $this->db->get_where('film_baru')->result_array();
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();
        $data['blog'] = $this->db->get_where('blog')->result_array();

        $this->load->view('template/home_header', $data);
        $this->load->view('template/home_navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/home_footer', $data);
    }

    public function about()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/about');
        $this->load->view('template/home_footer');
    }

    public function portfolio()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/portfolio');
        $this->load->view('template/home_footer');
    }

    public function team()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/team');
        $this->load->view('template/home_footer');
    }

    public function myAccount()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/myAccount');
        $this->load->view('template/home_footer');
    }

    public function signIn()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/signIn');
        $this->load->view('template/home_footer');
    }

    public function logIn()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/logIn');
        $this->load->view('template/home_footer');
    }

    public function blog()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/blog');
        $this->load->view('template/home_footer');
    }

    public function contact()
    {
        $this->load->view('template/home_header');
        $this->load->view('template/home_navbar');
        $this->load->view('home/contact');
        $this->load->view('template/home_footer');
    }
}
