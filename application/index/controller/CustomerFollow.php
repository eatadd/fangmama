<?php

namespace app\index\controller;


class CustomerFollow extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源跟进','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
            ],
            'field' => [
                ['label' => '标题', 'prop' => 'title'],
                ['label' => '跟进状态', 'prop' => 'status'],
                ['label' => '跟进房源', 'prop' => 'house'],
                ['label' => '备注内容', 'prop' => 'remark'],
                ['label' => '跟进时间', 'prop' => 'date'],
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
