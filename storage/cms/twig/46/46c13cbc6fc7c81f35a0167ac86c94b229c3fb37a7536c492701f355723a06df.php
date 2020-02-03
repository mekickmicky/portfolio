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

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/partials/separator_one.htm */
class __TwigTemplate_c30102e122a1e652987e17dd52ea968f247ca18d7f5baf5c678faeaaf23f9f98 extends \Twig\Template
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
            <h2 class=\"section-heading\">Be creative!</h2>
            <hr class=\"light\">
            <p class=\"text-faded\">What inspires you? We all need some inspiration now and then. Life gets crazy and it’s easy to lose that spark. The simplest way for me to get inspired is to go outside and look up. </p>
            <a href=\"#\" class=\"btn btn-default btn-xl\">Get Started!</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/separator_one.htm";
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
            <h2 class=\"section-heading\">Be creative!</h2>
            <hr class=\"light\">
            <p class=\"text-faded\">What inspires you? We all need some inspiration now and then. Life gets crazy and it’s easy to lose that spark. The simplest way for me to get inspired is to go outside and look up. </p>
            <a href=\"#\" class=\"btn btn-default btn-xl\">Get Started!</a>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/separator_one.htm", "");
    }
}
