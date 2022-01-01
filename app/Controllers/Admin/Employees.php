<?php 

namespace App\Controllers\Admin;
use App\Models\EmployeesModel;

class Employees extends BaseController
{
    public function __construct() {
        $this->EmployeesModel = new \App\Models\EmployeesModel();
    }

    public function Render($pageTitle = null, $page = null, $data = null) {
        $header = [
            'subTitle' => $pageTitle,
        ];

        $layout = [
            'page' => $page,
            'data' => $data,
        ];

        echo view('admin/common/Header', $header);
        echo view('admin/common/Layout', $layout);
        echo view('admin/common/Footer', []);
    }

    public function Index($page = 0)
    {
        $perPage = 10; $offset = $page * $perPage; 
        $data = $this->EmployeesModel->FetchEmployees(NULL, $perPage, $offset);
        return $this->Render('Employees', 'admin/employees/Dashboard', $data);
    }

    public function AddEmployee() {
        $data[0] = $this->EmployeesModel->FetchLocations();
        $data[1] = $this->EmployeesModel->FetchDepartments();
        $data[2] = $this->EmployeesModel->FetchSubDepartments();
        $data[3] = $this->EmployeesModel->FetchGenders();
        $data[4] = $this->EmployeesModel->FetchRoles();
        return $this->Render('Add Employee', 'admin/employees/AddEmployee', $data);
    }

    public function EditEmployee($id) {
        $data[0] = $this->EmployeesModel->FetchLocations();
        $data[1] = $this->EmployeesModel->FetchDepartments();
        $data[2] = $this->EmployeesModel->FetchSubDepartments();
        $data[3] = $this->EmployeesModel->FetchRoles();
        $data[4] = $this->EmployeesModel->FetchGenders();
        $data[5] = $this->EmployeesModel->FetchEmployees($id);
        return $this->Render('Edit Employee', 'admin/employees/EditEmployee', $data);
    }

    public function InsertEmployee() {
        $fullname = $this->request->getVar('user_fullname');
        $email = $this->request->getVar('user_email');
        $password = $this->request->getVar('user_password');
        $confirm_password = $this->request->getVar('user_confirm_password');
        $gender = $this->request->getVar('user_gender');
        $department = $this->request->getVar('user_department');
        $sub_department = $this->request->getVar('user_sub_department');
        $location = $this->request->getVar('user_location');
        $role = $this->request->getVar('user_role');

        if ($fullname == NULL || $email == NULL || $password == NULL || $confirm_password == NULL || $department == NULL || $sub_department == NULL || $location == NULL || $role == NULL) {
            session()->setFlashdata('ResponseMessageError', 'Please fill all the required information to continue.');
            return redirect()->to(site_url('admin/employees/add'));
        }

        if ($password != $confirm_password) {
            session()->setFlashdata('ResponseMessageError', 'Passwords do not match. Please confirm you are typing the same password.');
            return redirect()->to(site_url('admin/employees/add'));
        }

        $data = array (
            "user_fullname" => $fullname,
            "user_email" => $email,
            "user_password" => password_hash($password, PASSWORD_DEFAULT),
            "user_gender_id" => $gender,
            "user_location_id" => $location,
            "user_department_id" => $department,
            "user_sub_department_id" => $sub_department,
            "user_user_role_id" => $role,
        );
        
        $result = $this->EmployeesModel->InsertEmployee($data);

        if($result) {
            session()->setFlashdata('ResponseMessageSuccess', 'Employee was successfully added to database.');
            return redirect()->to(site_url('admin/employees'));
        } else {
            session()->setFlashdata('ResponseMessageError', 'There was an error while adding employee. Please try again later.');
            return redirect()->to(site_url('admin/employees'));
        }
    }

    public function UpdateEmployee($id) {
        $fullname = $this->request->getVar('user_fullname');
        $email = $this->request->getVar('user_email');
        $password = $this->request->getVar('user_password');
        $gender = $this->request->getVar('user_gender');
        $location = $this->request->getVar('user_location');
        $department = $this->request->getVar('user_department');
        $sub_department = $this->request->getVar('user_sub_department');
        $role = $this->request->getVar('user_role');
        
        if ($fullname == NULL || $email == NULL || $department == NULL || $sub_department == NULL || $role == NULL) {
            session()->setFlashdata('ResponseMessageError', 'Please fill all the required information to continue.');
            return redirect()->to(site_url('admin/employees/add'));
        }

        $data = array();

        if($password != NULL) {
            $data = array (
                "user_fullname" => $fullname,
                "user_email" => $email,
                "user_password" => password_hash($password, PASSWORD_DEFAULT),
                "user_gender_id" => $gender,
                "user_department_id" => $department,
                "user_sub_department_id" => $sub_department,
                "user_location_id" => $location,
                "user_user_role_id" => $role,
            );
        } else {
            $data = array (
                "user_fullname" => $fullname,
                "user_email" => $email,
                "user_department_id" => $department,
                "user_sub_department_id" => $sub_department,
                "user_location_id" => $location,
                "user_user_role_id" => $role,
            );
        }
        
        $result = $this->EmployeesModel->UpdateEmployee($id, $data);

        if($result) {
            session()->setFlashdata('ResponseMessageSuccess', 'Employee was successfully updated in database.');
            return redirect()->to(site_url('admin/employees'));
        } else {
            session()->setFlashdata('ResponseMessageError', 'There was an error while updating employee. Please try again later.');
            return redirect()->to(site_url('admin/employees'));
        }
    }

    public function EnableEmployee($id = null) {
        $data = array(
            'user_status' => 1,
        );

        $result = $this->EmployeesModel->EnableEmployee($id, $data);

        if($result) {
            session()->setFlashdata('ResponseMessageSuccess', 'Employee was successfully enabled.');
            return redirect()->to(site_url('admin/employees'));
        } else {
            session()->setFlashdata('ResponseMessageError', 'There was an error while disabling employee. Please try again later.');
            return redirect()->to(site_url('admin/employees'));
        }
    }

    public function DisableEmployee($id = null) {
        $data = array(
            'user_status' => 0,
        );

        $result = $this->EmployeesModel->DisableEmployee($id, $data);

        if($result) {
            session()->setFlashdata('ResponseMessageSuccess', 'Employee was successfully disabled.');
            return redirect()->to(site_url('admin/employees'));
        } else {
            session()->setFlashdata('ResponseMessageError', 'There was an error while enabling employee. Please try again later.');
            return redirect()->to(site_url('admin/employees'));
        }
    }
}