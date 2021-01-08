<?php

namespace app\index\controller;


class StoreCustomer extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 1, 'name' => '拼吧小子', 'sex' => '男', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 2, 'name' => '封林', 'sex' => '男', 'remark' => '首付120万', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 3, 'name' => '吴先生', 'sex' => '女', 'remark' => '哈哈哈', 'type' => '租房', 'store_user' => '房妈妈'],
                ['id' => 4, 'name' => '金瑞凯', 'sex' => '女', 'remark' => '无', 'type' => '租房', 'store_user' => '房妈妈'],
            ],
            'field' => [
                ['label' => '姓名', 'prop' => 'name'],
                ['label' => '性别', 'prop' => 'sex'],
                ['label' => '类型', 'prop' => 'type'],
                ['label' => '经纪人', 'prop' => 'store_user'],
                ['label' => '备注', 'prop' => 'remark'],
            ],
            'add_btn' => false,
            'del_btn' => false,
        ]
    ];
    public $info = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'value' => 'name', 'type' => 'text'],
                ['title' => '性别', 'value' => 'sex', 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'text'],
            ],
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'field' => 'name', 'value' => 'name', 'type' => 'text'],
                ['title' => '性别', 'field' => 'sex', 'value' => [['title'=>'男','value'=>1],['title'=>'女','value'=>2]], 'type' => 'region'],
                ['title' => '联系方式', 'field' => 'mobile', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '邮箱', 'field' => 'email', 'value' => 'email', 'type' => 'text'],
                ['title' => '客源类型', 'field' => 'type', 'value' => [['title'=>'买房','value'=>1],['title'=>'卖房','value'=>2],['title'=>'租房','value'=>3]], 'type' => 'region'],
                ['title' => '备注', 'field' => 'remark', 'value' => 'remark', 'type' => 'textarea'],
                [
                    'title' => '店铺', 
                    'field' => 'store_id', 
                    'value' => [
                        ['title'=>'房妈妈宝龙店', 'value'=> 1]
                    ],
                     'type' => 'region'
                ],
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
        // type 1=买 2=卖 3=租
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('StoreCustomer/lists');
    }

    public function info()
    {
        return $this->fetch('StoreCustomer/info');
    }

    public function add()
    {
        // $list = cache('store');
        // var_dump($list);die;
        // Array ( [0] => Array ( [store_id] => 1 [user_id] => 1 [title] => 房妈妈宝龙店 [logo] => /uploads/picture/2018-04-17/5ad5626d14a6d.jpg [status] => 1 [default] => 1 ) )
        $this->add['data'] = json_encode($this->add['data']);

        return $this->fetch('StoreCustomer/add', $this->add);
    }

    public function edit()
    {
        return $this->fetch('StoreCustomer/add');
    }
}
