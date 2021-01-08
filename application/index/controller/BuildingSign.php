<?php

namespace app\index\controller;


class BuildingSign extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
                ['id' => 1, 'title' => '丰泰家园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县山河路22号', 'money' => '9012.00/㎡'],
                ['id' => 2, 'title' => '府苑小区', 'huxing' => '三室一厅', 'address' => '众兴镇', 'money' => '2234.00/㎡'],
                ['id' => 3, 'title' => '新城湖滨花园', 'huxing' => '两室一厅', 'address' => '宿迁市泗洪县青阳南路81号', 'money' => '1257.00/㎡'],
                ['id' => 4, 'title' => '湖滨人家新区', 'huxing' => '一室一厅', 'address' => '宿迁市宿豫区', 'money' => '6570.00/㎡'],
            ],
            'menuItem' => [
                ['title' => '查看详情', 'src' => 'info'],
                ['title' => '房源跟进', 'src' => '/house_follow/lists'],
                ['title' => '房源签约', 'src' => '/house_sign/lists'],
                ['title' => '房源带看', 'src' => '/house_look/lists'],
            ],
            'field' => [
                ['label' => '房源标题', 'prop' => 'title'],
                ['label' => '户型', 'prop' => 'huxing'],
                ['label' => '房源地址', 'prop' => 'address'],
                ['label' => '价格', 'prop' => 'money'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];
    public $info = [
        'data' => [
            'field' => [
                ['title' => '房源图片', 'value' => ['https://fuss10.elemecdn.com/8/27/f01c15bb73e1ef3793e64e6b7bbccjpeg.jpeg',
                    'https://fuss10.elemecdn.com/1/8e/aeffeb4de74e2fde4bd74fc7b4486jpeg.jpeg'],'type'=>'img'],
                ['title' => '开盘时间', 'value' => '2017-8-29','type'=>'text'],
                ['title' => '户型', 'value' => '三室一厅','type'=>'text'],
                ['title' => '总价', 'value' => '7602万','type'=>'text'],
                ['title' => '面积', 'value' => '102/㎡','type'=>'text'],
            ],
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '房源标题', 'value' => 'name', 'type' => 'text'],
                ['title' => '户型', 'value' => 'huxing', 'type' => 'text'],
                ['title' => '房源地址', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '价格', 'value' => 'remark', 'type' => 'text'],
                ['title' => '房源图片', 'value' => 'date', 'type' => 'upload_picture'],
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

    public function lists(){
        return view();
    }
//    protected function initialize()
//    {
//        parent::initialize();
//    }

}
