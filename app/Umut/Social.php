<?php

namespace App\Umut;

class Social
{
    public $class;
    public $icon;
    
    public function setClass($class)
    {
        switch ($class) {

            case 1: $this->class = "social-icon si-small si-borderless nobottommargin si-facebook"; break;
            case 2: $this->class = "social-icon si-small si-borderless nobottommargin si-delicious"; break;
            case 3: $this->class = "social-icon si-small si-borderless nobottommargin si-paypal"; break;
            case 4: $this->class = "social-icon si-small si-borderless nobottommargin si-flattr"; break;
            case 5: $this->class = "social-icon si-small si-borderless nobottommargin si-android"; break;
            case 6: $this->class = "social-icon si-small si-borderless nobottommargin si-smashmag"; break;
            case 7: $this->class = "social-icon si-small si-borderless nobottommargin si-gplus"; break;
            case 8: $this->class = "social-icon si-small si-borderless nobottommargin si-wikipedia"; break;
            case 9: $this->class = "social-icon si-small si-borderless nobottommargin si-stumbleupon"; break;
            case 10: $this->class = "social-icon si-small si-borderless nobottommargin si-foursquare"; break;
            case 11: $this->class = "social-icon si-small si-borderless nobottommargin si-call"; break;
            case 12: $this->class = "social-icon si-small si-borderless nobottommargin si-ninetyninedesign"; break;
            case 13: $this->class = "social-icon si-small si-borderless nobottommargin si-forrst"; break;
            case 14: $this->class = "social-icon si-small si-borderless nobottommargin si-digg"; break;
            case 15: $this->class = "social-icon si-small si-borderless nobottommargin si-spotify"; break;
            case 16: $this->class = "social-icon si-small si-borderless nobottommargin si-reddid"; break;
            case 17: $this->class = "social-icon si-small si-borderless nobottommargin si-blogger"; break;
            case 18: $this->class = "social-icon si-small si-borderless nobottommargin si-cc"; break;
            case 19: $this->class = "social-icon si-small si-borderless nobottommargin si-dribbble"; break;
            case 20: $this->class = "social-icon si-small si-borderless nobottommargin si-evernote"; break;
            case 21: $this->class = "social-icon si-small si-borderless nobottommargin si-flickr"; break;
            case 22: $this->class = "social-icon si-small si-borderless nobottommargin si-google"; break;
            case 23: $this->class = "social-icon si-small si-borderless nobottommargin si-instapapper"; break;
            case 24: $this->class = "social-icon si-small si-borderless nobottommargin si-klout"; break;
            case 25: $this->class = "social-icon si-small si-borderless nobottommargin si-linkedin"; break;
            case 26: $this->class = "social-icon si-small si-borderless nobottommargin si-vk"; break;
            case 27: $this->class = "social-icon si-small si-borderless nobottommargin si-rss"; break;
            case 28: $this->class = "social-icon si-small si-borderless nobottommargin si-skype"; break;
            case 29: $this->class = "social-icon si-small si-borderless nobottommargin si-twitter"; break;
            case 30: $this->class = "social-icon si-small si-borderless nobottommargin si-youtube"; break;
            case 31: $this->class = "social-icon si-small si-borderless nobottommargin si-vimeo"; break;
            case 32: $this->class = "social-icon si-small si-borderless nobottommargin si-aim"; break;
            case 33: $this->class = "social-icon si-small si-borderless nobottommargin si-yahoo"; break;
            case 34: $this->class = "social-icon si-small si-borderless nobottommargin si-email3"; break;
            case 35: $this->class = "social-icon si-small si-borderless nobottommargin si-macstore"; break;
            case 36: $this->class = "social-icon si-small si-borderless nobottommargin si-myspace"; break;
            case 37: $this->class = "social-icon si-small si-borderless nobottommargin si-podcast"; break;
            case 38: $this->class = "social-icon si-small si-borderless nobottommargin si-cloudapp"; break;
            case 39: $this->class = "social-icon si-small si-borderless nobottommargin si-dropbox"; break;
            case 40: $this->class = "social-icon si-small si-borderless nobottommargin si-ebay"; break;
            case 41: $this->class = "social-icon si-small si-borderless nobottommargin si-github"; break;
            case 42: $this->class = "social-icon si-small si-borderless nobottommargin si-googleplay"; break;
            case 43: $this->class = "social-icon si-small si-borderless nobottommargin si-itunes"; break;
            case 44: $this->class = "social-icon si-small si-borderless nobottommargin si-plurk"; break;
            case 45: $this->class = "social-icon si-small si-borderless nobottommargin si-pinboard"; break;
            case 46: $this->class = "social-icon si-small si-borderless nobottommargin si-soundcloud"; break;
            case 47: $this->class = "social-icon si-small si-borderless nobottommargin si-tumblr"; break;
            case 48: $this->class = "social-icon si-small si-borderless nobottommargin si-wordpress"; break;
            case 49: $this->class = "social-icon si-small si-borderless nobottommargin si-yelp"; break;
            case 50: $this->class = "social-icon si-small si-borderless nobottommargin si-instensedebate"; break;
            case 51: $this->class = "social-icon si-small si-borderless nobottommargin si-eventbrite"; break;
            case 52: $this->class = "social-icon si-small si-borderless nobottommargin si-scribd"; break;
            case 53: $this->class = "social-icon si-small si-borderless nobottommargin si-stripe"; break;
            case 54: $this->class = "social-icon si-small si-borderless nobottommargin si-print"; break;
            case 55: $this->class = "social-icon si-small si-borderless nobottommargin si-dwolla"; break;
            case 56: $this->class = "social-icon si-small si-borderless nobottommargin si-statusnet"; break;
            case 57: $this->class = "social-icon si-small si-borderless nobottommargin si-acrobat"; break;
            case 58: $this->class = "social-icon si-small si-borderless nobottommargin si-drupal"; break;
            case 59: $this->class = "social-icon si-small si-borderless nobottommargin si-buffer"; break;
            case 60: $this->class = "social-icon si-small si-borderless nobottommargin si-pocket"; break;
            case 61: $this->class = "social-icon si-small si-borderless nobottommargin si-bitbucked"; break;
            case 62: $this->class = "social-icon si-small si-borderless nobottommargin si-stackoverflow"; break;
            case 63: $this->class = "social-icon si-small si-borderless nobottommargin si-hackernews"; break;
            case 64: $this->class = "social-icon si-small si-borderless nobottommargin si-xing"; break;
            case 65: $this->class = "social-icon si-small si-borderless nobottommargin si-instagram"; break;
            case 66: $this->class = "social-icon si-small si-borderless nobottommargin si-quora"; break;
            case 67: $this->class = "social-icon si-small si-borderless nobottommargin si-openid"; break;
            case 68: $this->class = "social-icon si-small si-borderless nobottommargin si-steam"; break;
            case 69: $this->class = "social-icon si-small si-borderless nobottommargin si-amazon"; break;
            case 70: $this->class = "social-icon si-small si-borderless nobottommargin si-disqus"; break;
            case 71: $this->class = "social-icon si-small si-borderless nobottommargin si-plancast"; break;
            case 72: $this->class = "social-icon si-small si-borderless nobottommargin si-appstore"; break;
            case 73: $this->class = "social-icon si-small si-borderless nobottommargin si-pinterest"; break;
            case 74: $this->class = "social-icon si-small si-borderless nobottommargin si-fivehundredpx"; break;
        }
    }

    public function setIcon($icon)
    {
        switch ($icon) {

            case 1: $this->icon = "icon-facebook"; break;
            case 2: $this->icon = "icon-delicious"; break;
            case 3: $this->icon = "icon-paypal"; break;
            case 4: $this->icon = "icon-flattr"; break;
            case 5: $this->icon = "icon-android"; break;
            case 6: $this->icon = "icon-smashmag"; break;
            case 7: $this->icon = "icon-gplus"; break;
            case 8: $this->icon = "icon-wikipedia"; break;
            case 9: $this->icon = "icon-stumbleupon"; break;
            case 10: $this->icon = "icon-foursquare"; break;
            case 11: $this->icon = "icon-call"; break;
            case 12: $this->icon = "icon-netynineindesigns"; break;
            case 13: $this->icon = "icon-forrst"; break;
            case 14: $this->icon = "icon-digg"; break;
            case 15: $this->icon = "icon-spotify"; break;
            case 16: $this->icon = "icon-reddid"; break;
            case 17: $this->icon = "icon-blogger"; break;
            case 18: $this->icon = "icon-cc"; break;
            case 19: $this->icon = "icon-dribbble"; break;
            case 20: $this->icon = "icon-evernote"; break;
            case 21: $this->icon = "icon-flickr"; break;
            case 22: $this->icon = "icon-google"; break;
            case 23: $this->icon = "icon-instapapper"; break;
            case 24: $this->icon = "icon-klout"; break;
            case 25: $this->icon = "icon-linkedin"; break;
            case 26:$this->icon = "icon-vk"; break;
            case 27: $this->icon = "icon-rss"; break;
            case 28: $this->icon = "icon-skype"; break;
            case 29: $this->icon = "icon-twitter"; break;
            case 30: $this->icon = "icon-youtube"; break;
            case 31: $this->icon = "icon-vimeo"; break;
            case 32: $this->icon = "icon-aim"; break;
            case 33: $this->icon = "icon-yahoo"; break;
            case 34: $this->icon = "icon-email3"; break;
            case 35: $this->icon = "icon-macstore"; break;
            case 36: $this->icon = "icon-myspace"; break;
            case 37: $this->icon = "icon-podcast"; break;
            case 38: $this->icon = "icon-cloudapp"; break;
            case 39: $this->icon = "icon-dropbox"; break;
            case 40: $this->icon = "icon-ebay"; break;
            case 41: $this->icon = "icon-github"; break;
            case 42: $this->icon = "icon-googleplay"; break;
            case 43: $this->icon = "icon-itunes"; break;
            case 44: $this->icon = "icon-plurk"; break;
            case 45: $this->icon = "icon-pinboard"; break;
            case 46: $this->icon = "icon-soundcloud"; break;
            case 47: $this->icon = "icon-tumblr"; break;
            case 48: $this->icon = "icon-wordpress"; break;
            case 49: $this->icon = "icon-yelp"; break;
            case 50: $this->icon = "icon-instensedebate"; break;
            case 51: $this->icon = "icon-eventbrite"; break;
            case 52: $this->icon = "icon-scribd"; break;
            case 53: $this->icon = "icon-stripe"; break;
            case 54: $this->icon = "icon-print"; break;
            case 55: $this->icon = "icon-dwolla"; break;
            case 56: $this->icon = "icon-statusnet"; break;
            case 57: $this->icon = "icon-acrobat"; break;
            case 58: $this->icon = "icon-drupal"; break;
            case 59: $this->icon = "icon-buffer"; break;
            case 60: $this->icon = "icon-pocket"; break;
            case 61: $this->icon = "icon-bitbucket"; break;
            case 62: $this->icon = "icon-stackoverflow"; break;
            case 63: $this->icon = "icon-hackernews"; break;
            case 64: $this->icon = "icon-xing"; break;
            case 65: $this->icon = "icon-instagram"; break;
            case 66: $this->icon = "icon-quora"; break;
            case 67: $this->icon = "icon-openid"; break;
            case 68: $this->icon = "icon-steam"; break;
            case 69: $this->icon = "icon-amazon"; break;
            case 70: $this->icon = "icon-disqus"; break;
            case 71: $this->icon = "icon-plancast"; break;
            case 72: $this->icon = "icon-appstore"; break;
            case 73: $this->icon = "icon-pinterest"; break;
            case 74: $this->icon = "icon-fivehundredpx"; break;

        }
    }

    public function getClass() {return $this->class;}
    public function getIcon() {return $this->icon;}
}