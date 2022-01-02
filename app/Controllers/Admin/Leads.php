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
}