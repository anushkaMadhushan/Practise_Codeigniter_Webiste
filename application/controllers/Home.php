<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {

        $data['title'] = 'Home|Weclome';
        $data['view_page'] = 'homepage';
        $this->load->view('site', $data);
    }
    public function About()
    {

        $data['view_page'] = 'about';
        $this->load->view('site', $data);
    }
}
