<?php

namespace app\index\controller;


class StoreCustomerFollow extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'两重罗心悦','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'吴先生','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'房妈妈','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'xiaolin','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>7,'date'=>'2019-7-8','title'=>'两重罗心悦','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>8,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>9,'date'=>'2019-7-8','title'=>'吴先生','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>10,'date'=>'2019-7-8','title'=>'房妈妈','type'=>'新房','store_user'=>'prak'],
                ['id'=>11,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'上'],
                ['id'=>12,'date'=>'2019-7-8','title'=>'xiaolin','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>13,'date'=>'2019-7-8','title'=>'两重罗心悦','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>14,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>15,'date'=>'2019-7-8','title'=>'吴先生','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>16,'date'=>'2019-7-8','title'=>'房妈妈','type'=>'新房','store_user'=>'prak'],
                ['id'=>17,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'上'],
                ['id'=>18,'date'=>'2019-7-8','title'=>'xiaolin','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>19,'date'=>'2019-7-8','title'=>'两重罗心悦','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>20,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>21,'date'=>'2019-7-8','title'=>'吴先生','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>22,'date'=>'2019-7-8','title'=>'房妈妈','type'=>'新房','store_user'=>'prak'],
                ['id'=>23,'date'=>'2019-7-8','title'=>'金瑞凯','type'=>'租房','store_user'=>'上'],
                ['id'=>24,'date'=>'2019-7-8','title'=>'xiaolin','type'=>'二手房','store_user'=>'拼吧小子'],
            ],
            'field' => [
                ['label' => '跟进客源', 'prop' => 'title'],
                ['label' => '业务类型', 'prop' => 'type'],
                ['label' => '置业顾问', 'prop' => 'store_user'],
                ['label' => '跟进时间', 'prop' => 'date'],
            ],
            'add_btn' => false,
            'del_btn' => false,
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '姓名', 'value' => 'name', 'type' => 'text'],
                ['title' => '性别', 'value' => [['title' => '男', 'value' => 1], ['title' => '女', 'value' => 2]], 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];

    public function lists()
    {
        return $this->fetch('StoreCustomerFollow/lists');
    }

}
