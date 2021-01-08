<?php

namespace app\index\controller;


class HouseFollow extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'有意向','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'看房','remark'=>'无'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订购协议','remark'=>'无'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签合同','remark'=>'无'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'付款','remark'=>'无'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'有意向','remark'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'有意向','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'看房','remark'=>'无'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订购协议','remark'=>'无'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签合同','remark'=>'无'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'付款','remark'=>'无'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'有意向','remark'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'有意向','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'看房','remark'=>'无'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订购协议','remark'=>'无'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签合同','remark'=>'无'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'付款','remark'=>'无'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'有意向','remark'=>'拼吧小子'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'杨家园小区','money'=>'130万','status'=>'有意向','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'很重小区','money'=>'20万','status'=>'看房','remark'=>'无'],
                ['id'=>3,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'80万','status'=>'签订购协议','remark'=>'无'],
                ['id'=>4,'date'=>'2019-7-8','title'=>'花园小区','money'=>'10万','status'=>'签合同','remark'=>'无'],
                ['id'=>5,'date'=>'2019-7-8','title'=>'御景天成','money'=>'40万','status'=>'付款','remark'=>'无'],
                ['id'=>6,'date'=>'2019-7-8','title'=>'龙庭国际','money'=>'45万','status'=>'有意向','remark'=>'拼吧小子'],
            ],
            'field' => [
                ['label' => '标题', 'prop' => 'title'],
                ['label' => '跟进时间', 'prop' => 'date'],
                ['label' => '备注', 'prop' => 'remark'],
                ['label' => '跟进进度', 'prop' => 'status'],
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
