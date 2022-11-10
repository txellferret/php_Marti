<?php

class Blog {

    private int $id;
    private string $title;
    private string $content;
    private int $date;
    private string $urlImg;


    public function __construct(
        int $id, 
        string $title, 
        string $content,
        int $date,
        string $urlImg) {

        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
        $this->urlImg = $urlImg;
    }
    /** Getters and Setters  */
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
            return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
            $this->date = $date;

            return $this;
    }

    /**
     * Get the value of urlImg
     */ 
    public function getUrlImg()
    {
        return $this->urlImg;
    }

    /**
     * Set the value of urlImg
     *
     * @return  self
     */ 
    public function setUrlImg($urlImg)
    {
        $this->urlImg = $urlImg;

        return $this;
    }

    public function __toString() {
        return sprintf("Blog{[id=%d][title=%s][content=%s][date=%d][img=%s]}",
            $this->id, $this->title, $this->content,
            $this->date, $this->urlImg);        
    }


        

    
}