<?php

/* item.html.twig */
class __TwigTemplate_7693dabe87c78500152b6e0b5f8c5d6bcfff3baa816ff7a93722d41141c08f26 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1753441213")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* item.html.twig */
class __TwigTemplate_7693dabe87c78500152b6e0b5f8c5d6bcfff3baa816ff7a93722d41141c08f26_1753441213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3\">
\t\t\t\t";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 11
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 13)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 14
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "enabled", array())) {
            // line 18
            echo "\t\t\t";
            echo $this->env->getExtension('JSCommentsTwigExtension')->funcJSComments();
            echo "
\t\t";
        }
        // line 20
        echo "\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  90 => 18,  88 => 17,  83 => 14,  81 => 13,  77 => 11,  75 => 10,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% block content %}*/
/* 		{% if config.plugins.breadcrumbs.enabled %}*/
/* 			{% include 'partials/breadcrumbs.html.twig' %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="blog-content-item grid pure-g-r">*/
/* 			<div id="item" class="block pure-u-2-3">*/
/* 				{% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}*/
/* 			</div>*/
/* 			<div id="sidebar" class="block size-1-3 pure-u-1-3">*/
/* 				{% include 'partials/sidebar.html.twig' with {'blog':page.parent} %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% if config.plugins.jscomments.enabled %}*/
/* 			{{ jscomments() }}*/
/* 		{% endif %}*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
