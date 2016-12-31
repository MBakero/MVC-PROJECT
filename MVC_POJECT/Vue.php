<?php

/**
 * Created by PhpStorm.
 * User: Bakero
 * Date: 5/23/2016
 * Time: 1:48 AM
 */
class Vue
{

    protected $content;
    protected $title;

    public function __construct($title)
    {
        $this->title=$title;
        $this->content = "
<!DOCTYPE html>
    <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\"/>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <title>TP_MVC</title>
            <link rel=\"stylesheet\" href=\"css/bootstrap.css\"/>
            <link rel=\"stylesheet\" href=\"css/bootwatch.css\"/>
            <link rel=\"stylesheet\" href=\"css/style.css\"/>
        </head>
        <body>
            <script src=\"js/jquery-2.2.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>

            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">TP_MVC</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"Controller.php\">Listes Des Clients <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"Controller.php?action=allprdts\">Listes des Produits</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\">Link</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>




        </body>
    </html>";
    }

    public function getContent()
    {
        return $this->content;
    }
    public function finirContent()
    {
        $this->content.="</div></body></html>";
    }
    public function afficher()
    {
        $this->finirContent(); echo $this->getContent();
    }
}