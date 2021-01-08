<?php

namespace app\index\controller;

use think\Controller;

class Request extends Controller
{


    public function unsetKey($param = [], $rule = [])
    {
        !empty($rule) || $rule = ['user_token', 'access_token'];
        foreach ($rule as $key => $val) {
            unset($param[$val]);
        }
        $cachek = [];
        $cachev = [];
        foreach ($param as $key => $val) {
            $cachek[] = $key;
            $cachev[] = $val;
        }
        $str = implode('_', $cachek) . '--' . implode('_', $cachev);
        return $str;
    }

    public function request()
    {
        $param = input('post.');
        if (empty($param['url'])) {
            $this->error('请求地址有误！');
        }
        $data = request_post('http://api.app.fangmama.com/' . $param['url'], $param);
//        猫人服务器
//        $data = request_post('http://api.fmm.onlyjune.com/' . $param['url'], $param);
        $cachek = $this->unsetKey($param);
        is_string($data) ? $data = cache($cachek) : cache($cachek, $data);
        return json_encode($data);
    }

    public function upload()
    {
        $file = request()->file('image');
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../uploads');
//        print_r(dirname(dirname(dirname(dirname(__FILE__)))).'/uploads/');
//        $path = 'F:/fangmama/app/server/fangmama/uploads/';
        $path = dirname(dirname(dirname(dirname(__FILE__)))) . '/uploads/';
        if ($info) {
            $param['base_string'] = $this->imgToBase64($path . $info->getSaveName());//获取图片base64编码格式
            $param['path'] = 'fangmama_pc/uploads/picture';
            //$this->base64_image_content($param['base_string'], $param['path']);
            $data = request_post('http://api.app.fangmama.com/extend/manager/upload/PcPicture', $param);
            return json_encode($data);
        }
    }

    /**
     * [将Base64图片转换为本地图片并保存]
     * @param [Base64] $base64_image_content [要保存的Base64]
     * @param [目录] $path [要保存的路径]
     */
    function base64_image_content($base64_image_content, $path)
    {
        //匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
            $type = $result[2];
            $new_file = $path . "/" . date('Ymd', time()) . "/";
            if (!file_exists($new_file)) {
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file, 0777, true);
            }
            $new_file = $new_file . time() . ".{$type}";
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {
                return '/' . $new_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * 获取图片的Base64编码(不支持url)
     * @param $img_file 传入本地图片地址
     * @return string
     */
    function imgToBase64($img_file)
    {
        $img_base64 = '';
        if (file_exists($img_file)) {
            $app_img_file = $img_file; // 图片路径
            $img_info = getimagesize($app_img_file); // 取得图片的大小，类型等
            //echo '<pre>' . print_r($img_info, true) . '</pre><br>';
            $fp = fopen($app_img_file, "r"); // 图片是否可读权限
            if ($fp) {
                $filesize = filesize($app_img_file);
                $content = fread($fp, $filesize);
                $file_content = chunk_split(base64_encode($content)); // base64编码
                switch ($img_info[2]) {   //判读图片类型
                    case 1:
                        $img_type = "gif";
                        break;
                    case 2:
                        $img_type = "jpg";
                        break;
                    case 3:
                        $img_type = "png";
                        break;
                }
                $img_base64 = 'data:image/' . $img_type . ';base64,' . $file_content;//合成图片的base64编码
            }
            fclose($fp);
        }
        return $img_base64; //返回图片的base64
    }

}
