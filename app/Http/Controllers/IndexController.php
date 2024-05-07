<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index() {
        $pageName = 'index';
        $pageInfo = $this->pageService->getPageData($pageName);

        return view('index', ['page_info' => $pageInfo]);
    }
}
