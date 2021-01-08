<?php

namespace app\index\controller;


class Serviceorderq extends Publics
{
    // 抢单

    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Serviceorderq/lists');
    }

    public function info()
    {
        return $this->fetch('Serviceorderq/info');
    }

    public function add()
    {
        return $this->fetch('Serviceorderq/add');
    }

    public function edit()
    {
        return $this->fetch('Serviceorderq/add');
    }

}
