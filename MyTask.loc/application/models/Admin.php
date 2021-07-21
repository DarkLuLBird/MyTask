<?php

namespace application\models;

use application\core\Model;
use application\support\media\Image;
use application\support\validators\UserValidator;

class Admin extends Model
{
    public function loginValidate($post){
        $config = require 'application/config/admin.php';
        if($post['password'] != $config['password']){
            return false;
        }
        return true;
    }

    public function getPosts(){
        $sql = "SELECT * FROM `posts`";
        $data = $this->db->selectAll($sql);
        return $data;
    }

    public function getPostsById($get){
        $id = $get['user_id'];
        $params = [
            'id' => $id,
        ];
        $sql = "SELECT * FROM `posts` WHERE user_id = :id";
        $data = $this->db->select($sql, $params);
        return $data;
    }
}