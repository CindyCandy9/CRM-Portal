<?php 

namespace App\Controllers\User;

class Dashboard extends BaseController
{
    public function __construct() {
        $this->UserModel = new \App\Models\User\UserModel();
        $this->SidebarModel = new \App\Models\User\SidebarModel();
        $this->activeLinkPage = 'main';
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

    public function Index()
    {
        $data[0] = $this->UserModel->FetchNewLeads($_SESSION["user_id"]);
        $data[1] = $this->UserModel->FetchPendingLeads($_SESSION["user_id"]);
        $data[2] = $this->UserModel->FetchConvertedLeads($_SESSION["user_id"]);
        $data[3] = $this->UserModel->FetchTotalLeads($_SESSION["user_id"]);
        $data[4] = $this->UserModel->FetchNewLeadsDetails($_SESSION["user_id"]);
        $data[5] = $this->UserModel->FetchPendingLeadsDetails($_SESSION["user_id"]);
        return $this->Render('Dashboard', 'user/Dashboard', $data);
    }
}