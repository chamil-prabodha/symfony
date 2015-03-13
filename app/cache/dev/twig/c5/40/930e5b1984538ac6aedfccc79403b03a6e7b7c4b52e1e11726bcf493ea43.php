<?php

/* testBundle:Default:signup.html.twig */
class __TwigTemplate_c540930e5b1984538ac6aedfccc79403b03a6e7b7c4b52e1e11726bcf493ea43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("testBundle:Default:source.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container signup-container\">
    <div class=\"jumbotron\">
        <div id=\"signup\" class=\"container\">

            <h2 align=\"center\">Welcome to D5</h2>
            <h3>Sign Up</h3>
            
            ";
        // line 12
        if (array_key_exists("error", $context)) {
            // line 13
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")));
            foreach ($context['_seq'] as $context["_key"] => $context["err"]) {
                // line 14
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
                // line 15
                echo twig_escape_filter($this->env, $context["err"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            <form method=\"post\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("signup");
        echo "\">

                <div class=\"input-group signup\">
                    <span class=\"input-group-addon\" id=\"username-addon\">Username</span>
                    <input id=\"signup-username\" name=\"username\" type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"username-addon\">
                </div>
                <div class=\"input-group signup\">
                    <span class=\"input-group-addon\" id=\"firstname-addon\">First Name</span>
                    <input id=\"signup-firstname\" name=\"firstname\" type=\"text\" class=\"form-control\" placeholder=\"First Name\" aria-describedby=\"firstname-addon\">
                </div>
                <div class=\"input-group signup\">
                    <span class=\"input-group-addon\" id=\"lastname-addon\">Last Name</span>
                    <input id=\"signup-lastname\" name=\"lastname\" type=\"text\" class=\"form-control\" placeholder=\"Last Name\" aria-describedby=\"lastname-addon\">
                </div>
                <div class=\"input-group signup\">
                    <span class=\"input-group-addon\" id=\"password-addon\">Password</span>
                    <input id=\"signup-password\" name=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" aria-describedby=\"password-addon\">
                </div>
                <div class=\"input-group signup\">
                    <span class=\"input-group-addon\" id=\"email-addon\">Email</span>
                    <input id=\"signup-email\" name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Email\" aria-describedby=\"email-addon\">
                </div>
                <div align=\"center\">
                    <input class=\"btn btn-primary btn-md\" type=\"submit\" value=\"Sign Up\">
                </div>
            </form>

        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  67 => 18,  58 => 15,  55 => 14,  50 => 13,  48 => 12,  39 => 5,  36 => 4,  11 => 1,);
    }
}
