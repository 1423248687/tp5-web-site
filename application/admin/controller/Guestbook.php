<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/16
 * Time: 17:41
 */

namespace app\admin\controller;


use app\admin\model\GuestbookModel;

class Guestbook extends Index
{
    protected $result;
    protected $page;
    protected $count;

    public function __construct()
    {
        parent::__construct();
    }

    // 列表渲染
    public function initGuestbookList()
    {
        $this->checkLogin();
        $fromtime = isset($_GET['fromtime']) ? strtotime($_GET['fromtime']) : ''; // 开始时间
        $totime = isset($_GET['totime']) ? strtotime($_GET['totime']) : ''; // 结束时间
        $field = isset($_GET['field']) ? $_GET['field'] : '';  // 类型
        $q = isset($_GET['q']) ? $_GET["q"] : '';

        $guestbook = new GuestbookModel();
        switch ($field) {
            case "num":
                $this->result = $guestbook
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->paginate(20);
                $this->count = $guestbook
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->count();
                $this->page = $this->result->render();
                break;
            case "gid":
                $this->result = $guestbook
                    ->where('id', $q)
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->paginate(20);
                $this->count = $guestbook
                    ->where('id', $q)
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->count();
                $this->page = $this->result->render();
                break;
            case "site":
                $this->result = $guestbook
                    ->where('diqu', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->paginate(20);
                $this->count = $guestbook
                    ->where('diqu', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->count();
                $this->page = $this->result->render();
                break;
            case "name":
                $this->result = $guestbook
                    ->where('name', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->paginate(20);
                $this->count = $guestbook
                    ->where('name', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->count();
                $this->page = $this->result->render();
                break;
            case "phone":
                $this->result = $guestbook
                    ->where('phone', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->paginate(20);
                $this->count = $guestbook
                    ->where('phone', 'like', '%' . $q . '%')
                    ->where('is_read', 0)
                    ->where('create_time', ['>=', $fromtime], ['<=', $totime], 'and')
                    ->order('create_time desc')
                    ->count();
                $this->page = $this->result->render();
                break;
            default:
                $this->result = $guestbook->where('is_read', 0)->order('create_time desc')->paginate(20);
                $this->count = $guestbook->where('is_read', 0)->order('create_time desc')->count();
                $this->page = $this->result->render();
        };
        $time = time();
        $data = [
            'list' => $this->result,
            "page" => $this->page,
            "count" => $this->count,
            'time' => $time
        ];
        return view('initGuestbookList', $data);
    }

    public function delete(){
        $this->checkLogin();
        if(is_array(input('post.id'))){
            $id = implode(',',input('post.id'));
        }else{
            $id = substr(input('post.id'),0,-1);
        }
        dump($id);
        die();
        $result = M('guestbook')->delete($id);
        if($result){
            echo true;
        }else{
            echo false;
        }
    }

}