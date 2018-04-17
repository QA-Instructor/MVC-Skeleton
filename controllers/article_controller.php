<?php

class ArticleController {

    
    public function readArticle() {
        require_once('models/comment.php');
        require_once('models/map.php');
        // we expect a url of form ?controller=article&action=readArticle&id=x

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id'])) {  // without an id we just redirect to the error page as we need the post id to find it in the database
                return call('pages', 'error');
            }
        } else {
            Comment::newComment($_GET['id']);
        }
        try {
            // we use article_id to get the correct article and comments to it
            $article = Article::findArticle($_GET['id']);
            $comments = Comment::articleComments($_GET['id']);
            $map = Map::coordinates($_GET['id']);
            require_once('views/articles/readArticle.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function createArticle() {
// we expect a url of form ?controller=product&action=create
// if it's a GET request display a blank form for creating a new product
// else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/articles/create.php');
        } else {
            Article::add();

            $products = Article::all(); //$products is used within the view
            require_once('views/articles/readAll.php');
        }
    }

    public function readAll() {
      // we store all the posts in a variable
      $articles = Article::all();
      require_once('views/articles/readAll.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just  redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['article_id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $article = Article::find($_GET['article_id']);
      require_once('views/articles/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/articles/create.php');
      }
      else { 
            Article::add();
             
            $articles = Article::all(); //$products is used within the view
            require_once('views/articles/readAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['article_id']))
        return call('pages', 'error');

        // we use the given id to get the correct product
       require_once('models/comment.php');
        $article = Article::find($_GET['article_id']);
        //$comment = Comment::allArticleComments($_GET['article_id']); - this method if form all status of comments Approved, rej and Pending
        $comment = Comment::pendingArticleComments($_GET['article_id']);
      
        require_once('views/articles/update.php');
        }
      else
          { 
            $id = $_GET['article_id'];
            Article::update($id);
                        
            $articles = Article::all();
            require_once('views/articles/readAll.php');
      }
      
    }
    public function delete() {
            Article::remove($_GET['article_id']);
            
            $articles = Article::all();
            require_once('views/articles/readAll.php');
      }
      
   
  
public function readcategory() {
      // we store all the posts in a variable
      $articles = Article::allcategory();
      require_once('views/articles/readcategory.php');
    }
}
?>