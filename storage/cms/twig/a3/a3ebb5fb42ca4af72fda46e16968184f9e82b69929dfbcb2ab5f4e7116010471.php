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

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/partials/contact.htm */
class __TwigTemplate_92fc05b4197c8746f6aca904c1eace654c56ace6262840caf7a504f6d1bc8afd extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <h2 class=\"section-heading\">Let's Get In Touch!</h2>
            <hr class=\"primary\">
            <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
        <div class=\"col-lg-4 col-lg-offset-2 text-center\">
            <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
            <p>123-456-6789</p>
        </div>
        <div class=\"col-lg-4 text-center\">
            <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
            <p><a href=\"mailto:your-email@your-domain.com\">be.creative@example.com</a></p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <h2 class=\"section-heading\">Let's Get In Touch!</h2>
            <hr class=\"primary\">
            <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
        <div class=\"col-lg-4 col-lg-offset-2 text-center\">
            <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
            <p>123-456-6789</p>
        </div>
        <div class=\"col-lg-4 text-center\">
            <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
            <p><a href=\"mailto:your-email@your-domain.com\">be.creative@example.com</a></p>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/contact.htm", "");
    }
}
