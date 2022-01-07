<?php 

namespace App\Controllers\User;

class Leads extends BaseController
{
    public function __construct() {
        $this->UserModel = new \App\Models\User\UserModel();
        $this->SidebarModel = new \App\Models\User\SidebarModel();
        $this->activeLinkPage = 'leads';
    }
    public function Render($pageTitle = null, $page = null, $data = null) {
        $header = [
            'subTitle' => $pageTitle,
            'activePage' => $this->activeLinkPage,
            'data' => $this->SidebarModel->FetchNewLeads($_SESSION["user_id"]),
        ];

        $layout = [
            'page' => $page,
            'data' => $data,
        ];

        echo view('user/common/Header', $header);
        echo view('user/common/Layout', $layout);
        echo view('user/common/Footer', []);
    }

    public function EditLead($lead_id) {
        return $this->Render('Lead', 'user/leads/EditLead');
    }
}