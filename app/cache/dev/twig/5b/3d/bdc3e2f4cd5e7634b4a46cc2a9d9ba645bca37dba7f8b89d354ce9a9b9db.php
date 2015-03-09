<?php

/* testBundle:Default:index.html.twig */
class __TwigTemplate_5b3dbdc3e2f4cd5e7634b4a46cc2a9d9ba645bca37dba7f8b89d354ce9a9b9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("testBundle:Default:source.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBundle:Default:source.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container login-container\">
    
    <div class=\"jumbotron\">
        <div id=\"login\" class=\"container\">
            
            <h2 align=\"center\">Welcome to D5</h2>
            <h3>Please Sign In</h3>
            
            ";
        // line 13
        if (array_key_exists("error", $context)) {
            // line 14
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 18
        echo "            
            <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("login_homepage");
        echo "\">
                
                <div id=\"username\" class=\"input-group\">
                    <input id=\"inpt-username\" name=\"username\" type=\"text\" class=\"form-control\" placeholder=\"User Name\" aria-describedby=\"basic-addon1\">
                </div>

                <div id=\"password\" class=\"input-group\">
                    <input id=\"inpt-password\" name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" aria-describedby=\"basic-addon2\">
                </div>
                <div align=\"center\">
                    <input id=\"login-button\" class=\"btn btn-primary btn-md\" type=\"Submit\" value=\"Login\" align=\"center\">
                    <a id=\"signup-button\" align=\"center\" class=\"btn btn-primary btn-md\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("signup");
        echo "\">Sign Up</a>
                </div>
            </form>
            
        </div>
        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  64 => 19,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  39 => 4,  36 => 3,  11 => 2,);
    }
}
