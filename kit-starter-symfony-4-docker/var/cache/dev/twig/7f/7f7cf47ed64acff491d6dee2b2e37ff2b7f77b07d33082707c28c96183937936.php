<?php

/* logo.html.twig */
class __TwigTemplate_39ba5125c8ab0c1fb04e59a9e5b8d566441f509535c8538e370bfbdb5f4c4b8f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logo.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
    <div class=\"logo-holder\">
        <div class=\"logo-text\">
            <div class=\"logo-title\">
                Travolta
            </div>
            <div class=\"logo-subtitle\">
                Your movie demo app
            </div>
        </div>
        <div class=\"logo-image\">
            <img alt=\"logo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/john-travolta.svg"), "html", null, true);
        echo "\" width=\"60\">
        </div>
    </div>
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{path('index')}}\">
    <div class=\"logo-holder\">
        <div class=\"logo-text\">
            <div class=\"logo-title\">
                Travolta
            </div>
            <div class=\"logo-subtitle\">
                Your movie demo app
            </div>
        </div>
        <div class=\"logo-image\">
            <img alt=\"logo\" src=\"{{asset('/images/john-travolta.svg')}}\" width=\"60\">
        </div>
    </div>
</a>", "logo.html.twig", "/home/wwwroot/sf4/templates/logo.html.twig");
    }
}
