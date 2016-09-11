<?php

/* plugins/jscomments/disqus.html.twig */
class __TwigTemplate_8fcde7e6abafb04b8cb976b512d27c0e7cb967e24cec21a807e1b73bc47d50d5 extends Twig_Template
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
        // line 10
        echo "<div id=\"jscomments\">
  <div id=\"disqus_thread\"></div>

  ";
        // line 13
        if (( !(isset($context["language"]) ? $context["language"] : null) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "enabled", array()))) {
            // line 14
            echo "    ";
            $context["language"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array());
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  <script type=\"text/javascript\">
    var disqus_config = function () {
        this.language        = '";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) ? $context["language"] : null), "en")) : ("en")), "js");
        echo "';
        this.shortname       = '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["shortname"]) ? $context["shortname"] : null), "js");
        echo "';
        this.page.title      = '";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()))), "js");
        echo "';
        this.page.url        = '";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("url", $context)) ? (_twig_default_filter((isset($context["url"]) ? $context["url"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method"))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method"))), "js");
        echo "';
        this.page.identifier = '";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "rawRoute", array(), "method")))) : ($this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "rawRoute", array(), "method")))), "js");
        echo "';
    };

    (function() {
      var dsq = document.createElement('script');

      dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["shortname"]) ? $context["shortname"] : null), "js");
        echo ".disqus.com/embed.js';
      dsq.setAttribute('data-timestamp', +new Date());

      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>";
        // line 36
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.NOSCRIPT");
        echo "</noscript>
  ";
        // line 37
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.COPYRIGHT");
        echo "

  ";
        // line 44
        echo "  ";
        if ((isset($context["show_count"]) ? $context["show_count"] : null)) {
            // line 45
            echo "    <script type=\"text/javascript\">
      (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["shortname"]) ? $context["shortname"] : null), "js");
            echo ".disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
      }());
    </script>
  ";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "plugins/jscomments/disqus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  90 => 49,  84 => 45,  81 => 44,  76 => 37,  72 => 36,  63 => 30,  53 => 23,  49 => 22,  45 => 21,  41 => 20,  37 => 19,  32 => 16,  29 => 15,  26 => 14,  24 => 13,  19 => 10,);
    }
}
/* {#*/
/*    Disqus, pronounced "discuss", is a service and tool for web comments*/
/*    and discussions. Disqus makes commenting easier and more interactive,*/
/*    while  connecting websites and commenters across a thriving discussion*/
/*    community.*/
/* */
/*    @see https://help.disqus.com/customer/portal/articles/472097-universal-embed-code*/
/*    @see https://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables*/
/*  #}*/
/* <div id="jscomments">*/
/*   <div id="disqus_thread"></div>*/
/* */
/*   {% if not language and grav.language.enabled %}*/
/*     {% set language = grav.language.getLanguage %}*/
/*   {% endif %}*/
/* */
/*   <script type="text/javascript">*/
/*     var disqus_config = function () {*/
/*         this.language        = '{{ language|default('en')|e('js') }}';*/
/*         this.shortname       = '{{ shortname|e('js') }}';*/
/*         this.page.title      = '{{ title|default(page.title)|e('js') }}';*/
/*         this.page.url        = '{{ url|default(page.url(true, true))|e('js') }}';*/
/*         this.page.identifier = '{{ id|default(page.rawRoute()|md5)|e('js') }}';*/
/*     };*/
/* */
/*     (function() {*/
/*       var dsq = document.createElement('script');*/
/* */
/*       dsq.type = 'text/javascript'; dsq.async = true;*/
/*       dsq.src = '//{{ shortname|e('js') }}.disqus.com/embed.js';*/
/*       dsq.setAttribute('data-timestamp', +new Date());*/
/* */
/*       (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);*/
/*     })();*/
/*   </script>*/
/*   <noscript>{{ 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.NOSCRIPT'|t }}</noscript>*/
/*   {{ 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.COPYRIGHT'|t }}*/
/* */
/*   {#*/
/*      Adding Disqus comment count links to your home page.*/
/* */
/*      @see https://help.disqus.com/customer/en/portal/articles/565624-adding-comment-count-links-to-your-home-page*/
/*    #}*/
/*   {% if show_count %}*/
/*     <script type="text/javascript">*/
/*       (function () {*/
/*         var s = document.createElement('script'); s.async = true;*/
/*         s.type = 'text/javascript';*/
/*         s.src = '//{{ shortname|e('js') }}.disqus.com/count.js';*/
/*         (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);*/
/*       }());*/
/*     </script>*/
/*   {% endif %}*/
/* </div>*/
/* */
