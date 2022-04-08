<?php
require __DIR__ . '/../services/articleservice.php';

class ArticleController
{

    private $articleService;

    function __construct()
    {
        $this->articleService = new ArticleService();
    }

    public function index()
    {
        $model = $this->articleService->getAll();

        require __DIR__ . '/../views/article/index.php';
    }

    public function single()
    {
        $model = $this->articleService->getAll();

        require __DIR__ . '/../views/article/single.php';
    }
    public function addingarticle()
    {
        require __DIR__ . '/../views/addingarticle/index.php';
    }
    public function updatearticle()
    {
        require __DIR__ . '/../views/updatingarticle/index.php';
    }
    public function deletingarticle()
    {
        $articlelist = $this->articleService->getAll();
        require __DIR__ . '/../views/deletingarticle/index.php';
    }
    public function articleAdd()
    {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); 

            // check all individual post fields
            if (isset($_POST['title'])) {
                $title = $_POST['title'];
            }

            if (isset($_POST['author'])) {
                $author = $_POST['author'];
            }

            if (isset($_POST['content'])) {
                $content = $_POST['content'];
            }

            // if all fields are not empty then insert new product
            if (!empty($title) && !empty($author) && !empty($content)) {
                $this->articleService->addarticle($title, $author, $content);
                header('Location: /article');
            } else {
                header('Location: /article?error=adding-of-article-failed!'); // else show error message
            }
        
    }
    public function articleUpdate()
    {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); 

            // check all individual post fields
            if (isset($_POST['oldtitle'])) {
                $oldtitle = $_POST['oldtitle'];
            }

            if (isset($_POST['title'])) {
                $title = $_POST['title'];
            }

            if (isset($_POST['author'])) {
                $author = $_POST['author'];
            }

            if (isset($_POST['content'])) {
                $content = $_POST['content'];
            }

            // if all fields are not empty then insert new product
            if (!empty($oldtitle) && !empty($title) && !empty($author) && !empty($content)) {
                $this->articleService->updatearticle($oldtitle, $title, $author, $content);
                header('Location: /article');
            } else {
                header('Location: /article?error=updating-of-article-failed!'); // else show error message
            }
    }
    public function articleDelete()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); 

            
            if (isset($_POST['title'])) 
            {
                $title = $_POST['title'];
            }
            
            if (!empty($title)) 
            {
                $this->articleService->deletearticle($title);
                header('Location: /article');
            } 
            else 
            {
                header('Location: /article?error=Deleting-of-article-failed!'); // else show error message
            }
    }
}
