<?php

namespace app\index\controller;


class StoreLog extends Publics
{

    public $lists = [
        'data' => [
            'tableData'=>[
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
                ['id'=>1,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】详情'],
                ['id'=>2,'date'=>'2019-7-8','type'=>'查看房源','title'=>'拼吧小子','info'=>'查看了【小区】杨家小区 私密信息'],
            ],
            'field' => [
                ['label' => '操作人', 'prop' => 'title'],
                ['label' => '操作类型', 'prop' => 'type'],
                ['label' => '操作内容', 'prop' => 'info'],
                ['label' => '操作时间', 'prop' => 'date'],
            ],
            'add_btn' => false,
            'del_btn' => false,
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '业绩分成', 'value' => 'name', 'type' => 'text'],
                ['title' => '分成说明', 'value' => [['title'=>'男','value'=>1],['title'=>'女','value'=>2]], 'type' => 'region'],
                ['title' => '选择人员', 'value' => [['title'=>'拼吧小子','value'=>1],['title'=>'吴先生','value'=>2]], 'type' => 'region'],
                ['title' => '选择房源类型', 'value' => [['title'=>'租房','value'=>1],['title'=>'新房','value'=>2],['title'=>'二手房','value'=>3]], 'type' => 'region'],
            ],
        ]
    ];

    public function lists()
    {
        // $this->lists['data'] = json_encode($this->lists['data']);
        return $this->fetch('StoreLog/lists');
    }

}
