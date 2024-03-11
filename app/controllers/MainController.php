<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
use FilesystemIterator;

class MainController extends Controller
{   
    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        //an example is in app/controllers/UsersController
        //and return it from this method
        $notfound = new notFound();
        $template = $this->twig->load('error/error.twig');
        $homepageData = [
            'title' => $notfound -> getAllUsers(),
        ];

        echo $template->render($homepageData); 
    }
}