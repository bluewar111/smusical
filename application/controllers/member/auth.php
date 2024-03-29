<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 사용자 인증 컨트롤러
 */

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> load -> model('member/auth_m');
        $this -> load -> helper('form');
    }

    public function index() {
        $this -> login();
    }

    public function _remap($method) {
        $this -> load -> view('_header');

        if (method_exists($this, $method)) {
            $this -> {"{$method}"}();
        }

        $this -> load -> view('_footer');
    }

    /**
     * 로그인 처리
     */
    public function login() {
        $this -> load -> library('form_validation');

        $this -> load -> helper('alert');

        $this -> form_validation -> set_rules('uid', '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules('upw', '비밀번호', 'required');

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

        if ($this -> form_validation -> run() == TRUE) {
            $auth_data = array(
                'username' => $this -> input -> post('uid', TRUE),
                'password' => $this -> input -> post('upw', TRUE)
            );

            $result = $this -> auth_m -> login($auth_data);

            if ($result) {
                $newdata = array(
                    'id' => $result -> col_id,
                    'name' => $result -> col_name,
                    'grp' => $result -> col_grp,
                    'logged_in' => TRUE
                );

                $this -> session -> set_userdata($newdata);

                alert('로그인 되었습니다.', '/');
                exit;
            } else {
                alert('아이디나 비밀번호를 확인해 주세요.', '/member/login');
                exit;
            }
        } else {
            $this -> load -> view('auth/login_v');
        }
    }

    public function logout() {
        $this -> load -> helper('alert');

        $this -> session -> sess_destroy();

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        alert('로그아웃 되었습니다.', '/');
        exit;
    }
}
