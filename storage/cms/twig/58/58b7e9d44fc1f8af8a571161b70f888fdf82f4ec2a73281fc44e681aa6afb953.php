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

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/partials/separator_two.htm */
class __TwigTemplate_ebec6e582300974dc5fc1ca3308759e17cbb71d2343de1942ed1dda313a55535 extends \Twig\Template
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
        echo "<div class=\"container text-center\">
    <div class=\"call-to-action\">
        <h2>Free Creative Theme</h2>
        <a href=\"#\" class=\"btn btn-default btn-xl wow tada\">Download Now!</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/separator_two.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container text-center\">
    <div class=\"call-to-action\">
        <h2>Free Creative Theme</h2>
        <a href=\"#\" class=\"btn btn-default btn-xl wow tada\">Download Now!</a>
    </div>
</div>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/separator_two.htm", "");
    }
}
