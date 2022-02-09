<?php

class home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('user');
        $user->name = $name;
        $this->view('home/index',['name' => $user->name]);
    }

}