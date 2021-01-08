<?php

namespace app\index\controller;


class Serviceordery extends Publics
{
    // 约单
    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Serviceordery/lists');
    }

    public function info()
    {
        return $this->fetch('Serviceordery/info');
    }

    public function add()
    {
        return $this->fetch('Serviceordery/add');
    }

    public function edit()
    {
        return $this->fetch('Serviceordery/edit');
    }

}
