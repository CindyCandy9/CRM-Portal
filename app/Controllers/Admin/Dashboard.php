<?php 

namespace App\Controllers\Admin;

class Dashboard extends BaseController
{
    public function __construct() {
        $this->activeLinkPage = 'main';
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

    public function Index()
    {
        return $this->Render('Dashboard', 'admin/Dashboard');
    }
}