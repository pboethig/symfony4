<?php

/* @ApiPlatform/DataCollector/request.html.twig */
class __TwigTemplate_2b77dbc2586ee8311b1c476fd0a4d6b7f6a16745bf7d1837380d20016d0f7571 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@ApiPlatform/DataCollector/request.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        // line 10
        $context["apiPlatform"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 13
        echo "    ";
        ob_start();
        // line 14
        echo "        ";
        $context["status_color"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", array(), "any", false, true), "ignored_filters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", array(), "any", false, true), "ignored_filters", array()), false)) : (false))) ? ("yellow") : ("default"));
        // line 15
        echo "        ";
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform.svg");
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", array()), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 23
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", array(), "any", false, true), "ignored_filters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", array(), "any", false, true), "ignored_filters", array()), false)) : (false))) {
            // line 24
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->source); })()), "counters", array()), "ignored_filters", array()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 29
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 31, $this->source); })())));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    ";
        // line 36
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 36, $this->source); })()), "resourceClass", array())) ? ("") : (" disabled"));
        echo "\">
        <span class=\"icon\">
            ";
        // line 38
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform.svg");
        echo "
        </span>
        <strong>API Platform</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 45
        echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 47
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", array()), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "resourceMetadata", array())) {
            // line 53
            echo "        <h2>Metadata</h2>
        <h3>Short name: \"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->source); })()), "resourceMetadata", array()), "shortName", array()), "html", null, true);
            echo "\"</h3>
        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Item operations
                    </th>
                    <th scope=\"col\">
                        Attributes
                    </th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 68, $this->source); })()), "resourceMetadata", array()), "itemOperations", array()));
            foreach ($context['_seq'] as $context["key"] => $context["itemOperation"]) {
                // line 69
                echo "                    ";
                echo $context["apiPlatform"]->macro_operationLine($context["key"], $context["itemOperation"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", array(), "any", false, true), "item_operation_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", array(), "any", false, true), "item_operation_name", array()), "")) : ("")));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['itemOperation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Collection operations
                    </th>
                    <th scope=\"col\">
                        Attributes
                    </th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->source); })()), "resourceMetadata", array()), "collectionOperations", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["collectionOperation"]) {
                // line 88
                echo "                    ";
                echo $context["apiPlatform"]->macro_operationLine($context["key"], $context["collectionOperation"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", array(), "any", false, true), "collection_operation_name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", array(), "any", false, true), "collection_operation_name", array()), "")) : ("")));
                echo "
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 90
                echo "                    <tr>
                        <td colspan=\"2\" class=\"text-muted\">
                            No available collection operation for this resource.
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['collectionOperation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">
                        Filters
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->source); })()), "filters", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["id"] => $context["filter"]) {
                // line 109
                echo "                    ";
                $context["ignored_filter"] = ($context["filter"] === null);
                // line 110
                echo "                    <tr";
                if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new Twig_Error_Runtime('Variable "ignored_filter" does not exist.', 110, $this->source); })())) {
                    echo " class=\"status-warning\"";
                }
                echo ">
                        <td>
                            ";
                // line 112
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "
                            ";
                // line 113
                if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new Twig_Error_Runtime('Variable "ignored_filter" does not exist.', 113, $this->source); })())) {
                    // line 114
                    echo "                                <span class=\"newline text-muted\">ignored filter</span>
                            ";
                } else {
                    // line 116
                    echo "                                ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["filter"]);
                    echo "
                            ";
                }
                // line 118
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 121
                echo "                    <tr>
                        <td class=\"text-muted\">
                            No available filter declared for this resource.
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Attributes
                    </th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 141, $this->source); })()), "resourceMetadata", array()), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (($context["key"] != "filters")) {
                    // line 142
                    echo "                    <tr>
                        <th scope=\"row\">
                            ";
                    // line 144
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "
                        </th>
                        <td>";
                    // line 147
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"], 2);
                    // line 148
                    echo "</td>
                    </tr>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </tbody>
        </table>
        <h2>Acceptable Content Types</h2>
        <table>
            <thead>
            <tr>
                <th>Content Type</th>
            </tr>
            </thead>

            <tbody>
                ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 162, $this->source); })()), "acceptableContentTypes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 163
                echo "                    <tr>
                        <td>";
                // line 164
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_operationLine($__key__ = null, $__operation__ = null, $__actualOperationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "operation" => $__operation__,
            "actualOperationName" => $__actualOperationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "operationLine"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "operationLine"));

            // line 4
            echo "    <tr>
        <th scope=\"row\"";
            // line 5
            if (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 5, $this->source); })()) == (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new Twig_Error_Runtime('Variable "actualOperationName" does not exist.', 5, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</th>
        <td";
            // line 6
            if (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 6, $this->source); })()) == (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new Twig_Error_Runtime('Variable "actualOperationName" does not exist.', 6, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new Twig_Error_Runtime('Variable "operation" does not exist.', 6, $this->source); })()), 1);
            echo "</td>
    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ApiPlatform/DataCollector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 6,  414 => 5,  411 => 4,  391 => 3,  378 => 167,  369 => 164,  366 => 163,  362 => 162,  349 => 151,  340 => 148,  338 => 147,  333 => 144,  329 => 142,  324 => 141,  308 => 127,  297 => 121,  290 => 118,  284 => 116,  280 => 114,  278 => 113,  274 => 112,  266 => 110,  263 => 109,  258 => 108,  244 => 96,  233 => 90,  225 => 88,  220 => 87,  202 => 71,  193 => 69,  189 => 68,  172 => 54,  169 => 53,  167 => 52,  159 => 47,  155 => 45,  146 => 44,  131 => 38,  125 => 36,  123 => 35,  114 => 34,  102 => 31,  99 => 30,  96 => 29,  90 => 26,  86 => 24,  84 => 23,  79 => 21,  75 => 19,  73 => 18,  70 => 17,  64 => 15,  61 => 14,  58 => 13,  49 => 12,  39 => 1,  37 => 10,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% macro operationLine(key, operation, actualOperationName) %}
    <tr>
        <th scope=\"row\"{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{ key }}</th>
        <td{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{- profiler_dump(operation, 1) -}}</td>
    </tr>
{% endmacro %}

{% import _self as apiPlatform %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = collector.counters.ignored_filters|default(false) ? 'yellow' : 'default' %}
        {{ include('@ApiPlatform/DataCollector/api-platform.svg') }}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
        </div>
        {% if collector.counters.ignored_filters|default(false) %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.counters.ignored_filters }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true, status: status_color }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label{{ collector.resourceClass ? '' : ' disabled' }}\">
        <span class=\"icon\">
            {{ include('@ApiPlatform/DataCollector/api-platform.svg') }}
        </span>
        <strong>API Platform</strong>
    </span>
{% endblock %}

{% block panel %}
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    {% if collector.resourceMetadata %}
        <h2>Metadata</h2>
        <h3>Short name: \"{{ collector.resourceMetadata.shortName }}\"</h3>
        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Item operations
                    </th>
                    <th scope=\"col\">
                        Attributes
                    </th>
                </tr>
            </thead>

            <tbody>
                {% for key, itemOperation in collector.resourceMetadata.itemOperations %}
                    {{ apiPlatform.operationLine(key, itemOperation, collector.requestAttributes.item_operation_name|default('')) }}
                {% endfor %}
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Collection operations
                    </th>
                    <th scope=\"col\">
                        Attributes
                    </th>
                </tr>
            </thead>

            <tbody>
                {% for key, collectionOperation in collector.resourceMetadata.collectionOperations %}
                    {{ apiPlatform.operationLine(key, collectionOperation, collector.requestAttributes.collection_operation_name|default('')) }}
                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"text-muted\">
                            No available collection operation for this resource.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">
                        Filters
                    </th>
                </tr>
            </thead>
            <tbody>
                {% for id, filter in collector.filters %}
                    {% set ignored_filter = filter is same as(null) %}
                    <tr{% if ignored_filter %} class=\"status-warning\"{% endif %}>
                        <td>
                            {{ id }}
                            {% if ignored_filter %}
                                <span class=\"newline text-muted\">ignored filter</span>
                            {% else %}
                                {{ dump(filter) }}
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td class=\"text-muted\">
                            No available filter declared for this resource.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">
                        Attributes
                    </th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>

            <tbody>
                {% for key, value in collector.resourceMetadata.attributes if key != 'filters' %}
                    <tr>
                        <th scope=\"row\">
                            {{ key }}
                        </th>
                        <td>
                            {{- profiler_dump(value, 2) -}}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <h2>Acceptable Content Types</h2>
        <table>
            <thead>
            <tr>
                <th>Content Type</th>
            </tr>
            </thead>

            <tbody>
                {% for type in collector.acceptableContentTypes %}
                    <tr>
                        <td>{{ type }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@ApiPlatform/DataCollector/request.html.twig", "/home/wwwroot/sf4/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/DataCollector/request.html.twig");
    }
}
