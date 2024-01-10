<?php

namespace App\Controllers;
use App\Models\LinkModel;
class LinkController extends BaseController
{                                                               
    private LinkModel $model;
    public function __construct(){
        $this->model=new LinkModel;
    }
    public function index(){
      
    }
}