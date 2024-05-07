<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\PageService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public CategoryService $categoryService;
    public PageService $pageService;

    public function __construct(CategoryService $categoryService, PageService $pageService)
    {
        $this->categoryService = $categoryService;
        $this->pageService = $pageService;
    }
}
