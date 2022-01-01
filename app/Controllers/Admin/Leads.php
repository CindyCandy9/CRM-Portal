<?php 

namespace App\Controllers\Admin;

class Leads extends BaseController
{
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

    public function Index()
    {
        return $this->Render('Leads', 'admin/leads/Dashboard');
    }
}