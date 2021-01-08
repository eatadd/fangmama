<?php

namespace app\index\controller;


class Consultant extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'name' => '割手的小松鼠', 'mobile' => '15751451609', 'date' => '2019-7-8'],
                ['id' => 2, 'name' => '房妈妈', 'mobile' => '18800639929', 'date' => '2019-7-8'],
                ['id' => 3, 'name' => 'xiaolin', 'mobile' => '15151138833', 'date' => '2019-7-8'],
                ['id' => 4, 'name' => '吴先生', 'mobile' => '13088807775', 'date' => '2019-7-8'],
                ['id' => 5, 'name' => '两重心字罗衣', 'mobile' => '18765340987', 'date' => '2019-7-8'],
                ['id' => 6, 'name' => '永恒的心CK', 'mobile' => '18115226785', 'date' => '2019-7-8'],
                ['id' => 7, 'name' => '割手的小松鼠', 'mobile' => '15751451609', 'date' => '2019-7-8'],
                ['id' => 8, 'name' => '房妈妈', 'mobile' => '18800639929', 'date' => '2019-7-8'],
                ['id' => 9, 'name' => 'xiaolin', 'mobile' => '15151138833', 'date' => '2019-7-8'],
                ['id' => 10, 'name' => '吴先生', 'mobile' => '13088807775', 'date' => '2019-7-8'],
                ['id' => 11, 'name' => '两重心字罗衣', 'mobile' => '18765340987', 'date' => '2019-7-8'],
                ['id' => 12, 'name' => '永恒的心CK', 'mobile' => '18115226785', 'date' => '2019-7-8'],
            ],
            'field' => [
                ['label' => '用户名', 'prop' => 'name'],
                ['label' => '联系方式', 'prop' => 'mobile'],
                ['label' => '成为时间', 'prop' => 'date'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];
    public $info = [
        'data' => [
            'field' => [
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'text'],
            ],
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];

    public $edit = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'value' => 'name', 'type' => 'text'],
                ['title' => '性别', 'value' => [['title'=>'男','value'=>1],['title'=>'女','value'=>2]], 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];
//    protected function initialize()
//    {
//        parent::initialize();
//    }

    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Consultant/lists');
    }
}
