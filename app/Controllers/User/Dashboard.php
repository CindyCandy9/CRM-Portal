<?php 

namespace App\Controllers\User;

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

        echo view('user/common/Header', $header);
        echo view('user/common/Layout', $layout);
        echo view('user/common/Footer', []);
    }

    public function Index()
    {
        return $this->Render('Dashboard', 'user/Dashboard');
    }
}