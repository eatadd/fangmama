<?php

namespace app\index\controller;

use think\Controller;

class Event extends Controller
{
    public function selectStore($store_id =0){
        $store_id = intval($store_id);
        if(empty($store_id)){
            return json_encode(['code'=>0 ,'msg'=>'store_id为空']);
        };
//        $store_id || $this->error('store isnot null');
//        $store_id || $this->error('store isnot null');
//        cache('user_data')['store_user_info']['store_id'] = $store_id;
        $data = cache('user_data');
        $data = json_decode($data);
        $data->store_user_info->store_id = $store_id;
        cache('user_data', json_encode($data));
//        $this->success('修改成功');
//        cache('store_id', $store_id);
        return json_encode(['code'=>1,'msg'=>'修改成功']);
    }

    public function index($store = [], $storeMenu = [], $userToken = '')
    {
        $data['storeMenu'] = $storeMenu;
        $user_data = $userToken;
        cache('user_data', json_encode($user_data));
//        $this->success($store, 'index/test', $data);
//        print_r($user_data);
        $this->assign('data', json_encode($user_data));
        return view();
    }


}
