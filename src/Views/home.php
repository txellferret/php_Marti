<?php

require_once "libs/parser.php";
echo "<h2>My blog</h2>";
//TODO add some content, such as text and images that fit a main page for a store web page.

$list = getAllBlogs();
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
                <form action="Views/blogView.php"  method="get">
                    <input type='text' hidden name ="id" value="{$elem->getId()}">
                    <button class ="btn btn-primary" type="submit"  name="viewBlog" value="viewBlog">Go</button>
                </form>
            </div>
        </div>           
EOT;
}