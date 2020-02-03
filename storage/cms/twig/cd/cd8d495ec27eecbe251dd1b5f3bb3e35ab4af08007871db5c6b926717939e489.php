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

/* C:\xampp\htdocs\octobertest/themes/gkodev-creative/partials/portfolio.htm */
class __TwigTemplate_92ea3a036bfaf25d1d4524e925988ebb084f7822fb3c80898f024b675bd788c8 extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row no-gutter\">
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal1\" class=\"portfolio-box\" data-toggle=\"modal\">
               
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/1.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal2\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/2.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal3\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/3.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal4\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/4.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal5\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/5.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal6\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/6.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  116 => 66,  98 => 51,  80 => 36,  62 => 21,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row no-gutter\">
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal1\" class=\"portfolio-box\" data-toggle=\"modal\">
               
                <img src=\"{{ 'assets/images/portfolio/1.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal2\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"{{ 'assets/images/portfolio/2.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal3\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"{{ 'assets/images/portfolio/3.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal4\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"{{ 'assets/images/portfolio/4.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal5\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"{{ 'assets/images/portfolio/5.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-4 col-sm-6\">
            <a href=\"#portfolioModal6\" class=\"portfolio-box\" data-toggle=\"modal\">
                <img src=\"{{ 'assets/images/portfolio/6.jpg'|theme }}\" class=\"img-responsive\" alt=\"\">
                <div class=\"portfolio-box-caption\">
                    <div class=\"portfolio-box-caption-content\">
                        <div class=\"project-category text-faded\">
                            Category
                        </div>
                        <div class=\"project-name\">
                            Project Name
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\octobertest/themes/gkodev-creative/partials/portfolio.htm", "");
    }
}
