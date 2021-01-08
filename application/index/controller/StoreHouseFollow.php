<?php

namespace app\index\controller;


class StoreHouseFollow extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'二手房','store_user'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','type'=>'二手房','store_user'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','type'=>'租房','store_user'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'新房','store_user'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','type'=>'新房','store_user'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','type'=>'租房','store_user'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','type'=>'二手房','store_user'=>'拼吧小子'],
            ],
            'field' => [
                ['label' => '跟进房源', 'prop' => 'title'],
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
                ['title' => '性别', 'value' => [['title'=>'男','value'=>1],['title'=>'女','value'=>2]], 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];

    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('StoreHouseFollow/lists');
    }

}
