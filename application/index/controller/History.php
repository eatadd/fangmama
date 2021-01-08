<?php

namespace app\index\controller;


class History extends Publics
{

    public function lists()
    {
        return $this->fetch('History/lists');
    }

}
