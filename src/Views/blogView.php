<?php
include "../libs/parser.php";
include "../Models/Blog.php"; 

if (!is_null(filter_input(INPUT_GET, "viewBlog"))) {

    //get Blog id
    $blogId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

}
// read json file
$blog = readJsonFile("../../data/post_".$blogId.".json");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2><?php echo $blog->getTitle() ?></h2>
        <p><?php echo $blog->getDate() ?>
        <p><?php echo $blog->getContent() ?>
        <img src="<?php echo $blog->getUrlImg() ?>" alt="">
    </div>
</body>
</html>