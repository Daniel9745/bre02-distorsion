<?php

class CategoryManager extends AbstractManager{
    public function __construct() {
        parent::__construct();
    }
    public function findAllCategories() : array{
        $categories = [];

        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $items){
            $category = new Category($items["name"]);
            $category->setId($items["id"]);
            $categories[] = $category;
        }
        return $categories;
    }
    // public function findCategoryById() : array {
    //     $query = $this->db->prepare("SELECT * FROM categories");
    //     $query->execute();
    //     $result = $query->fetch(PDO::FETCH_ASSOC);

    //     var_dump($result);
    // }
}