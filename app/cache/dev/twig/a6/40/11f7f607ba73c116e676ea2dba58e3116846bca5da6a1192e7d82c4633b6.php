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
        echo "\">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("login_homepage");
        echo "\">Home 
                <span class=\"sr-only\">current page</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("profile");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
        </li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "\">Logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class=\"container wall\" align=\"center\">
    <div class=\"jumbotron\" align=\"center\">
        <form method=\"post\" role=\"post\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("post");
        echo "\">
            <div class=\"form-group\">
              <textarea id=\"inpt-comment\" name=\"postcomment\" type=\"text\" class=\"form-control\" placeholder=\"Wrtie new post\"></textarea>
            </div>
            <input id=\"post-button\" class=\"btn btn-primary btn-md\" type=\"Submit\" value=\"Post\">
        </form>
    </div>

</div>

";
        // line 66
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
            // line 67
            echo "    <div class=\"container wall\" align=\"center\">
        <div class=\"jumbotron\" align=\"left\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                      <h3 class=\"panel-title\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - $this->getAttribute($context["loop"], "index", array())), array(), "array"), "html", null, true);
            echo "
                          <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("postpage", array("postid" => $this->getAttribute($context["post"], "getPostid", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs \" style=\"float: right;\">Like</a>
                      </h3>
                      
                    </div>
                    <div class=\"panel-body\">
                      ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostcontent", array(), "method"), "html", null, true);
            echo "
                    </div>
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
        return array (  156 => 77,  148 => 72,  144 => 71,  138 => 67,  121 => 66,  108 => 56,  96 => 47,  69 => 25,  61 => 20,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
