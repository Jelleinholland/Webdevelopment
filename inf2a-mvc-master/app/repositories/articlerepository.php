<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/article.php';

class ArticleRepository extends Repository {

    function getAll() {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM article");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
            $articles = $stmt->fetchAll();

            return $articles;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }

    public function AddArticle($title, $author, $content)
    {
        $posted_at = date("Y/m/d h:i:s");
        try {
            $sqlquery = "INSERT INTO article (title, author, content, posted_at) VALUES(:title, :author, :content, :posted_at)";
            $stmt = $this->connection->prepare($sqlquery);
            
            // bind param to stmt
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':posted_at', $posted_at);

            $stmt->execute();

        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function UpdateArticle($oldtitle,$title, $author, $content)
    {
        $posted_at = date("Y/m/d h:i:s");
        try {
            $sqlquery = "UPDATE article SET title=:title, author=:author, content=:content, posted_at=:posted_at WHERE title=:oldtitle";
            $stmt = $this->connection->prepare($sqlquery);
            
            // bind param to stmt
            $stmt->bindParam(':oldtitle', $oldtitle);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':posted_at', $posted_at);

            $stmt->execute();

        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function DeleteArticle($title)
    {
        try {
            $sqlquery = "DELETE FROM article WHERE title = :title";
            $stmt = $this->connection->prepare($sqlquery);
            
            // bind param to stmt
            $stmt->bindParam(':title', $title);
            $stmt->execute();

        } catch (PDOException $e) {
            echo $e;
        }
    }


}