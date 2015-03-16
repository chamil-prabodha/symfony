<?php

/* testBundle:Default:postpage.html.twig */
class __TwigTemplate_ee06e925648114078111d0502349621bfbd910868908659c02e6a93a97fc90c9 extends Twig_Template
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
<div class=\"container wall\" align=\"center\">
        <div class=\"jumbotron\" align=\"left\">
            <div class=\"panel panel-default post-panel\">
                <div class=\"panel-heading header-trans\">
                  <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo "

                      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("like", array("postid" => (isset($context["postid"]) ? $context["postid"] : $this->getContext($context, "postid")))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs buttons post-like\">Like</a>

                      <div class=\"likes\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo " Likes</div>
                  </h3>

                </div>
                <div class=\"panel-body\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "

                </div>

            </div>
            <div class=\"container\" style=\"width:70%\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 24
            echo "                        
                <div class=\"panel panel-default post-panel\">
                    <div class=\"panel-heading header-trans\">
                        <h3 class=\"panel-title\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentor"]) ? $context["commentor"] : $this->getContext($context, "commentor")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "html", null, true);
            echo "
                            
                        </h3>

                    </div>
                    <div class=\"panel-body\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "getCommentcontent", array()), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                <form method=\"post\" role=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("comment", array("postid" => (isset($context["postid"]) ? $context["postid"] : $this->getContext($context, "postid")))), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                      <textarea id=\"inpt-comment\" name=\"comment\" type=\"text\" class=\"form-control\" placeholder=\"Write new comment\"></textarea>
                    </div>
                    <input id=\"comment-button\" class=\"btn btn-primary btn-md buttons\" type=\"Submit\" value=\"Comment\">
                </form>
            </div>
        </div>
     
    </div>

";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "testBundle:Default:postpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  124 => 38,  105 => 33,  96 => 27,  91 => 24,  74 => 23,  65 => 17,  57 => 12,  52 => 10,  47 => 8,  40 => 3,  37 => 2,  11 => 1,);
    }
}
