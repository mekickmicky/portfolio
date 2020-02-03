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

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/partials/header.htm */
class __TwigTemplate_90c6323f56de91339e65efd78387dfd4df0826c4de539fa1ecf82b8ddf736fbd extends \Twig\Template
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
        echo "<div class=\"header-content\">
    <div class=\"header-content-inner\">
        <h1>CREATIVE</h1>
        <hr>
        <p>What inspires you? We all need some inspiration now and then. Life gets crazy and it’s easy to lose that spark. The simplest way for me to get inspired is to go outside and look up.</p>
        <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-content\">
    <div class=\"header-content-inner\">
        <h1>CREATIVE</h1>
        <hr>
        <p>What inspires you? We all need some inspiration now and then. Life gets crazy and it’s easy to lose that spark. The simplest way for me to get inspired is to go outside and look up.</p>
        <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More</a>
    </div>
</div>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/header.htm", "");
    }
}
