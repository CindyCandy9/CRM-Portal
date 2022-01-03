<?php 

namespace App\Controllers\Admin;

class Leads extends BaseController
{
    public function __construct() {
        $this->LeadsModel = new \App\Models\LeadsModel();
        $this->activeLinkPage = 'leads';
    }
    public function Render($pageTitle = null, $page = null, $data = null) {
        $header = [
            'subTitle' => $pageTitle,
            'activePage' => $this->activeLinkPage,
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
        $data = $this->LeadsModel->FetchLeads(NULL, $perPage, $offset);
        return $this->Render('Leads', 'admin/leads/Dashboard', $data);
    }

    public function AddLead() {
        $data[0] = $this->LeadsModel->FetchProjects();
        $data[1] = $this->LeadsModel->FetchUsers();
        $data[2] = $this->LeadsModel->FetchStatuses();
        return $this->Render('Add Lead', 'admin/leads/AddLead', $data);
    }

    public function InsertLead() {
        $client_name = $this->request->getVar('client_name');
        $client_phone = $this->request->getVar('client_phone');
        $lead_date = $this->request->getVar('lead_date');
        $project = $this->request->getVar('project_id');
        $employee_id = $this->request->getVar('employee_id');
        $status_id = $this->request->getVar('status_id');

        if ($client_name == NULL || $client_phone == NULL || $lead_date == NULL || $project == NULL || $status_id == NULL) {
            session()->setFlashdata('ResponseMessageError', 'Please fill all the required information to continue.');
            return redirect()->to(site_url('admin/leads/add'));
        }

        if ($employee_id != NULL) {
            
        } else {

        }
        
        
        
        // $result = $this->EmployeesModel->InsertEmployee($data);

        // if($result) {
        //     session()->setFlashdata('ResponseMessageSuccess', 'Employee was successfully added to database.');
        //     return redirect()->to(site_url('admin/employees'));
        // } else {
        //     session()->setFlashdata('ResponseMessageError', 'There was an error while adding employee. Please try again later.');
        //     return redirect()->to(site_url('admin/employees'));
        // }
    }
}