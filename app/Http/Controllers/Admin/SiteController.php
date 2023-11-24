<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SiteResource;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $model;
    public function __construct(Site $site)
    {
        $this->model = $site;
    }
    public function index(){
        $sites = $this->model->all();
        return view('admin.sites.index', compact('sites'));
        // return SiteResource::collection($sites);
    }
}
