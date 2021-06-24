<?php
namespace App\Controllers;

class Auth extends BaseController {

    public function login() {
        if (session('id_user')) {
            return redirect()->to(base_url('/'));
        }
        return view('auth/login', ['title' => 'Sign In']);
    }
    public function register() {
        if (session('id_user')) {
            return redirect()->to(base_url('/'));
        }
        $data = [
            'title' => 'Sign Up',
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/register', $data);
    }
    public function verification() {
        if (!$this->validate(
            [
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must fill in your full name',
                    ],
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must fill in your password',
                    ],
                ],
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('auth'))->withInput()->with('validation', $validation);
        }
        $post = $this->request->getPost();
        if (!$this->authModel->login($post) == false) {
            $params = [
                'id_user' => $this->authModel->login($post),
                'role' => $this->authModel->findRole($this->authModel->login($post)),
            ];
            if (isset($post['remember'])) {
                setcookie('remember', password_hash($this->authModel->login($post), PASSWORD_BCRYPT), 86400);
            }
            session()->set($params);
            session()->setFlashdata('success', ['title' => 'Success', 'message' => 'Login Success!']);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('success', ['title' => 'Error', 'message' => 'Email or Password is incorrect!']);
            return redirect()->to(base_url('auth'));
        }
    }
    public function registration() {
        if (!$this->validate(
            [
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must fill in your full name',
                    ],
                ],
                'email' => [
                    'rules' => 'required|is_unique[users.email_user]',
                    'errors' => [
                        'required' => 'You must fill in your full name',
                        'is_unique' => 'E-mail already registered',
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                        'required' => 'You must fill in your password',
                        'min_length' => 'Enter a password of at least 10 characters',
                    ],
                ],
                'password-confirm' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'You must fill in your password confirmation',
                        'matches' => 'Password confirmation must be the same as the password field',
                    ],
                ],
            ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('auth/register'))->withInput()->with('validation', $validation);
        }

        $post = $this->request->getPost();
        $this->authModel->save([
            'name_user' => $post['name'],
            'email_user' => $post['email'],
            'password_user' => password_hash($post['password'], PASSWORD_DEFAULT),
        ]);
        session()->setFlashdata('success', ['title' => 'Registered', 'message' => 'Please login again!']);
        return redirect()->to(base_url('auth'));

    }
    public function logout() {
        session();
        session_destroy();
        session_unset();
        delete_cookie('remember');
        session()->setFlashdata('success', ['title' => 'Success', 'message' => 'Logout Success']);
        return redirect()->to(base_url('auth'));
    }
}