<?php

/* ConexionEstadosBundle:Estados:index.html.twig */
class __TwigTemplate_c04b6264913761d0d93a244a4c90343783be3079948fb6a270af7d1533dcc55f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'loader' => array($this, 'block_loader'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"content-ixpo\">
        <div class=\"content\">
            <div class=\"panel panel-primary\">

                <div class=\"panel-body\">
                    <div class=\"section-head\">
                        <h2>Estados</h2>
                    </div>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active taba\"><a href=\"#tab_a\" data-toggle=\"tab\">México</a></li>
                        <li class=\"tabb\"><a href=\"#tab_b\" data-toggle=\"tab\">USA</a></li>
                        <li class=\"tabc\"><a href=\"#tab_c\" data-toggle=\"tab\">...</a></li>
                        <li class=\"tabd\"><a href=\"#tab_d\" data-toggle=\"tab\">...</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab_a\">
                            <table style=\"width:100%;\" class=\"table-bordered table-detail\">
                                <thead>
                                <th>id</th>
                                <th>nombre</th>
                                <th>abreviatura</th>
                                </thead>
                                <tbody>
                                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "mx", array(), "array"), "estados", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 40
            echo "                                        <tr>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "nombre", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "abbr", array(), "array"), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    
                                </tbody>
                            </table>
                        </div>
                        <div class=\"tab-pane\" id=\"tab_b\">
                            <table style=\"width:100%;\" class=\"table-bordered table-detail\">
                                <thead>
                                <th>id</th>
                                <th>nombre</th>
                                <th>abreviatura</th>
                                </thead>
                                <tbody>
                                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "us", array(), "array"), "estados", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 58
            echo "                                        <tr>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "nombre", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "abbr", array(), "array"), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    
                                </tbody>
                            </table>
                        </div>
                        <div class=\"tab-pane\" id=\"tab_c\">

                        </div>
                        <div class=\"tab-pane\" id=\"tab_d\">

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
";
    }

    // line 82
    public function block_loader($context, array $blocks = array())
    {
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 93
        echo "    ";
        // line 94
        echo "    <script>
        ";
        // line 98
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "ConexionEstadosBundle:Estados:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 98,  168 => 94,  166 => 93,  160 => 86,  157 => 85,  152 => 82,  131 => 63,  122 => 61,  118 => 60,  114 => 59,  111 => 58,  107 => 57,  93 => 45,  84 => 43,  80 => 42,  76 => 41,  73 => 40,  69 => 39,  44 => 16,  41 => 15,  34 => 4,  31 => 3,);
    }
}
