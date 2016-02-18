<?php
class Main{
    protected $title =  "<title>Welcome Gerald</title>";
    protected $description =  "<meta name='description' conten='welcome to my websites'";
    protected $keywords =  "<meta name='keywords' conten='computer, site'";
    protected $author =  "<meta name='author' conten='Gerald'";

    public function get_title(){
        echo $this->title;
    }
    public function get_description(){
        echo $this->description;
    }
    public function get_keywords(){
        echo $this->keywords;
    }
    public function get_author(){
        echo $this->author;
    }

    public function get_start_of_site(){
        $start = <<<EOD
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;chrset=ISO-8859-1" />
EOD;
        echo $start;
    }
    public function get_close_header()
    {
        $close_header = <<<EOD
        </head>
        </body>
EOD;

        echo $close_header;
    }
    public function get_content(){
        $content = <<<EOD
lorem Ipsum is a simply dummi text of the printing and typesetting industy.
Lorem Ipsum has been the industry's standard dummy textgx ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type
specunen book. It has survived not only five centuries, but also the leap into electronic
typrsetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
Letraset sheets containing Lorem Ipsum passages, and more recentlywith desktop publishing
siftware like Aldus PageMaker include vversions of Lorem Ipsum.
EOD;
    echo $content;

    }

    public function get_close_page(){
        $close_page = <<<EOD
</body>
</html>
EOD;
        echo $close_page;

    }
}
