<?php

namespace App\Services;

use App\Models\PageInfo;

class PageService
{
    public function getPageData($pageName): array {
        return PageInfo::where(['page_name' => $pageName])->first()->toArray();
    }
}
