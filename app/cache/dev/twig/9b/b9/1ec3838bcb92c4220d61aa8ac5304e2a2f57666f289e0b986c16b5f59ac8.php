<?php

/* testBundle:Default:source.html.twig */
class __TwigTemplate_9bb91ec3838bcb92c4220d61aa8ac5304e2a2f57666f289e0b986c16b5f59ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/css/styles.css"), "html", null, true);
        echo "\">
    
</head>
<body class=\"back\">
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>

</htm>";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  65 => 10,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  42 => 12,  40 => 10,  33 => 6,  29 => 5,  25 => 4,  20 => 1,);
    }
}
