<?php
require __DIR__ . '/../repositories/articlerepository.php';

class ArticleService {
    public function getAll() {
        $repository = new ArticleRepository();
        return $repository->getAll();
    }
    
    //adding a article to the database
    public function addarticle($title, $author, $content)
    {
        $repository = new articlerepository();
        $repository->Addarticle($title, $author, $content);
    }

    //Update a article to the database
    public function updatearticle($oldtitle, $title, $author, $content)
    {
        $repository = new articlerepository();
        $repository->UpdateArticle($oldtitle, $title, $author, $content);
    }

    //Deleting a article to the database
    public function deletearticle($title)
    {
        $repository = new articlerepository();
        $repository->DeleteArticle($title);
    }
}