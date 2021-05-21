<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->login) redirect(base_url());
    }

    public function index()
    {
        show_404();
    }
    
    public function chatUser($user = '')
    {
        return view('chat');
    }

    public function getOnlineUser()
    {
        try {
            $user = $this->db->select('username')->from('users')->where(['online' => '1'])->get();
            $message = [
                'message' => 'ok',
                'data' => $user->result()
            ];
        } catch (\Throwable $th) {
            $message = [
                'status' => 'fail',
                'message' => $th->getMessage()
            ];
        } catch (\Exception $ex) {
            $message = [
                'status' => 'fail',
                'message' => $ex->getMessage()
            ];
        } finally {
            echo json_encode($message);
        }
    }
}
