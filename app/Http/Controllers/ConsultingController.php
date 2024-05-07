<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingController extends BaseController
{
    public function index() {
        $pageName = 'consulting';
        $pageInfo = $this->pageService->getPageData($pageName);
        $categoryName = 'consulting';
        $serviceInfo = $this->categoryService->getServices($categoryName);
        return view('consulting', ['page_info' => $pageInfo, 'services' => $serviceInfo]);
    }
}
