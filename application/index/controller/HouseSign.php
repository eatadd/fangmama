<?php

namespace app\index\controller;


class HouseSign extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'签订认购书','type'=>'二手房','customer'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'签订购房合同','type'=>'租房','customer'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订认购书','type'=>'新房','customer'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签订购房合同','type'=>'新房','customer'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'签订认购书','type'=>'租房','customer'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'签订认购书','type'=>'二手房','customer'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'签订认购书','type'=>'二手房','customer'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'签订购房合同','type'=>'租房','customer'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订认购书','type'=>'新房','customer'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签订购房合同','type'=>'新房','customer'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'签订认购书','type'=>'租房','customer'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'签订认购书','type'=>'二手房','customer'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'签订认购书','type'=>'二手房','customer'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'签订购房合同','type'=>'租房','customer'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订认购书','type'=>'新房','customer'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签订购房合同','type'=>'新房','customer'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'签订认购书','type'=>'租房','customer'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'签订认购书','type'=>'二手房','customer'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'签订认购书','type'=>'二手房','customer'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'签订购房合同','type'=>'租房','customer'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订认购书','type'=>'新房','customer'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签订购房合同','type'=>'新房','customer'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'签订认购书','type'=>'租房','customer'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'签订认购书','type'=>'二手房','customer'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'签订认购书','type'=>'二手房','customer'=>'吴先生'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'签订购房合同','type'=>'租房','customer'=>'拼吧小子'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订认购书','type'=>'新房','customer'=>'xiaolin'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签订购房合同','type'=>'新房','customer'=>'prak'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'签订认购书','type'=>'租房','customer'=>'上'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'签订认购书','type'=>'二手房','customer'=>'拼吧小子'],
            ],
            'field' => [
                ['label' => '签约房源', 'prop' => 'title'],
                ['label' => '签约金额', 'prop' => 'money'],
                ['label' => '签约时间', 'prop' => 'date'],
                ['label' => '签约方', 'prop' => 'customer'],
                ['label' => '签约进度', 'prop' => 'status'],
            ],
            'add_btn' => true,
            'del_btn' => true,
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

}
