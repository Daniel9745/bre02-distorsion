<?php

class CategoryController{
    private CategoryManager $cm;

    public function __construct(){
        $this->cm = new CategoryManager();
    }
    
    public function getCategories(): void{
        $categories = $this->cm->findAllCategories();
        $template = "templates/get-categories.phtml";
        require "templates/layout.phtml";
    }

    public function getCategory(): void{
        // $categories = $this->cm->findCategoryById();
        $template = "templates/get-category.phtml";
        require "templates/layout.phtml";
    }
    
}