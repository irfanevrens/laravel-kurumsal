<?php

namespace App\Umut;

class Page
{
    public $title;
    public $description;
    public $keywords;
    public $author;
    public $content;
    public $logo;
    public $logoName;
    public $slider;
    public $brand;
    public $posts;
    public $socials;
    public $gallery;
    public $url;
    public $team;
    public $credential;
    
    public function setTitle($title){$this->title = $title;} 
    public function setDescription($description){$this->description = $description;}
    public function setKeywords($keywords){$this->keywords = $keywords;}
    public function setAuthor($author){$this->author = $author;}
    public function setLogo($logo){$this->logo = $logo;}
    public function setLogoName($logoName){$this->logoName = $logoName;}
    public function setSlider($slider){$this->slider = $slider;}
    public function setBrand($brand){$this->brand = $brand;}
    public function setCopyright($copyright){$this->copyright = $copyright;}
    public function setContent($content){$this->content = $content;}
    public function setPosts($posts){$this->posts = $posts;}
    public function setPost($post){$this->post = $post;}
    public function setContact($contact){$this->contact = $contact;}
    public function setSocials($socials){$this->socials = $socials;}
    public function setGallery($gallery){$this->gallery = $gallery;}
    public function setUrl($url){$this->url = $url;}
    public function setTeam($team){$this->team = $team;}
    public function setCredential($credential){$this->credential = $credential;}
}