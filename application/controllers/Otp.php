<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Otp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Test";
        $this->load->view('whatsapp/otp');
    }
    public function send_otp()
    {
        // Logika untuk mengirim OTP ke WhatsApp di sini
        // Anda dapat menggunakan pustaka seperti Twilio atau WhatsApp API untuk mengirim pesan WhatsApp.

        // Setelah mengirim OTP, simpan data pengguna dan OTP ke database
        $phone_number = $this->input->post('phone_number');
        $otp_code = '123456'; // Generate OTP sesuai kebutuhan Anda
        $otp_expiry = date('Y-m-d H:i:s', strtotime('+5 minutes'));
        $this->Produk->create_user($phone_number, $otp_code, $otp_expiry);

        // Redirect atau berikan respons sesuai kebutuhan Anda
    }
}
