<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slicing extends CI_Controller
{

    public function index()
    {
        $this->load->view('Slicing/landingp');
    }

    public function daftar()
    {

        $this->load->view('Slicing/daftar');
    }
}
