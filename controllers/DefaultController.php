<?php


class DefaultController{

    public function __construct(){

    }

    public function home(): void{
        $template = "templates/home.phtml";
        require "templates/layout.phtml";
    }

    public function notfound(): void {
        $template = "templates/404.phtml";
        require "templates/layout.phtml";
    }
}