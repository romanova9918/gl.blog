<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use http\Env\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\Admin\Category\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request -> validated();
        Category::firstOrCreate(['title' => $data['title']]);
        return redirect()-> route('admin.category.index');
    }
}
