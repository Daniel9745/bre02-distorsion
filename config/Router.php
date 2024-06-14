<?php

class Router{

    private DefaultController $dc;
    private CategoryController $cc;

    public function __construct(){
        $this->dc = new DefaultController();
        $this->cc = new CategoryController();
    }
    public function handleRequest(?string $route): void{
        if($route !== null && $route === "home"){
            $this->dc->home();
        }
        else if($route !== null && $route === "add-category"){
            echo "je veux appeler la route pour ajouter une categories";
        }
        else if($route !== null && $route === "get-categories"){
            $this->cc->getCategories();
        }
        else if($route !== null && $route === "get-category"){
            $this->cc->getCategory();
        }
        else if($route !== null && $route === "add-room"){
            echo "je veux appeler la route pour ajouter une salle";
        }
        else if($route !== null && $route === "add-message"){
            echo "je veux appeler la route pour ajouter un message";
        }
        else if($route !== null && $route === "show-room"){
            echo "je veux une room";
        }
        else if($route !== null && $route === "get-rooms"){
            echo "Je veux afficher la route pour recuperer les salons";
        }
        else if($route === null){
            $this->dc->home();
        }
        else{
            $this->dc->notFound();
        }
    }
}