<?php

namespace app\index\controller;


class AuthManager extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 2, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 3, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 4, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 5, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 6, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 7, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 8, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 9, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 10, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 11, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 1, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 13, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 14, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
                ['id' => 15, 'date' => '2019-7-8', 'type' => '正常', 'title' => '系统管理'],
                ['id' => 16, 'date' => '2019-7-8', 'type' => '正常', 'title' => '客服管理'],
            ],
            'menuItem' => [
                ['title' => '访问授权', 'src' => 'lists'],
                ['title' => '成员授权', 'src' => 'lists'],
            ],
            'field' => [
                ['label' => '用户组', 'prop' => 'title'],
                ['label' => '状态', 'prop' => 'type'],
                ['label' => '创建时间', 'prop' => 'date'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];

    public $add = [
        'data' => [
            'field' => [
                ['title' => '分组名称', 'value' => 'title', 'type' => 'text'],
                ['title' => '状态', 'value' => [['title' => '正常', 'value' => 1], ['title' => '异常', 'value' => 2]], 'type' => 'region'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];

}
