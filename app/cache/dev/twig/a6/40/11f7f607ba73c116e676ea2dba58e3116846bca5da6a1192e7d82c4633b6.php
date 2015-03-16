<?php

/* testBundle:Default:userpage.html.twig */
class __TwigTemplate_a64011f7f607ba73c116e676ea2dba58e3116846bca5da6a1192e7d82c4633b6 extends Twig_Template
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
            'postcontent' => array($this, 'block_postcontent'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("login_homepage");
        echo "\" style=\"font-family: Stalemate-Regular;font-size: 25px\">
          CSE Friends</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["home"]) ? $context["home"] : $this->getContext($context, "home")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("login_homepage");
        echo "\">Home 
                <span class=\"sr-only\">current page</span>
            </a>
        </li>
        <li class=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("profile");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
        </li>
        
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "\">Logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
";
        // line 38
        $this->displayBlock('postcontent', $context, $blocks);
        // line 40
        $this->displayBlock('content', $context, $blocks);
    }

    // line 38
    public function block_postcontent($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "<div class=\"container wall\" align=\"center\">
    <div class=\"jumbotron\" align=\"center\">
        <form method=\"post\" role=\"post\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("post");
        echo "\">
            <div class=\"form-group\">
              <textarea id=\"inpt-post\" name=\"post\" type=\"text\" class=\"form-control\" placeholder=\"Write new post\"></textarea>
            </div>
            <input class=\"btn btn-primary btn-md button-style buttons\" type=\"Submit\" value=\"Post\">
        </form>
    </div>

</div>

    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 54
            echo "    <div class=\"container wall\" align=\"left\">
        
        <div class=\"panel panel-default post-panel\">
            <div class=\"panel-heading header-trans\">
              <h3 class=\"panel-title\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - $this->getAttribute($context["loop"], "index", array())), array(), "array"), "html", null, true);
            echo "

                  <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("postpage", array("postid" => $this->getAttribute($context["post"], "getPostid", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs buttons post-comment\">Comment</a>
                  <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("like", array("postid" => $this->getAttribute($context["post"], "getPostid", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs buttons post-like\">Like</a>
                  <div class=\"likes\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - $this->getAttribute($context["loop"], "index", array())), array(), "array"), "html", null, true);
            echo " Likes</div>
              </h3>

            </div>
            <div class=\"panel-body\">
              ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostcontent", array(), "method"), "html", null, true);
            echo "
            </div>
        </div>
        
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "testBundle:Default:userpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 67,  165 => 62,  161 => 61,  157 => 60,  152 => 58,  146 => 54,  129 => 53,  116 => 43,  112 => 41,  109 => 40,  104 => 38,  100 => 40,  98 => 38,  89 => 32,  78 => 26,  74 => 25,  67 => 21,  63 => 20,  53 => 13,  41 => 3,  38 => 2,  11 => 1,);
    }
}
