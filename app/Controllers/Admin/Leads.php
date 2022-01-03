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
        return $this->Render('Add Lead', 'admin/leads/AddLead', $data);
    }

    public function InsertLead() {
        $client_name = $this->request->getVar('client_name');
        $client_phone = $this->request->getVar('client_phone');
        $project = $this->request->getVar('project_id');
        $lead_date = $this->request->getVar('lead_date');

        if ($client_phone == NULL || $lead_date == NULL || $project == NULL) {
            session()->setFlashdata('ResponseMessageError', 'Please fill all the required information to continue.');
            return redirect()->to(site_url('admin/leads/add'));
        }

        $data = array (
            "lead_client_name" => $client_name,
            "lead_client_phone" => $client_phone,
            "lead_project_id" => $project,
            "lead_date" => date("Y-m-d H:i:s",strtotime($lead_date)),
        );
        
        $result = $this->LeadsModel->InsertLead($data);

        if($result) {
            session()->setFlashdata('ResponseMessageSuccess', 'Lead was successfully added to database.');
            return redirect()->to(site_url('admin/leads'));
        } else {
            session()->setFlashdata('ResponseMessageError', 'There was an error while adding lead. Please try again later.');
            return redirect()->to(site_url('admin/leads'));
        }
    }
}