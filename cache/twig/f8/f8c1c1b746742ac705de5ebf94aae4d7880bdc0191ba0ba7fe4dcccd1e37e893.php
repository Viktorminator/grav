<?php

/* modular/tutorials.html.twig */
class __TwigTemplate_9dbfdecf97c3c1ea6ff9282f8722629f5e5cab3e2b622c00389d4b00d76ea9e1 extends Twig_Template
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
        echo "<div class=\"modular-row tutorials ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <div class=\"tutorial-items\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "tutorials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 5
            echo "        <div class=\"tutorial\">
            ";
            // line 6
            if ($this->getAttribute($context["tutorial"], "icon", array())) {
                // line 7
                echo "            <div class=\"glyph fs1\">
                <div class=\"clearfix pbs\">
                    <svg class=\"micon micon-";
                // line 9
                echo $this->getAttribute($context["tutorial"], "icon", array());
                echo "\">
                        <use xlink:href=\"#micon-";
                // line 10
                echo $this->getAttribute($context["tutorial"], "icon", array());
                echo "\"></use></svg>
                </div>
            </div>
            <div class=\"tutorial-content icon-offset\">
                ";
            } else {
                // line 15
                echo "                <div class=\"tutorial-content\">
                    ";
            }
            // line 17
            echo "                    ";
            if ($this->getAttribute($context["tutorial"], "header", array())) {
                // line 18
                echo "                        ";
                if ($this->getAttribute($context["tutorial"], "link", array())) {
                    // line 19
                    echo "                            <h4><a href=\"";
                    echo $this->getAttribute($context["tutorial"], "link", array());
                    echo "\">";
                    echo $this->getAttribute($context["tutorial"], "header", array());
                    echo "</a></h4>
                        ";
                } else {
                    // line 21
                    echo "                            <h4>";
                    echo $this->getAttribute($context["tutorial"], "header", array());
                    echo "</h4>
                        ";
                }
                // line 23
                echo "                    ";
            }
            // line 24
            echo "                    ";
            if ($this->getAttribute($context["tutorial"], "text", array())) {
                // line 25
                echo "                        <p>";
                echo $this->getAttribute($context["tutorial"], "text", array());
                echo "</p>
                    ";
            }
            // line 27
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular/tutorials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  72 => 21,  64 => 19,  61 => 18,  58 => 17,  54 => 15,  46 => 10,  42 => 9,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <div class="modular-row tutorials {{ page.header.class}}">*/
/*     {{ content }}*/
/*     <div class="tutorial-items">*/
/*         {% for tutorial in page.header.tutorials %}*/
/*         <div class="tutorial">*/
/*             {% if tutorial.icon %}*/
/*             <div class="glyph fs1">*/
/*                 <div class="clearfix pbs">*/
/*                     <svg class="micon micon-{{ tutorial.icon }}">*/
/*                         <use xlink:href="#micon-{{ tutorial.icon }}"></use></svg>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="tutorial-content icon-offset">*/
/*                 {% else %}*/
/*                 <div class="tutorial-content">*/
/*                     {% endif %}*/
/*                     {% if tutorial.header %}*/
/*                         {% if tutorial.link %}*/
/*                             <h4><a href="{{ tutorial.link }}">{{ tutorial.header }}</a></h4>*/
/*                         {% else %}*/
/*                             <h4>{{ tutorial.header }}</h4>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     {% if tutorial.text %}*/
/*                         <p>{{ tutorial.text }}</p>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
