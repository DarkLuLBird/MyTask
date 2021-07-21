<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller
{
    public function loginAction()
    {
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('error');
            }
            $_SESSION['admin'] = 1;
            $this->view->redirect('admin/posts');
        }
        
        $this->view->render("Admin login");
    }

    public function postsAction()
    {
        if(!empty($_GET)){
            $posts = $this->model->getPostsById($_GET);
        }else{
            $posts = $this->model->getPosts();
        }

        $args = [
            "posts" => $posts,
        ];
        $this->view->render("Admin posts", $args);
    }
}