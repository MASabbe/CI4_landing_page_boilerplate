<?php namespace App\Controllers;

class Privacy extends BaseController
{
    public function index()
    {
        $data['title']   = 'Pena';
        return view('pages/privacy/index', $data);
    }
}