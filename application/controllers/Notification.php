<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        // $this->load->model('notif_model');
        $this->load->model(array('notif_model'));
    }

    public function index(){
        $this->read();
    }

    public function read(){
        $data_notif = $this->notif_model->read();
        $notif = $this->notif_model->count();
		$count = count($notif);

        $output = array(
			'list' => 'Notification',

            'data_notif' => $data_notif,

            'notif' => $notif,

            'count' => $count,

			'theme_page' => 'admin/notif/index',
		);
		$this->load->view('theme/index', $output);
    }

    public function markread($id) {
        $data = [
            'is_read' => 1
        ];
        $this->session->set_flashdata('msg', '<div class="alert alert-success"> Notif berhasil diperbarui</div>');
        $this->db->update('notif', $data, ['id' => $id]);

		return redirect(base_url('notification/index'));
    }

    public function allmarkread() {
        $notif = $this->notif_model->count();

        for($i = 0; $i < count($notif); $i++){
            $data = [
                'is_read' => 1
            ];
            $this->db->update('notif', $data, ['id' => $notif[$i]['id']]);
        }
        $this->session->set_flashdata('msg', '<div class="alert alert-success"> Notif berhasil diperbarui</div>');
            
		return redirect(base_url('notification/index'));
    }

    public function delete() {
        $this->db->empty_table('notif');
        $this->session->set_flashdata('msg', '<div class="alert alert-success"> Notif berhasil diperbarui</div>');
            
		return redirect(base_url('notification/index'));
    }
}
