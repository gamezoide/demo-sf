<?php

/* ::base.html.twig */
class __TwigTemplate_b5755d7322f60c7975e7abdd7e007c909da8483be17890329b3d3e17368ebb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrap\">
            <div class=\"container\">
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "        </div>
    </div>
</div>
";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "
";
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "DEMO";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <!--[if gte IE 9]>
                <style type=\"text/css\"> .gradient { filter: none; } </style>
            <![endif]-->
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap/bootstrap-theme.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap/sticky-footer-navbar.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap/bootstrap-glyphicons.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap/bootstrap-select.css"), "html", null, true);
        echo "\" />
            ";
        // line 24
        echo "            ";
        // line 25
        echo "
            ";
        // line 27
        echo "            <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
            <style type=\"text/css\">
                html,body {
                    font-family: Arial,Helvetica,sans-serif;
                    background-image:url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/polygon.jpg"), "html", null, true);
        echo ");
                }

            </style>
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/default.css"), "html", null, true);
        echo "\" />

        ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "    <div id=\"footer\">
        <div class=\"footer\">
            ";
        // line 51
        echo "        </div>
    </div>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    ";
        // line 64
        echo "    ";
        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 74
        echo "    <script>
        ";
        // line 77
        echo "    </script>  
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 77,  180 => 74,  176 => 68,  172 => 67,  168 => 66,  163 => 65,  161 => 64,  156 => 61,  152 => 60,  148 => 58,  145 => 57,  139 => 51,  135 => 48,  132 => 47,  127 => 43,  120 => 35,  113 => 31,  107 => 27,  104 => 25,  102 => 24,  98 => 15,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  77 => 8,  74 => 7,  68 => 6,  63 => 81,  61 => 57,  58 => 56,  55 => 54,  53 => 47,  48 => 44,  46 => 43,  37 => 38,  35 => 7,  31 => 6,  24 => 1,);
    }
}
