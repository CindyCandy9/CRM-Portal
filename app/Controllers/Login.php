<?php 

namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('authentication/Login');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_fullname'],
                    'user_email'    => $data['user_email'],
                    'user_role'    => $data['user_user_role_id'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if ($data['user_user_role_id'] == 1) {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }
                
            }else{
                $session->setFlashdata('ResponseMessageError', 'Email or Password is incorrect. Please try again.');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('ResponseMessageError', 'Email or Password is incorrect. Please try again.');
            return redirect()->to('/');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 