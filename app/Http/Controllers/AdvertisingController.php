<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisingController extends BaseController
{
    public function index() {
        $pageName = 'advertising';
        $pageInfo = $this->pageService->getPageData($pageName);
        $categoryName = 'advertising';
        $serviceInfo = $this->categoryService->getServices($categoryName);
        return view('advertising', ['page_info' => $pageInfo, 'services' => $serviceInfo]);
    }
}
