<?php 
require_once "libs/parser.php";

$list = getAllBlogs();

if (isset($_GET['order'])){
    $orderBy = filter_input(INPUT_GET, 'orderBlogs', FILTER_SANITIZE_STRING);
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>My Blog</h2>
        <div>
            <form action="blog.php" method="get">
                <label for="">Order by:</label>
                <select class="form-control" id="orderBlogs" name="orderBlogs">
                    <option value="none">-</option>
                    <option value="date-desc">Date desc</option>
                    <option value="date-asc">Date asc</option>
                    <option value="title-desc">Title desc</option>
                    <option value="title-asc">Title asc</option>
                </select>
                <button class="btn btn-secondary" type="submit"  name="order">Apply</button>
            </form>
            
        </div>
    
        
        <?php 
        foreach ($list as $elem) {
            echo <<<EOT
                <div class="card">
                    <div class="card-header">
                        {$elem->getTitle()}
                    </div>
                    <div class="card-body">
                        <h5 class="card<div-title">{$elem->getDate()}</h5>
                        <p class="card-text">{$elem->getContent()}</p>
                        <img src="{$elem->getUrlImg()}" width="50" height="60"> 
                        <form action="post.php"  method="get">
                            <input type='text' hidden name ="id" value="{$elem->getId()}">
                            <button class ="btn btn-primary" type="submit"  name="viewBlog" value="viewBlog">Go</button>
                        </form>
                    </div>
                </div>           
        EOT;
        }
        ?>
    </div>

    
</body>
</html>