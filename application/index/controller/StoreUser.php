<?php

namespace app\index\controller;


class StoreUser extends Publics
{

    public $lists = [
        'data' => [
            'tableData' => [
                ['id' => 1, 'login_time' => '2019-08-08 13:28', 'mobile' => '13088807775', 'is_manager' => '是', 'username' => 'admin', 'nickname' => '吴先生'],
                ['id' => 2, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '两重心字罗衣'],
                ['id' => 3, 'login_time' => '2019-07-31 11:25', 'mobile' => '18761336471', 'is_manager' => '是', 'username' => '18761336471', 'nickname' => 'xiaolin'],
                ['id' => 4, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '否', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 5, 'login_time' => '2019-07-31 11:25', 'mobile' => '18800639929', 'is_manager' => '是', 'username' => '18800639929', 'nickname' => '111'],
                ['id' => 6, 'login_time' => '2019-07-31 11:25', 'mobile' => '18351529316', 'is_manager' => '否', 'username' => '18351529316', 'nickname' => '永恒的心CK'],
                ['id' => 7, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 8, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 1, 'login_time' => '2019-08-08 13:28', 'mobile' => '13088807775', 'is_manager' => '是', 'username' => 'admin', 'nickname' => '吴先生'],
                ['id' => 2, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '两重心字罗衣'],
                ['id' => 3, 'login_time' => '2019-07-31 11:25', 'mobile' => '18761336471', 'is_manager' => '是', 'username' => '18761336471', 'nickname' => 'xiaolin'],
                ['id' => 4, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '否', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 5, 'login_time' => '2019-07-31 11:25', 'mobile' => '18800639929', 'is_manager' => '是', 'username' => '18800639929', 'nickname' => '111'],
                ['id' => 6, 'login_time' => '2019-07-31 11:25', 'mobile' => '18351529316', 'is_manager' => '否', 'username' => '18351529316', 'nickname' => '永恒的心CK'],
                ['id' => 7, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 8, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 1, 'login_time' => '2019-08-08 13:28', 'mobile' => '13088807775', 'is_manager' => '是', 'username' => 'admin', 'nickname' => '吴先生'],
                ['id' => 2, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '两重心字罗衣'],
                ['id' => 3, 'login_time' => '2019-07-31 11:25', 'mobile' => '18761336471', 'is_manager' => '是', 'username' => '18761336471', 'nickname' => 'xiaolin'],
                ['id' => 4, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '否', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 5, 'login_time' => '2019-07-31 11:25', 'mobile' => '18800639929', 'is_manager' => '是', 'username' => '18800639929', 'nickname' => '111'],
                ['id' => 6, 'login_time' => '2019-07-31 11:25', 'mobile' => '18351529316', 'is_manager' => '否', 'username' => '18351529316', 'nickname' => '永恒的心CK'],
                ['id' => 7, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
                ['id' => 8, 'login_time' => '2019-07-31 11:25', 'mobile' => '15154149502', 'is_manager' => '是', 'username' => '15154149502', 'nickname' => '暂无昵称'],
            ],
            'field' => [
                ['label' => '登录账号', 'prop' => 'username'],
                ['label' => '登录手机', 'prop' => 'mobile'],
                ['label' => '登录时间', 'prop' => 'login_time'],
                ['label' => '用户昵称', 'prop' => 'nickname'],
                ['label' => '是否超管', 'prop' => 'is_manager'],
            ],
            'add_btn' => true,
            'del_btn' => true,
        ]
    ];
    public $add = [
        'data' => [
            'field' => [
                ['title' => '登录账号', 'value' => 'username', 'type' => 'text'],
                ['title' => '是否超管', 'value' => [['title' => '是', 'value' => 1], ['title' => '否', 'value' => 2]], 'type' => 'region'],
                ['title' => '手机号码', 'value' => 'mobile', 'type' => 'text'],
                ['title' => '用户昵称', 'value' => 'nickname', 'type' => 'text'],
                ['title' => '添加日期', 'value' => 'date', 'type' => 'date'],
            ],
        ]
    ];

}
