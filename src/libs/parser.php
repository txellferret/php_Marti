<?php

require_once "Models/Blog.php";
// Path to files
const pathData =  "../data";

function getAllBlogs ($dir= pathData) {

    $blogObjs =[];

    foreach (new DirectoryIterator($dir) as $fileInfo) {
        if($fileInfo->isDot()) continue;

        $strJsonFileContents = file_get_contents($fileInfo-> getPathname());
        $arrayFile = json_decode($strJsonFileContents, true);
        $arrayFile['id'] = basename($fileInfo-> getPathname());

        //TODO- regex to get file id
        $blogObj = Blog::convertArrayToObj(json_decode($strJsonFileContents, true));
        array_push($blogObjs, $blogObj);
        
    }
    return $blogObjs;
}


function readJsonFile ($path) {
    $contents = file_get_contents($path);
    return Blog::convertArrayToObj(json_decode($contents, true));

}

function sortBlogsByDate() {

}

function sortBlogsByTitle(&$blogObjs) {
    

}
