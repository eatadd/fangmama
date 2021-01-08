<?php

namespace app\index\controller;


class StoreDivided extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
                ['id'=>1,'date'=>'2019-7-8','title'=>'拼吧小子','money'=>'1500.00','info'=>'业绩分成'],
                ['id'=>2,'date'=>'2019-7-8','title'=>'吴先生','money'=>'1300.00','info'=>'无'],
            ],
            'field' => [
                ['label' => '用户名', 'prop' => 'title'],
                ['label' => '业绩分成', 'prop' => 'money'],
                ['label' => '分成说明', 'prop' => 'info'],
                ['label' => '添加时间', 'prop' => 'date'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '业绩分成', 'value' => 'name', 'type' => 'text'],
                ['title' => '分成说明', 'value' => 'info', 'type' => 'text'],
                ['title' => '选择人员', 'value' => [['title'=>'拼吧小子','value'=>1],['title'=>'吴先生','value'=>2]], 'type' => 'region'],
                ['title' => '房源类型', 'value' => [['title'=>'租房','value'=>1],['title'=>'新房','value'=>2],['title'=>'二手房','value'=>3]], 'type' => 'region'],
            ],
        ]
    ];

    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('StoreDivided/lists');
    }

}
