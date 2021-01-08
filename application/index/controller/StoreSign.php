<?php

namespace app\index\controller;


class StoreSign extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'房源签约','money'=>'100万','status'=>'有意向','house'=>'龙庭国际','remark'=>'无'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'房源签约','money'=>'20万','status'=>'代付款','house'=>'银河花园','remark'=>'无'],
            ],
            'field' => [
                ['label' => '标题', 'prop' => 'title'],
                ['label' => '签约状态', 'prop' => 'status'],
                ['label' => '签约房源', 'prop' => 'house'],
                ['label' => '签约金额', 'prop' => 'money'],
                ['label' => '备注内容', 'prop' => 'remark'],
                ['label' => '签约时间', 'prop' => 'date'],
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
        return $this->fetch('StoreSign/lists');
    }


}
