<?php

namespace app\index\controller;


class Serviceorderp extends Publics
{
    // 派单
    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Serviceorderp/lists');
    }

    public function info()
    {
        return $this->fetch('Serviceorderp/info');
    }

    public function add()
    {
        return $this->fetch('Serviceorderp/add');
    }

    public function edit()
    {
        return $this->fetch('Serviceorderp/add');
    }

}
