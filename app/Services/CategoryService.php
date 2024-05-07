<?php

namespace App\Services;

use App\Models\ServiceCategory;

class CategoryService
{
    public function getServices($categoryName): array {
        $category = ServiceCategory::where(['category_name' => $categoryName])->first();
        $serviceList = [];
        if($category) {
            $categoryServices = $category->services;
            if($categoryServices) {
                $counter = 1;
                foreach ($categoryServices as $service) {
                    $type = 'not even';
                    if($counter % 2 == 0) {
                        $type = 'even';
                    }
                    $serviceList[] = [
                        'name' => $service->name,
                        'img' => $service->img,
                        'type' => $type
                    ];
                    $counter++;
                }
            }
        }

        return $serviceList;
    }
}
