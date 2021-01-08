<?php

namespace app\index\controller;


class Customer extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房'],
                ['id' => 5, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房'],
                ['id' => 6, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房'],
                ['id' => 7, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房'],
                ['id' => 8, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房'],
                ['id' => 9, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房'],
                ['id' => 10, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房'],
                ['id' => 11, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房'],
                ['id' => 12, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房'],
                ['id' => 13, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房'],
                ['id' => 14, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房'],
                ['id' => 15, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房'],
                ['id' => 16, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房'],
                ['id' => 17, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房'],
                ['id' => 18, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房'],
                ['id' => 19, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房'],
                ['id' => 20, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房'],
            ],
            'menuItem' => [
                ['title' => '查看详情', 'src' => 'info'],
                ['title' => '客源跟进', 'src' => '/customer_follow/lists'],
                ['title' => '客源签约', 'src' => '/customer_sign/lists'],
            ],
            'field' => [
                ['label' => '姓名', 'prop' => 'name'],
                ['label' => '性别', 'prop' => 'sex'],
                ['label' => '类型', 'prop' => 'type'],
                ['label' => '备注', 'prop' => 'remark'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];
    public $info = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'value' => '拼吧小子','type'=>'text'],
                ['title' => '性别', 'value' => '男','type'=>'text'],
                ['title' => '类型', 'value' => '租房','type'=>'text'],
                ['title' => '备注', 'value' => '无','type'=>'text'],
            ],
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'value' => 'name', 'type' => 'text'],
                ['title' => '性别', 'value' => [['title'=>'男','value'=>1],['title'=>'女','value'=>2]], 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '备注', 'value' => 'remark', 'type' => 'textarea'],
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

    public function lists()
    {
        // type 1=买 2=卖 3=租
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('Customer/lists');
    }

    public function info()
    {
        return $this->fetch('Customer/info');
    }

    public function add()
    {
        // $list = cache('store');
        // var_dump($list);die;
        // Array ( [0] => Array ( [store_id] => 1 [user_id] => 1 [title] => 房妈妈宝龙店 [logo] => /uploads/picture/2018-04-17/5ad5626d14a6d.jpg [status] => 1 [default] => 1 ) )
        $this->add['data'] = json_encode($this->add['data']);

        return $this->fetch('Customer/add', $this->add);
    }

    public function edit()
    {
        return $this->fetch('Customer/add');
    }
//    protected function initialize()
//    {
//        parent::initialize();
//    }

}
