<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/layouts/default.htm */
class __TwigTemplate_dad02dcbedf2f24f6b5f3f02f19626a717bbed970000f2a35b58205db1eafd36 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Creative - Start Bootstrap Theme</title>
    ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "    
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/font-awesome/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/app.css"]);
        // line 20
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Creative</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
       ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "    </header>

    <section class=\"bg-primary\" id=\"about\">
        ";
        // line 79
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("separator_one"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 80
        echo "    </section>
    
    <section id=\"services\">
        ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "    </section>

    <section class=\"no-padding\" id=\"portfolio\">
        ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "    </section>

    <aside class=\"bg-dark\">
        ";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("separator_two"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
        echo "    </aside>

    <section id=\"contact\">
       ";
        // line 95
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "    </section>
    ";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 98
        echo "        <!-- Scripts -->
    <script src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascripts/jquery.js", 1 => "assets/javascripts/bootstrap.js", 2 => "assets/javascripts/jquery.easing.min.js", 3 => "assets/javascripts/jquery.fittext.js", 4 => "assets/javascripts/wow.min.js", 5 => "assets/javascripts/creative.js"]);
        // line 107
        echo "\"></script>
    
    ";
        // line 109
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 110
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 111
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 111,  192 => 110,  181 => 109,  177 => 107,  175 => 99,  172 => 98,  168 => 97,  165 => 96,  161 => 95,  156 => 92,  152 => 91,  147 => 88,  143 => 87,  138 => 84,  134 => 83,  129 => 80,  125 => 79,  120 => 76,  116 => 75,  59 => 20,  57 => 15,  54 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Creative - Start Bootstrap Theme</title>
    {% styles %}
    
    <link href=\"{{ [
\t\t'assets/css/bootstrap.min.css',
\t\t'assets/font-awesome/css/font-awesome.min.css',
\t\t'assets/css/animate.min.css',
\t\t'assets/css/app.css'
    ]|theme }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\">

    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Creative</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
       {% partial \"header\" %}
    </header>

    <section class=\"bg-primary\" id=\"about\">
        {% partial \"separator_one\" %}
    </section>
    
    <section id=\"services\">
        {% partial \"services\" %}
    </section>

    <section class=\"no-padding\" id=\"portfolio\">
        {% partial \"portfolio\" %}
    </section>

    <aside class=\"bg-dark\">
        {% partial \"separator_two\" %}
    </aside>

    <section id=\"contact\">
       {% partial \"contact\" %}
    </section>
    {% partial \"modals\" %}
        <!-- Scripts -->
    <script src=\"{{ [
        'assets/javascripts/jquery.js',
        'assets/javascripts/bootstrap.js',
        'assets/javascripts/jquery.easing.min.js',
        'assets/javascripts/jquery.fittext.js',
        'assets/javascripts/wow.min.js',
        'assets/javascripts/creative.js'
        
    ]|theme }}\"></script>
    
    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/layouts/default.htm", "");
    }
}
