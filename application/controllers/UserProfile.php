<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserProfile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CountryModel');
        $this->load->model('Login_model');
        $this->load->model('EditDataModel');
    }

    public function index()
    {

        if ($this->session->userdata('user_data')) {
            // var_dump($_SESSION["username"]);
            $username = $this->session->userdata('username');

            // var_dump($username);
            // die();
            $data['data'] = $this->Login_model->get_user($username);
            //Progress Calculations
            $count = 1;
            $profile1 = $this->Login_model->fill_professional_details($data['data'][0]->user_id);
            $profile2 = $this->Login_model->fill_astrological_details($data['data'][0]->user_id);
            $profile3 = $this->Login_model->fill_family_details($data['data'][0]->user_id);
            $profile4 = $this->Login_model->fill_document_details($data['data'][0]->user_id);
            if ($profile1 == true) $count = $count + 1;
            if ($profile2 == true) $count = $count + 1;
            if ($profile3 == true) $count = $count + 1;
            if ($profile4 == true) $count = $count + 1;
            $profile_per = ($count * 100) / 5;
            $data['profile_per'] = $profile_per;


            $data['religion'] = $this->CountryModel->getReligionById($data["data"][0]->religion_id);
            $data['caste'] = $this->CountryModel->getCasteById(
                $data["data"][0]->caste_id
            );
            $data['membership'] = $this->Login_model->get_count_left($data['data'][0]->user_id);
            $data['interest'] = $this->Login_model->get_interest($data['data'][0]->user_id);
            $data['interest_to'] = $this->Login_model->get_interest_to($data['data'][0]->user_id);
            $data['message'] = $this->Login_model->get_message($data['data'][0]->user_id);
            $data['message_to'] = $this->Login_model->get_message_to($data['data'][0]->user_id);
            $data['photo_request'] = $this->Login_model->photo_request_from($data['data'][0]->user_id);
            $data['photo_request_to'] = $this->Login_model->photo_request_to($data['data'][0]->user_id);
            // var_dump($data['interest']);
            // die();
            $data['documents'] = $this->EditDataModel->fetchDocuments($data["data"][0]->user_id);
            $this->load->view('nav');
            $this->load->view('memberprofile', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Admin_Login");
        }
    }


    public function get_interest_list()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_interest_list($id);
    }
    public function get_interest_list_to()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_interest_list_to($id);
    }
    public function get_message_list()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_message_list($id);
    }
    public function get_message_list_to()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_message_list_to($id);
    }

    public function get_photo_from()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_photo_from($id);
    }
    public function get_photo_to()
    {
        $id = $_POST['id'];
        echo $this->Login_model->get_photo_to($id);
    }
    public function contact_by_me()
    {
        $from = $_POST['id'];
        // $to = $this->session->userdata('user_id');
        echo $this->Login_model->contact_by_me($from);
    }
    public function contact_of_me()
    {
        $from = $_POST['id'];
        // $to = $this->session->userdata('user_id');
        echo $this->Login_model->contact_of_me($from);
    }
    public function update_photo_request()
    {
        $from = $_POST['id'];
        $to = $this->session->userdata('user_id');
        // // $to = $_POST['uid'];
        // $userdata = array(
        //     'id_from' => $from,
        //     'id_to' => $to
        // );
        echo $this->Login_model->update_photo_request($from, $to);
    }
    public function delete_data1()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_data($from, $to);
    }
    public function delete_data2()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_data($to, $from);
    }
    public function delete_data3()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_message($from, $to);
    }
    public function delete_data4()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_message($to, $from);
    }
    public function delete_data5()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_photo_r($from, $to);
    }

    public function delete_data6()
    {
        $from = $_POST['id'];
        $to = $to = $this->session->userdata('user_id');
        echo $this->Login_model->delete_photo_r($to, $from);
    }
}
