<?php

/* testBundle:Default:userprofile.html.twig */
class __TwigTemplate_67f756c56d0edb1ff7f4d0fabffefa793b1eaa89996cc362a3b0364808298efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("testBundle:Default:userpage.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'postcontent' => array($this, 'block_postcontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBundle:Default:userpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_postcontent($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"col-sm-4\">
    <div class=\"container\" style=\"width:100%;padding: 20px;\">
        <div class=\"jumbotron profile\" align=\"left\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getFirstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getLastname", array(), "method"), "html", null, true);
        echo "</h2>
            <h4>User Name: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getUsername", array(), "method"), "html", null, true);
        echo "</h4>
            <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getEmail", array(), "method"), "html", null, true);
        echo "</h4>
            
        </div>
    </div>
</div>
<div class=\"col-sm-8\">
";
        // line 15
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
            // line 16
            echo "\t";
            if (((isset($context["userid"]) ? $context["userid"] : $this->getContext($context, "userid")) == $this->getAttribute($this->getAttribute($context["post"], "getUserid", array(), "method"), "getUserid", array(), "method"))) {
                // line 17
                echo "\t    <div class=\"container profile\" align=\"left\">
\t        
                <div class=\"panel panel-default post-panel\">
                    <div class=\"panel-heading header-trans\">

                      <h3 class=\"panel-title\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - $this->getAttribute($context["loop"], "index", array())), array(), "array"), "html", null, true);
                echo "
                          <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("postpage", array("postid" => $this->getAttribute($context["post"], "getPostid", array(), "method"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs buttons post-comment\">Comment</a>
                          <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("like", array("postid" => $this->getAttribute($context["post"], "getPostid", array(), "method"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs buttons post-like\" style=\"float: right;\">Like</a>
                          <div class=\"likes\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - $this->getAttribute($context["loop"], "index", array())), array(), "array"), "html", null, true);
                echo " Likes</div>
                      </h3>

                    </div>
                    <div class=\"panel-body\">
                      ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getPostcontent", array(), "method"), "html", null, true);
                echo "
                    </div>
                </div>
\t    </div>
\t";
            }
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
        // line 36
        echo "</div>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "testBundle:Default:userprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 39,  132 => 36,  112 => 30,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  85 => 17,  82 => 16,  65 => 15,  56 => 9,  52 => 8,  46 => 7,  40 => 3,  37 => 2,  11 => 1,);
    }
}
