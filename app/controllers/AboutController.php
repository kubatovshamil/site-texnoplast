<?php

namespace app\controllers;


class AboutController extends AppController {

    public function aboutAction(){
        $this->setMeta('О нас','О нас', 'О нас');
        header("Location: /");
    }


}