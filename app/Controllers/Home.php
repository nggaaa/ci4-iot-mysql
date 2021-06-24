<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {
        // $this->dataModel->apiHandler(['api' => 'api', 'key' => 'key']);
        $data = [
            'title' => 'Home',
            'user' => $this->userModel->userData(session('id_user')),
            'totaluser' => $this->userModel->totalUser(),
            'totalapi' => $this->apiModel->totalapi(),
            'totaldata' => $this->dataModel->totaldata(),
        ];
        return view('home/index', $data);
    }
    public function data() {
        $data = [
            'title' => 'Data',
            'user' => $this->userModel->userData(session('id_user')),
            'data' => $this->dataModel->findAll(),
        ];
        return view('home/datalist', $data);
    }
    public function device() {
        $data = [
            'title' => 'Device',
            'user' => $this->userModel->userData(session('id_user')),
            'device' => $this->apiModel->findAll(),
        ];
        // dd($data);
        return view('home/devicelist', $data);
    }
    public function user() {
        $data = [
            'title' => 'Users List',
            'user' => $this->userModel->userData(session('id_user')),
            'userlist' => $this->userModel->findAll(),
        ];
        // dd($data);
        return view('home/userlist', $data);
    }

    public function deleteapi($id) {
        $this->apiModel->delete($id);
        return redirect()->to(base_url('device'));
    }
    public function addapi() {
        $this->apiModel->addApi();
        return redirect()->to(base_url('device'));
    }
    public function roleupdate($id) {
        $user = $this->userModel->userData($id);
        $roleawal = $user['role'];
        if ($roleawal == 1) {
            $rolebaru = 2;
        } else {
            $rolebaru = 1;
        }
        $this->userModel->save([
            'id_user' => $id,
            'role' => $rolebaru,
        ]);
        return redirect()->to(base_url('users'));
    }
    public function deleteuser($id) {
        $this->userModel->delete($id);
        return redirect()->to(base_url('users'));
    }
}
