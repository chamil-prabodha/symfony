<?php

/* testBundle:Default:test.html.twig */
class __TwigTemplate_2d175d21cd5d65d49558a1282c637b1e7b7656f94fba81d2f62930afdcb7d462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
