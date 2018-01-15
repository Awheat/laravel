<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8
 * Time: 17:59
 */

namespace App\Http\Controllers;


use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{


    /**
     * @abstract 添加消息
     * @author WangChengWu
     * @date 2018-01-09
     */
    public function addMessage(Request $request)
    {
        /*
         *
         * 判断字段是否存在并且十分为空
         *
         * */
        if ($request->has('username') && $request->has('message')) {
            $params['username'] = $request->input('username');
            $params['message'] = $request->has('message');
        } else {
            return '有非法字段';
        }

        /* 存库：返回一个对象 */
        $result = Comment::create($params);

        return $result->id ? 'true' : 'false';
    }


    /**
     * @abstract 获取消息以及分页
     * @author WangChengWu
     * @date 2018-01-09
     */
    public function getMessages()
    {
        $messages = Comment::paginate(5);
        return $messages;
    }

    /**
     * @abstract jsonp跨域请求测试
     * @author WangChengWu
     * @date 2018-01-09
     */
    public function ajaxJsonpCross(Request $request)
    {
        $callback = $request->input('callback');

        $arr = array('status' => '200', 'msg' => 'jsonp跨域请求成功！');
        $user_id = $request->input('user_id');
        $name = $request->input('name');


        return response($callback . '(' . json_encode($arr) . ')');
    }
}