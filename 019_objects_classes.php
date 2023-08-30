<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
    class Book {
      var $title;
      var $author;
      var $pages;
    }
     $book1 = new Book; // object
     $book1->title = "Lord of the Rings";
     $book1->author = "J.R.R.Tolkien";
     $book1->pages = 712;

     $book2 = new Book; // object
     $book2->title = "Grapes of Wrath";
     $book2->author = "Steinbeck";
     $book2->pages = 696;

      echo $book1-> author;
      echo "<br>";
      echo $book2-> pages;


   ?>





  </body>
</html>
