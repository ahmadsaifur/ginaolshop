<?php
defined('BASEPATH') or exit('No direct script access allowed');

// namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Produk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function about($slug)
    {

        $datax = $this->Produk->fetch_data('produk', ['slug' => $slug])->row_array();
        if ($datax) {

            $produk = $this->Produk->fetch_data('spesifikasi_detail', ['slug' => $slug])->result();
            $isi_paket = $this->Produk->fetch_data('isi_paket', ['slug' => $slug])->result();
            $data['isi_paket'] = $isi_paket;
            $data['produk'] = $produk;
            $data['data'] = json_encode($datax);
            $this->template->load('template2', 'templating/home', $data);
        } else {
            redirect('welcome/index');
        }
    }



    public function behelgigi()
    {
        $uri = $this->uri->segment(2);
        $post = $this->Dokter->fetch_data('article')->result();
        $postid = $this->Dokter->fetch_data('article', ['slug' => $uri])->row();
        $data['uri'] = $uri;
        $data['title'] = $postid->title;
        $data['headmeta'] = " Alkindi  ";
        $data['post'] = $post;
        $data['artikel'] = $postid;
        $data['data'] =
            [
                'title' => "Gigi Sehat | Behel Gigi",
                'headmeta' => 'Alkindi ',
                'post' => $post,
                'artikel' => $postid
            ];
        $this->template->load('template', 'home/' . $uri, $data);
    }
    public function scalling()
    {
        $post = $this->Dokter->fetch_data('article')->result();
        $postid = $this->Dokter->fetch_data('article', ['slug' => 'scalling'])->row();
        $slug = 'scalling';
        $data['title'] = "Gigi Sehat";
        $data['headmeta'] = " Alkindi  ";
        $data['artikel'] = $postid;
        $data['data'] =
            [
                'title' => "Gigi Sehat | Scalling Gigi",
                'headmeta' => 'Alkindi ',
                'artikel' => $postid,
                'post' => $post,
            ];
        $this->template->load('template', 'home/' . $slug, $data);
    }
    public function bleaching()
    {
        $post = $this->Dokter->fetch_data('article')->result();
        $postid = $this->Dokter->fetch_data('article', ['slug' => 'bleaching'])->row();
        $slug = 'scalling';
        $data['title'] = "Gigi Sehat";
        $data['headmeta'] = " Alkindi  ";
        $data['post'] = $post;
        $data['data'] =
            [
                'title' => "Gigi Sehat | Bleaching Gigi",
                'headmeta' => 'Alkindi ',
                'artikel' => $postid,
                'post' => $post,
            ];
        $this->template->load('template', 'home/' . $slug, $data);
    }

    public function kirimProduk($id_produk)
    {
        $data['produk'] = $this->Produk->fetch_data('produk', ['id' => $id_produk])->row();
        $this->template->load('template', 'templating/kirimemail', $data);
    }
    public function kirimEmail($id_produk)
    {


        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required|trim');
        $this->form_validation->set_rules('banyaknya', 'banyaknya', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['produk'] = $this->Produk->fetch_data('produk', ['id' => $id_produk])->row();
            $this->template->load('template', 'templating/kirimemail', $data);
        } else {


            $fullname           = $this->input->post('fullname');
            $address            = $this->input->post('alamat');
            $phone              = $this->input->post('phonenumber');
            $produk             = $this->input->post('produk');
            $banyaknya          = $this->input->post('banyaknya');
            $totalnya          = $this->input->post('harga_total');
            $subject            = "Kirim Produk ";
            $message            = "
        <label> Fullname  :  </label> <b> $fullname </b> <br>
        <label> Alamat  :  </label> <b>   $address </b> <br>
        <label> No Telepon  :  </label> <b>  $phone </b> <br>
        <label> Produk  :  </label> <b>   $produk </b> <br>
        <label> Banyaknya  :  </label> <b>   $banyaknya </b> <br>
        <label> totalnya  :  </label> <b>  $totalnya </b> <br>
        <a href='https://api.whatsapp.com/send?phone=$phone&text=Halo%20$fullname%20Saya%20Mau%20Konfirmasi%20Pesanan%20Anda%20Untuk%20Produk%20$produk%20Dengan%20Alamat%20$address%20Apakah%20Sudah%20Benar?' style='padding:8px 40px 8px 40px;border-radius:3px;background-color: rgb(238, 77, 45);
    text-align: -webkit-center;'> Pesan Whatsapp</a>";

            // Load PHPMailer library
            $this->load->library('phpmailer_lib');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();

            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'srv133.niagahoster.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'saifur@ginaolshop.com';
            $mail->Password = '22Mei2013@AHM';
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('saifur@ginaolshop.com', 'Kirim Produk Markaryoshop'); // ubah dengan alamat email Anda
            $mail->addAddress('ahmadsaifur33@gmail.com');
            $mail->addReplyTo('saifur@ginaolshop.com', 'Kirim Produk Markaryoshop'); // ubah dengan alamat email Anda


            $mail->Subject = $subject;
            $mail->isHTML(true);
            $mail->Body = $message;
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo '<h2 class="text-primary"> Terimakasih Telah Order Produk Kami</h2>';
            }
        }
    }
    public function aktivasiemail2($email, $token)
    {

        $tujuan = $email;
        $nama = $this->input->post('name');
        // PHPMailer object
        $response = false;
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host     = 'srv133.niagahoster.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@dos.id'; // user email
        $mail->Password = '22Mei2013@'; // password email
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('admin@dos.id', 'Berkah Application'); // user email
        $mail->addReplyTo('admin@dos.id', 'Berkah Application'); //user email

        // Add a recipient
        $mail->addAddress($tujuan); //email tujuan pengiriman email

        // Email subject
        $mail->Subject = 'Aktivasi User Account'; //subject email

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h4>Halo, " . $nama . " Salam Sehat!</h4><br>
                        <h5>Berikut kode konfirmasi Activasi password anda: " . $token . "</h5><br>
                        Silahkan Klik link Activasi ini Dengan Klik Link Dibawah Ini <br>
                        <a href =" . base_url() . "auth/verify?email=" . $email . "&token=" . $token . ">Aktivasi</a> untuk aplikasi Berkah Application,<br>Terima Kasih";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {

            $response = array(
                'message' => "Kode konfirmasi gagal dikirim.",
                'isi' => "Error: " . $mail->ErrorInfo
            );
            //echo 'Kode konfirmasi gagal dikirim.';
            //echo 'Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Kode konfirmasi berhasil dikirm, silahkan cek email anda';
            $response = array(
                'message' => "success",
                'isi' => "Kode Link Activasi berhasil dikirm ke email :" . $email
            );
        }

        return $response;
    }
    public function send()
    {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'srv133.niagahoster.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'saifur@ginaolshop.com';
        $mail->Password = '22Mei2013@AHM';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('saifur@ginaolshop.com', 'Kirim Produk Markaryoshop'); // ubah dengan alamat email Anda
        $mail->addAddress('ahmadsaifur33@gmail.com');
        $mail->addReplyTo('saifur@ginaolshop.com', 'Kirim Produk Markaryoshop'); // ubah dengan alamat email Anda


        // $mail->setFrom('info@example.com', 'CodexWorld');
        // $mail->addReplyTo('info@example.com', 'CodexWorld');

        // Add a recipient
        // $mail->addAddress('john.doe@gmail.com');

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
                <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
