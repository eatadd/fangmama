<?php

namespace app\index\controller;

use think\Controller;

class Publics extends Controller
{
    protected function initialize()
    {
//        echo $this->data;
//        $this->lists();
    }

    public function lists()
    {
        $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Publics/lists', $this->lists);
    }

    public function info()
    {
        $this->info['data'] = json_encode($this->info['data']);
        return $this->fetch('Publics/info', $this->info);
    }

    public function add()
    {
        $this->add['data'] = json_encode($this->add['data']);
        return $this->fetch('Publics/add', $this->add);
    }

    public function edit()
    {
        $this->edit['data'] = json_encode($this->edit['data']);
        return $this->fetch('Publics/add', $this->edit);
    }
}
