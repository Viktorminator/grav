<?php

/* partials/base.html.twig */
class __TwigTemplate_8c8f3a3c8acb88695e38c2419b2544fb88f663ab90fab031a9479c4a380b0d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'tutorials' => array($this, 'block_tutorials'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("ru"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('showcase', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('tutorials', $context, $blocks);
        // line 64
        echo "        
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 148
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 148)->display($context);
        // line 149
        echo "        </div>
    </div>
    ";
        // line 151
        $this->displayBlock('bottom', $context, $blocks);
        // line 164
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 27
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 37
        echo "    ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 47
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 50
        $this->displayBlock('header_extra', $context, $blocks);
        // line 51
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 52
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 52)->display($context);
            // line 53
            echo "                ";
        }
        // line 54
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 50
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 54
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 55
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                ";
    }

    // line 62
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 63
    public function block_tutorials($context, array $blocks = array())
    {
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "            <svg style=\"position: absolute; width: 0; height: 0; overflow: hidden;\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <symbol id=\"micon-meteor\" viewBox=\"0 0 33 32\">
                        <title>meteor</title>
                        <path class=\"path1\" fill=\"#df4f4f\" d=\"M0.056 0.056l27.903 29.556c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-29.748-27.88z\"></path>
                        <path class=\"path2\" fill=\"#df4f4f\" d=\"M8.891 2.849l21.249 22.907c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-23.094-21.231z\"></path>
                        <path class=\"path3\" fill=\"#df4f4f\" d=\"M2.684 8.828l21.249 22.907c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-23.094-21.231z\"></path>
                        <path class=\"path4\" fill=\"#df4f4f\" d=\"M16.36 5.252l14.845 16.004c0 0 0.664 0.468 1.172-0.078s0.117-1.093 0.117-1.093l-16.134-14.833z\"></path>
                        <path class=\"path5\" fill=\"#df4f4f\" d=\"M4.729 15.756l14.845 16.004c0 0 0.664 0.468 1.172-0.078s0.117-1.093 0.117-1.093l-16.134-14.833z\"></path>
                        <path class=\"path6\" fill=\"#df4f4f\" d=\"M23.988 8.716l6.728 7.276c0 0 0.329 0.219 0.58-0.037s0.058-0.512 0.058-0.512l-7.366-6.727z\"></path>
                        <path class=\"path7\" fill=\"#df4f4f\" d=\"M8.444 23.131l6.728 7.276c0 0 0.329 0.219 0.58-0.037s0.058-0.512 0.058-0.512l-7.366-6.727z\"></path>
                    </symbol>
                    <symbol id=\"micon-laravel\" viewBox=\"0 0 32 32\">
                        <title>laravel</title>
                        <path class=\"path1\" fill=\"#f35045\" d=\"M20.056 26c0.25 0.361 0.403 0.333 0.597 0.25s10.195-3.458 10.5-3.569c0.305-0.111 0.208-0.208 0.111-0.361s-3.431-4.681-3.597-4.944c-0.167-0.264-0.25-0.208-0.514-0.125l-10.601 2.758c0 0 3.253 5.631 3.503 5.992v0z\"></path>
                        <path class=\"path2\" fill=\"#f35045\" d=\"M32 21.389v-5.3c-1.193 0.318-2.701 0.72-3.297 0.878 0.898 1.202 2.303 3.083 3.297 4.422v0z\"></path>
                        <path class=\"path3\" fill=\"#f35045\" d=\"M28.693 10.44c-0.163 0.037-3.781 0.691-4.004 0.72s-0.149 0.156-0.059 0.282l3.183 4.368c0 0 3.892-0.966 4.13-1.018 0.019-0.004 0.038-0.009 0.057-0.013v-0.578c-0.707-0.897-2.635-3.34-2.802-3.568-0.201-0.275-0.342-0.23-0.505-0.193v0z\"></path>
                        <path class=\"path4\" fill=\"#f35045\" d=\"M5.932 3.579c0.783-0.036 0.855 0.143 1.199 0.653l8.646 14.455 10.872-2.604c-0.602-0.854-3.337-4.731-3.601-5.101-0.297-0.416 0.007-0.609 0.49-0.691s4.642-0.78 4.999-0.832c0.357-0.052 0.639-0.178 1.218 0.52 0.296 0.357 1.302 1.609 2.245 2.782v-6.761c0-1.653-0.587-3.066-1.76-4.24s-2.587-1.76-4.24-1.76h-20c-1.653 0-3.066 0.587-4.24 1.76-0.673 0.673-1.152 1.425-1.439 2.256 1.96-0.161 5.063-0.413 5.611-0.438v0z\"></path>
                        <path class=\"path5\" fill=\"#f35045\" d=\"M21.036 27.945c-0.917 0.278-1.328 0.416-1.925-0.418-0.447-0.624-2.866-4.98-4.052-7.128-2.244 0.588-6.352 1.66-7.536 1.944-1.156 0.278-1.65-0.415-1.84-0.843-0.133-0.3-3.522-7.607-5.684-12.295v16.794c0 1.653 0.587 3.066 1.76 4.24s2.587 1.76 4.24 1.76h20c1.653 0 3.066-0.587 4.24-1.76s1.76-2.587 1.76-4.24v-1.973c-2.455 0.898-10.346 3.731-10.964 3.918v0z\"></path>
                        <path class=\"path6\" fill=\"#f35045\" d=\"M7.551 20.661c0.325-0.074 6.414-1.532 6.544-1.559s0.213-0.102 0.074-0.343c-0.139-0.241-8.117-14.011-8.117-14.011-0.074-0.126-0.053-0.168-0.253-0.158-0.178 0.009-4.692 0.412-5.737 0.5-0.031 0.217-0.049 0.44-0.058 0.666 1.061 2.172 7.15 14.73 7.184 14.832 0.037 0.111 0.037 0.149 0.362 0.074v0z\"></path>
                    </symbol>
                    <symbol id=\"micon-phalcon\" viewBox=\"0 0 28 32\">
                        <title>phalcon</title>
                        <path class=\"path1\" fill=\"#73b08f\" d=\"M22.309 15.327l-1.945-3.918 0.62 2.622 1.325 1.297z\"></path>
                        <path class=\"path2\" fill=\"#c5e4d3\" d=\"M20.027 10.035l1.501 6.343-4.828-5.102-7.036-6.568-1.796-4.708 12.159 10.035z\"></path>
                        <path class=\"path3\" fill=\"#76c39b\" d=\"M17.087 11.433l-6.323-3.031-3.452-3.708-0.452-2.443 10.226 9.182z\"></path>
                        <path class=\"path4\" fill=\"#000\" d=\"M21.923 16.656l-5.969-1.522-11.478-6.603-4.476-6.144 17.217 9.129 4.706 5.139z\"></path>
                        <path class=\"path5\" fill=\"#73b08f\" d=\"M15.681 14.959v0.176l-0.771 1.44-4.026-1.322-7.481-5.612-2.912-4.172 3.341 1.998 0.514 0.793 11.335 6.699z\"></path>
                        <path class=\"path6\" fill=\"#000\" d=\"M4.835 10.741l-0.557-0.065-1.949-0.712 3.991 3.657 1.052 0.809 4.177 1.391-6.714-5.080z\"></path>
                        <path class=\"path7\" fill=\"#76c39b\" d=\"M21.198 16.383v0l-0.085 3.241-0.31-0.53-1.804-0.125-4.172-2.399 0.958-1.683 5.412 1.496z\"></path>
                        <path class=\"path8\" fill=\"#c5e4d3\" d=\"M4.219 12.814l5.193 3.969 5.394 1.795 4.16 0.378-4.131-2.394-10.616-3.748z\"></path>
                        <path class=\"path9\" fill=\"#76c39b\" d=\"M6.737 15.975l3.608 2.001 4.2 0.423-5.074-1.579-0.817-0.507-1.917-0.338z\"></path>
                        <path class=\"path10\" fill=\"#73b08f\" d=\"M14.755 18.318l-5.904-0.515 3.041 1.167 1.998 0.275 0.865-0.927z\"></path>
                        <path class=\"path11\" fill=\"#76c39b\" d=\"M13.418 19.228l-0.507 0.075-2.368 0.337 1.156-0.785 1.72 0.374z\"></path>
                        <path class=\"path12\" fill=\"#76c39b\" d=\"M17.2 19.74l-0.116 0.205-8.642 5.007-1.705 2.255 0.607-2.43 1.879-2.577 5.376-3.631 2.601 1.171z\"></path>
                        <path class=\"path13\" fill=\"#000\" d=\"M7.752 22.205l-1.522 2.001v-0.874l1.522-1.128z\"></path>
                        <path class=\"path14\" fill=\"#c5e4d3\" d=\"M20.296 20.091l-5.779 3.918-0.479-0.817-2.001 4.228 0.451 0.62 0.338 3.918-2.424-4.482 1.973-4.849 4.82-2.988 3.101 0.451z\"></path>
                        <path class=\"path15\" fill=\"#000\" d=\"M12.375 22.543l-3.862 2.086-0.113 2.875 1.184 3.862v-1.973l2.791-6.85z\"></path>
                        <path class=\"path16\" fill=\"#73b08f\" d=\"M7.583 28.068l0.056 0.197 0.507 2.142-0.677-0.423 0.113-1.917z\"></path>
                        <path class=\"path17\" fill=\"#73b08f\" d=\"M14.617 23.734l-0.518-0.639-2.164 4.098 3.443 4.504-0.853-2.005 0.091-5.957z\"></path>
                        <path class=\"path18\" fill=\"#76c39b\" d=\"M15.025 23.489l-0.451 0.237-0.028 4.908 0.846 1.774 1.579-0.591-0.056-1.183-1.72-1.685-0.169-3.459z\"></path>
                        <path class=\"path19\" fill=\"#000\" d=\"M22.809 20.030l-2.622 0.733-2.847 2.424-1.55-0.056 4.482-3.016 2.537-0.085z\"></path>
                        <path class=\"path20\" fill=\"#73b08f\" d=\"M21.731 20.354l-0.822-1.511-7.394-0.579 3.316 1.383 4.9 0.707z\"></path>
                        <path class=\"path21\" fill=\"#73b08f\" d=\"M17.421 23.094l0.366 0.864 0.789 0.566h0.141l-0.056 0.924-2.424 1.013-0.817-1.878-0.226-1.103 0.733-0.596 1.494 0.209z\"></path>
                        <path class=\"path22\" fill=\"#000\" d=\"M18.717 27.955l-1.466-0.648-0.564 1.156 0.197 0.282-0.028 1.24 1.071 1.212-0.169-2.283 0.254-0.113 0.846 0.817-0.395-0.93-0.902-0.479 0.197-0.338 0.958 0.423v-0.338z\"></path>
                        <path class=\"path23\" fill=\"#000\" d=\"M19.084 23.135l-0.564 1.353 0.113 1.156 1.156 1.438-0.141-2.311 0.169-0.113 0.902 0.789-0.366-0.874-1.015-0.536 0.169-0.282 1.043 0.451-0.028-0.395-1.438-0.677z\"></path>
                        <path class=\"path24\" fill=\"#c5e4d3\" d=\"M24.299 17.159l-3.129-0.733v2.932l0.366 0.648 2.763 0.028 2.622 0.902-0.085-0.366-1.607-0.93-3.214-1.268 1.832-0.028-1.776-0.817 2.227-0.366z\"></path>
                        <path class=\"path25\" fill=\"#73b08f\" d=\"M27.949 19.839l-1.184-1.917-2.706-0.817-2.142 0.395 1.691 0.846-1.579 0.056 2.96 1.268 1.691 0.817 1.268-0.648z\"></path>
                        <path class=\"path26\" fill=\"#000\" d=\"M26.406 22.12l0.451-0.677-0.338-0.874 1.409-0.789 0.028 1.607-0.846 0.761-0.705-0.028z\"></path>
                        <path class=\"path27\" fill=\"#000\" d=\"M27.536 19.598l-0.967-0.451-0.516 0.451\"></path>
                    </symbol>
                    <symbol id=\"micon-react\" viewBox=\"0 0 36 32\">
                        <title>react</title>
                        <path class=\"path1\" fill=\"#fff\" d=\"M0.105 15.965c0 2.673 2.61 5.169 6.726 6.576-0.822 4.137-0.147 7.472 2.106 8.772 2.316 1.336 5.766 0.411 9.041-2.451 3.192 2.747 6.418 3.828 8.669 2.525 2.314-1.339 3.017-4.9 2.173-9.167 4.287-1.417 6.684-3.545 6.684-6.254 0-2.611-2.615-4.87-6.675-6.268 0.909-4.443 0.139-7.697-2.208-9.050-2.262-1.304-5.526-0.167-8.765 2.651-3.37-2.992-6.601-3.905-8.945-2.548-2.26 1.308-2.905 4.704-2.080 8.918-3.977 1.386-6.726 3.697-6.726 6.298z\"></path>
                        <path class=\"path2\" fill=\"#53c1de\" d=\"M27.969 11.085c-0.326-0.112-0.664-0.218-1.012-0.319 0.057-0.233 0.11-0.464 0.156-0.69 0.766-3.719 0.265-6.714-1.445-7.701-1.64-0.946-4.322 0.040-7.031 2.398-0.261 0.227-0.522 0.467-0.783 0.718-0.174-0.166-0.348-0.327-0.521-0.481-2.839-2.521-5.684-3.583-7.393-2.594-1.638 0.949-2.124 3.765-1.434 7.289 0.067 0.34 0.144 0.688 0.232 1.041-0.403 0.114-0.792 0.236-1.164 0.366-3.328 1.16-5.454 2.979-5.454 4.865 0 1.948 2.282 3.902 5.749 5.087 0.274 0.093 0.557 0.182 0.85 0.266-0.095 0.382-0.178 0.757-0.247 1.122-0.657 3.463-0.144 6.213 1.49 7.155 1.688 0.973 4.521-0.027 7.279-2.438 0.218-0.191 0.437-0.393 0.656-0.605 0.284 0.274 0.568 0.532 0.85 0.775 2.672 2.299 5.311 3.228 6.943 2.282 1.686-0.976 2.234-3.93 1.523-7.524-0.054-0.274-0.118-0.555-0.189-0.84 0.199-0.059 0.394-0.12 0.585-0.183 3.604-1.194 5.949-3.124 5.949-5.099 0-1.893-2.194-3.724-5.59-4.893v0 0z\"></path>
                        <path class=\"path3\" fill=\"#fff\" d=\"M27.187 19.802c-0.172 0.057-0.348 0.112-0.528 0.165-0.398-1.26-0.935-2.599-1.592-3.983 0.627-1.351 1.143-2.673 1.53-3.924 0.322 0.093 0.634 0.191 0.934 0.295 2.909 1.001 4.684 2.482 4.684 3.623 0 1.215-1.916 2.793-5.028 3.824v0 0zM25.896 22.361c0.315 1.589 0.36 3.026 0.151 4.149-0.187 1.009-0.564 1.682-1.029 1.952-0.991 0.573-3.109-0.172-5.394-2.138-0.262-0.225-0.526-0.466-0.79-0.721 0.886-0.969 1.771-2.095 2.635-3.346 1.52-0.135 2.956-0.355 4.258-0.656 0.064 0.259 0.121 0.512 0.17 0.76v0 0zM12.838 28.362c-0.968 0.342-1.739 0.352-2.205 0.083-0.992-0.572-1.404-2.78-0.842-5.741 0.064-0.339 0.141-0.688 0.229-1.044 1.288 0.285 2.713 0.49 4.237 0.613 0.87 1.224 1.781 2.349 2.699 3.334-0.201 0.194-0.4 0.378-0.599 0.552-1.22 1.066-2.442 1.823-3.519 2.203v0 0zM8.304 19.795c-1.533-0.524-2.799-1.205-3.667-1.948-0.78-0.668-1.173-1.331-1.173-1.869 0-1.145 1.707-2.605 4.553-3.597 0.345-0.12 0.707-0.234 1.082-0.341 0.393 1.28 0.909 2.618 1.532 3.97-0.631 1.373-1.154 2.732-1.551 4.027-0.267-0.077-0.527-0.158-0.776-0.243v0 0zM9.824 9.447c-0.591-3.019-0.198-5.297 0.789-5.869 1.052-0.609 3.377 0.259 5.829 2.436 0.157 0.139 0.314 0.285 0.472 0.435-0.913 0.981-1.816 2.097-2.678 3.314-1.479 0.137-2.894 0.357-4.195 0.652-0.082-0.329-0.154-0.652-0.216-0.969v0 0zM23.384 12.796c-0.311-0.537-0.63-1.062-0.956-1.572 1.003 0.127 1.964 0.295 2.867 0.501-0.271 0.868-0.609 1.776-1.006 2.707-0.285-0.541-0.587-1.087-0.904-1.636v0 0zM17.854 7.41c0.619 0.671 1.24 1.42 1.85 2.233-0.615-0.029-1.237-0.044-1.865-0.044-0.622 0-1.24 0.015-1.851 0.043 0.611-0.805 1.236-1.554 1.866-2.232v0 0zM12.289 12.805c-0.311 0.539-0.607 1.082-0.887 1.626-0.391-0.928-0.726-1.84-0.999-2.72 0.897-0.201 1.853-0.365 2.85-0.489-0.33 0.515-0.652 1.043-0.964 1.584v0zM13.281 20.831c-1.030-0.115-2.001-0.271-2.897-0.466 0.278-0.896 0.62-1.828 1.019-2.775 0.281 0.544 0.579 1.087 0.891 1.627h0c0.318 0.55 0.648 1.089 0.987 1.614v0 0zM17.892 24.641c-0.637-0.687-1.271-1.446-1.892-2.264 0.602 0.024 1.216 0.036 1.839 0.036 0.641 0 1.274-0.014 1.898-0.042-0.612 0.832-1.23 1.593-1.846 2.27v0 0zM24.302 17.541c0.42 0.958 0.774 1.884 1.056 2.765-0.912 0.208-1.896 0.375-2.933 0.5 0.326-0.517 0.648-1.051 0.965-1.6 0.32-0.555 0.624-1.111 0.912-1.666v0 0zM22.227 18.536c-0.491 0.852-0.996 1.665-1.508 2.433-0.933 0.067-1.897 0.101-2.879 0.101-0.978 0-1.93-0.030-2.846-0.090-0.533-0.778-1.048-1.594-1.537-2.437h0c-0.487-0.841-0.935-1.689-1.341-2.533 0.406-0.845 0.853-1.695 1.337-2.534l-0 0c0.486-0.842 0.996-1.654 1.524-2.427 0.935-0.071 1.894-0.108 2.863-0.108h0c0.973 0 1.933 0.037 2.868 0.108 0.52 0.767 1.027 1.577 1.515 2.419 0.493 0.851 0.946 1.695 1.355 2.522-0.408 0.842-0.86 1.694-1.351 2.545v0 0zM24.997 3.539c1.053 0.607 1.462 3.055 0.801 6.266-0.042 0.205-0.090 0.414-0.141 0.625-1.304-0.301-2.721-0.525-4.203-0.664-0.864-1.23-1.759-2.348-2.657-3.317 0.242-0.232 0.483-0.454 0.723-0.663 2.321-2.020 4.49-2.817 5.478-2.247v0 0z\"></path>
                        <path class=\"path4\" fill=\"#53c1de\" d=\"M17.839 13.171c1.55 0 2.807 1.257 2.807 2.807s-1.257 2.807-2.807 2.807-2.807-1.257-2.807-2.807c0-1.55 1.257-2.807 2.807-2.807z\"></path>
                    </symbol>
                    <symbol id=\"micon-photoshop\" viewBox=\"0 0 33 32\">
                        <title>photoshop</title>
                        <path class=\"path1\" fill=\"#000\" d=\"M1.367 1.367h30.085v29.265h-30.085v-29.265z\"></path>
                        <path class=\"path2\" fill=\"#31c5f0\" d=\"M1.367 1.367h30.085v29.265h-30.085v-29.265zM0 32h32.821v-32h-32.821v32zM22.127 13.128c-1.080 0-1.45 0.547-1.45 0.998 0 0.492 0.246 0.834 1.696 1.586 2.147 1.039 2.817 2.038 2.817 3.501 0 2.188-1.668 3.364-3.925 3.364-1.19 0-2.215-0.246-2.803-0.588-0.096-0.041-0.109-0.109-0.109-0.219v-2.010c0-0.137 0.068-0.178 0.164-0.109 0.862 0.561 1.846 0.807 2.749 0.807 1.080 0 1.532-0.451 1.532-1.067 0-0.492-0.315-0.93-1.696-1.641-1.942-0.93-2.749-1.873-2.749-3.446 0-1.764 1.381-3.227 3.774-3.227 1.176 0 1.997 0.178 2.448 0.383 0.109 0.068 0.137 0.178 0.137 0.273v1.873c0 0.109-0.068 0.178-0.205 0.137-0.602-0.383-1.491-0.615-2.379-0.615v0zM10.366 14.756c0.315 0.027 0.561 0.027 1.108 0.027 1.6 0 3.104-0.561 3.104-2.735 0-1.737-1.080-2.612-2.899-2.612-0.547 0-1.067 0.027-1.313 0.041v5.279zM7.932 7.494c0-0.096 0.191-0.164 0.301-0.164 0.875-0.041 2.174-0.068 3.528-0.068 3.788 0 5.265 2.079 5.265 4.732 0 3.473-2.516 4.964-5.607 4.964-0.52 0-0.697-0.027-1.067-0.027v5.251c0 0.109-0.041 0.164-0.164 0.164h-2.092c-0.109 0-0.164-0.041-0.164-0.164v-14.687z\"></path>
                    </symbol>
                </defs>
            </svg>

            <section id=\"body\" class=\"";
        // line 132
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "        </section>
        ";
    }

    // line 133
    public function block_content($context, array $blocks = array())
    {
    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        // line 138
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p><a href=\"http://modx.ws/\">Dev User Lab</a> создан <i class=\"fa fa-code\"></i> <i class=\"fa fa-heart\"></i> <a href=\"mailto:viktorminator@gmail.com\">Виктором Матушевским</a></p>
        </footer>
        ";
    }

    // line 151
    public function block_bottom($context, array $blocks = array())
    {
        // line 152
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 152,  367 => 151,  357 => 138,  354 => 137,  349 => 133,  344 => 134,  342 => 133,  338 => 132,  270 => 66,  267 => 65,  262 => 63,  257 => 62,  253 => 56,  250 => 55,  247 => 54,  242 => 50,  235 => 57,  232 => 54,  229 => 53,  226 => 52,  223 => 51,  221 => 50,  213 => 47,  209 => 45,  206 => 44,  202 => 37,  199 => 36,  196 => 35,  193 => 34,  190 => 33,  187 => 32,  183 => 29,  180 => 28,  177 => 27,  174 => 26,  171 => 25,  168 => 24,  165 => 23,  163 => 22,  160 => 21,  157 => 20,  154 => 19,  151 => 18,  148 => 17,  145 => 16,  142 => 15,  139 => 14,  136 => 13,  128 => 38,  126 => 32,  120 => 30,  118 => 13,  113 => 11,  109 => 10,  106 => 9,  104 => 8,  96 => 7,  93 => 6,  90 => 5,  84 => 164,  82 => 151,  78 => 149,  76 => 148,  71 => 145,  69 => 137,  66 => 136,  64 => 65,  61 => 64,  58 => 63,  56 => 62,  53 => 61,  51 => 44,  46 => 42,  43 => 41,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'ru' }}">*/
/* <head>*/
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}*/
/*         {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}*/
/*         {% do assets.addCss('theme://css-compiled/template.css', 101) %}*/
/*         {% do assets.addCss('theme://css/custom.css', 100) %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}*/
/*         {% do assets.addCss('theme://css/slidebars.min.css') %}*/
/*         {% do assets.addCss('theme://css/style.css')  %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery', 101) %}*/
/*         {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}*/
/*         {% do assets.addJs('theme://js/antimatter.js') %}*/
/*         {% do assets.addJs('theme://js/slidebars.min.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head %}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="header">*/
/*             <div id="logo">*/
/*                 <h3><a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a></h3>*/
/*             </div>*/
/*             <div id="navbar">*/
/*                 {% block header_extra %}{% endblock %}*/
/*                 {% if config.plugins.langswitcher.enabled %}*/
/*                 {% include 'partials/langswitcher.html.twig' %}*/
/*                 {% endif %}*/
/*                 {% block header_navigation %}*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*                 {% endblock %}*/
/*                 <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*             </div>*/
/*         </header>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/*         {% block tutorials %}{% endblock %}*/
/*         */
/*         {% block body %}*/
/*             <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">*/
/*                 <defs>*/
/*                     <symbol id="micon-meteor" viewBox="0 0 33 32">*/
/*                         <title>meteor</title>*/
/*                         <path class="path1" fill="#df4f4f" d="M0.056 0.056l27.903 29.556c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-29.748-27.88z"></path>*/
/*                         <path class="path2" fill="#df4f4f" d="M8.891 2.849l21.249 22.907c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-23.094-21.231z"></path>*/
/*                         <path class="path3" fill="#df4f4f" d="M2.684 8.828l21.249 22.907c0 0 0.951 0.67 1.678-0.112s0.168-1.564 0.168-1.564l-23.094-21.231z"></path>*/
/*                         <path class="path4" fill="#df4f4f" d="M16.36 5.252l14.845 16.004c0 0 0.664 0.468 1.172-0.078s0.117-1.093 0.117-1.093l-16.134-14.833z"></path>*/
/*                         <path class="path5" fill="#df4f4f" d="M4.729 15.756l14.845 16.004c0 0 0.664 0.468 1.172-0.078s0.117-1.093 0.117-1.093l-16.134-14.833z"></path>*/
/*                         <path class="path6" fill="#df4f4f" d="M23.988 8.716l6.728 7.276c0 0 0.329 0.219 0.58-0.037s0.058-0.512 0.058-0.512l-7.366-6.727z"></path>*/
/*                         <path class="path7" fill="#df4f4f" d="M8.444 23.131l6.728 7.276c0 0 0.329 0.219 0.58-0.037s0.058-0.512 0.058-0.512l-7.366-6.727z"></path>*/
/*                     </symbol>*/
/*                     <symbol id="micon-laravel" viewBox="0 0 32 32">*/
/*                         <title>laravel</title>*/
/*                         <path class="path1" fill="#f35045" d="M20.056 26c0.25 0.361 0.403 0.333 0.597 0.25s10.195-3.458 10.5-3.569c0.305-0.111 0.208-0.208 0.111-0.361s-3.431-4.681-3.597-4.944c-0.167-0.264-0.25-0.208-0.514-0.125l-10.601 2.758c0 0 3.253 5.631 3.503 5.992v0z"></path>*/
/*                         <path class="path2" fill="#f35045" d="M32 21.389v-5.3c-1.193 0.318-2.701 0.72-3.297 0.878 0.898 1.202 2.303 3.083 3.297 4.422v0z"></path>*/
/*                         <path class="path3" fill="#f35045" d="M28.693 10.44c-0.163 0.037-3.781 0.691-4.004 0.72s-0.149 0.156-0.059 0.282l3.183 4.368c0 0 3.892-0.966 4.13-1.018 0.019-0.004 0.038-0.009 0.057-0.013v-0.578c-0.707-0.897-2.635-3.34-2.802-3.568-0.201-0.275-0.342-0.23-0.505-0.193v0z"></path>*/
/*                         <path class="path4" fill="#f35045" d="M5.932 3.579c0.783-0.036 0.855 0.143 1.199 0.653l8.646 14.455 10.872-2.604c-0.602-0.854-3.337-4.731-3.601-5.101-0.297-0.416 0.007-0.609 0.49-0.691s4.642-0.78 4.999-0.832c0.357-0.052 0.639-0.178 1.218 0.52 0.296 0.357 1.302 1.609 2.245 2.782v-6.761c0-1.653-0.587-3.066-1.76-4.24s-2.587-1.76-4.24-1.76h-20c-1.653 0-3.066 0.587-4.24 1.76-0.673 0.673-1.152 1.425-1.439 2.256 1.96-0.161 5.063-0.413 5.611-0.438v0z"></path>*/
/*                         <path class="path5" fill="#f35045" d="M21.036 27.945c-0.917 0.278-1.328 0.416-1.925-0.418-0.447-0.624-2.866-4.98-4.052-7.128-2.244 0.588-6.352 1.66-7.536 1.944-1.156 0.278-1.65-0.415-1.84-0.843-0.133-0.3-3.522-7.607-5.684-12.295v16.794c0 1.653 0.587 3.066 1.76 4.24s2.587 1.76 4.24 1.76h20c1.653 0 3.066-0.587 4.24-1.76s1.76-2.587 1.76-4.24v-1.973c-2.455 0.898-10.346 3.731-10.964 3.918v0z"></path>*/
/*                         <path class="path6" fill="#f35045" d="M7.551 20.661c0.325-0.074 6.414-1.532 6.544-1.559s0.213-0.102 0.074-0.343c-0.139-0.241-8.117-14.011-8.117-14.011-0.074-0.126-0.053-0.168-0.253-0.158-0.178 0.009-4.692 0.412-5.737 0.5-0.031 0.217-0.049 0.44-0.058 0.666 1.061 2.172 7.15 14.73 7.184 14.832 0.037 0.111 0.037 0.149 0.362 0.074v0z"></path>*/
/*                     </symbol>*/
/*                     <symbol id="micon-phalcon" viewBox="0 0 28 32">*/
/*                         <title>phalcon</title>*/
/*                         <path class="path1" fill="#73b08f" d="M22.309 15.327l-1.945-3.918 0.62 2.622 1.325 1.297z"></path>*/
/*                         <path class="path2" fill="#c5e4d3" d="M20.027 10.035l1.501 6.343-4.828-5.102-7.036-6.568-1.796-4.708 12.159 10.035z"></path>*/
/*                         <path class="path3" fill="#76c39b" d="M17.087 11.433l-6.323-3.031-3.452-3.708-0.452-2.443 10.226 9.182z"></path>*/
/*                         <path class="path4" fill="#000" d="M21.923 16.656l-5.969-1.522-11.478-6.603-4.476-6.144 17.217 9.129 4.706 5.139z"></path>*/
/*                         <path class="path5" fill="#73b08f" d="M15.681 14.959v0.176l-0.771 1.44-4.026-1.322-7.481-5.612-2.912-4.172 3.341 1.998 0.514 0.793 11.335 6.699z"></path>*/
/*                         <path class="path6" fill="#000" d="M4.835 10.741l-0.557-0.065-1.949-0.712 3.991 3.657 1.052 0.809 4.177 1.391-6.714-5.080z"></path>*/
/*                         <path class="path7" fill="#76c39b" d="M21.198 16.383v0l-0.085 3.241-0.31-0.53-1.804-0.125-4.172-2.399 0.958-1.683 5.412 1.496z"></path>*/
/*                         <path class="path8" fill="#c5e4d3" d="M4.219 12.814l5.193 3.969 5.394 1.795 4.16 0.378-4.131-2.394-10.616-3.748z"></path>*/
/*                         <path class="path9" fill="#76c39b" d="M6.737 15.975l3.608 2.001 4.2 0.423-5.074-1.579-0.817-0.507-1.917-0.338z"></path>*/
/*                         <path class="path10" fill="#73b08f" d="M14.755 18.318l-5.904-0.515 3.041 1.167 1.998 0.275 0.865-0.927z"></path>*/
/*                         <path class="path11" fill="#76c39b" d="M13.418 19.228l-0.507 0.075-2.368 0.337 1.156-0.785 1.72 0.374z"></path>*/
/*                         <path class="path12" fill="#76c39b" d="M17.2 19.74l-0.116 0.205-8.642 5.007-1.705 2.255 0.607-2.43 1.879-2.577 5.376-3.631 2.601 1.171z"></path>*/
/*                         <path class="path13" fill="#000" d="M7.752 22.205l-1.522 2.001v-0.874l1.522-1.128z"></path>*/
/*                         <path class="path14" fill="#c5e4d3" d="M20.296 20.091l-5.779 3.918-0.479-0.817-2.001 4.228 0.451 0.62 0.338 3.918-2.424-4.482 1.973-4.849 4.82-2.988 3.101 0.451z"></path>*/
/*                         <path class="path15" fill="#000" d="M12.375 22.543l-3.862 2.086-0.113 2.875 1.184 3.862v-1.973l2.791-6.85z"></path>*/
/*                         <path class="path16" fill="#73b08f" d="M7.583 28.068l0.056 0.197 0.507 2.142-0.677-0.423 0.113-1.917z"></path>*/
/*                         <path class="path17" fill="#73b08f" d="M14.617 23.734l-0.518-0.639-2.164 4.098 3.443 4.504-0.853-2.005 0.091-5.957z"></path>*/
/*                         <path class="path18" fill="#76c39b" d="M15.025 23.489l-0.451 0.237-0.028 4.908 0.846 1.774 1.579-0.591-0.056-1.183-1.72-1.685-0.169-3.459z"></path>*/
/*                         <path class="path19" fill="#000" d="M22.809 20.030l-2.622 0.733-2.847 2.424-1.55-0.056 4.482-3.016 2.537-0.085z"></path>*/
/*                         <path class="path20" fill="#73b08f" d="M21.731 20.354l-0.822-1.511-7.394-0.579 3.316 1.383 4.9 0.707z"></path>*/
/*                         <path class="path21" fill="#73b08f" d="M17.421 23.094l0.366 0.864 0.789 0.566h0.141l-0.056 0.924-2.424 1.013-0.817-1.878-0.226-1.103 0.733-0.596 1.494 0.209z"></path>*/
/*                         <path class="path22" fill="#000" d="M18.717 27.955l-1.466-0.648-0.564 1.156 0.197 0.282-0.028 1.24 1.071 1.212-0.169-2.283 0.254-0.113 0.846 0.817-0.395-0.93-0.902-0.479 0.197-0.338 0.958 0.423v-0.338z"></path>*/
/*                         <path class="path23" fill="#000" d="M19.084 23.135l-0.564 1.353 0.113 1.156 1.156 1.438-0.141-2.311 0.169-0.113 0.902 0.789-0.366-0.874-1.015-0.536 0.169-0.282 1.043 0.451-0.028-0.395-1.438-0.677z"></path>*/
/*                         <path class="path24" fill="#c5e4d3" d="M24.299 17.159l-3.129-0.733v2.932l0.366 0.648 2.763 0.028 2.622 0.902-0.085-0.366-1.607-0.93-3.214-1.268 1.832-0.028-1.776-0.817 2.227-0.366z"></path>*/
/*                         <path class="path25" fill="#73b08f" d="M27.949 19.839l-1.184-1.917-2.706-0.817-2.142 0.395 1.691 0.846-1.579 0.056 2.96 1.268 1.691 0.817 1.268-0.648z"></path>*/
/*                         <path class="path26" fill="#000" d="M26.406 22.12l0.451-0.677-0.338-0.874 1.409-0.789 0.028 1.607-0.846 0.761-0.705-0.028z"></path>*/
/*                         <path class="path27" fill="#000" d="M27.536 19.598l-0.967-0.451-0.516 0.451"></path>*/
/*                     </symbol>*/
/*                     <symbol id="micon-react" viewBox="0 0 36 32">*/
/*                         <title>react</title>*/
/*                         <path class="path1" fill="#fff" d="M0.105 15.965c0 2.673 2.61 5.169 6.726 6.576-0.822 4.137-0.147 7.472 2.106 8.772 2.316 1.336 5.766 0.411 9.041-2.451 3.192 2.747 6.418 3.828 8.669 2.525 2.314-1.339 3.017-4.9 2.173-9.167 4.287-1.417 6.684-3.545 6.684-6.254 0-2.611-2.615-4.87-6.675-6.268 0.909-4.443 0.139-7.697-2.208-9.050-2.262-1.304-5.526-0.167-8.765 2.651-3.37-2.992-6.601-3.905-8.945-2.548-2.26 1.308-2.905 4.704-2.080 8.918-3.977 1.386-6.726 3.697-6.726 6.298z"></path>*/
/*                         <path class="path2" fill="#53c1de" d="M27.969 11.085c-0.326-0.112-0.664-0.218-1.012-0.319 0.057-0.233 0.11-0.464 0.156-0.69 0.766-3.719 0.265-6.714-1.445-7.701-1.64-0.946-4.322 0.040-7.031 2.398-0.261 0.227-0.522 0.467-0.783 0.718-0.174-0.166-0.348-0.327-0.521-0.481-2.839-2.521-5.684-3.583-7.393-2.594-1.638 0.949-2.124 3.765-1.434 7.289 0.067 0.34 0.144 0.688 0.232 1.041-0.403 0.114-0.792 0.236-1.164 0.366-3.328 1.16-5.454 2.979-5.454 4.865 0 1.948 2.282 3.902 5.749 5.087 0.274 0.093 0.557 0.182 0.85 0.266-0.095 0.382-0.178 0.757-0.247 1.122-0.657 3.463-0.144 6.213 1.49 7.155 1.688 0.973 4.521-0.027 7.279-2.438 0.218-0.191 0.437-0.393 0.656-0.605 0.284 0.274 0.568 0.532 0.85 0.775 2.672 2.299 5.311 3.228 6.943 2.282 1.686-0.976 2.234-3.93 1.523-7.524-0.054-0.274-0.118-0.555-0.189-0.84 0.199-0.059 0.394-0.12 0.585-0.183 3.604-1.194 5.949-3.124 5.949-5.099 0-1.893-2.194-3.724-5.59-4.893v0 0z"></path>*/
/*                         <path class="path3" fill="#fff" d="M27.187 19.802c-0.172 0.057-0.348 0.112-0.528 0.165-0.398-1.26-0.935-2.599-1.592-3.983 0.627-1.351 1.143-2.673 1.53-3.924 0.322 0.093 0.634 0.191 0.934 0.295 2.909 1.001 4.684 2.482 4.684 3.623 0 1.215-1.916 2.793-5.028 3.824v0 0zM25.896 22.361c0.315 1.589 0.36 3.026 0.151 4.149-0.187 1.009-0.564 1.682-1.029 1.952-0.991 0.573-3.109-0.172-5.394-2.138-0.262-0.225-0.526-0.466-0.79-0.721 0.886-0.969 1.771-2.095 2.635-3.346 1.52-0.135 2.956-0.355 4.258-0.656 0.064 0.259 0.121 0.512 0.17 0.76v0 0zM12.838 28.362c-0.968 0.342-1.739 0.352-2.205 0.083-0.992-0.572-1.404-2.78-0.842-5.741 0.064-0.339 0.141-0.688 0.229-1.044 1.288 0.285 2.713 0.49 4.237 0.613 0.87 1.224 1.781 2.349 2.699 3.334-0.201 0.194-0.4 0.378-0.599 0.552-1.22 1.066-2.442 1.823-3.519 2.203v0 0zM8.304 19.795c-1.533-0.524-2.799-1.205-3.667-1.948-0.78-0.668-1.173-1.331-1.173-1.869 0-1.145 1.707-2.605 4.553-3.597 0.345-0.12 0.707-0.234 1.082-0.341 0.393 1.28 0.909 2.618 1.532 3.97-0.631 1.373-1.154 2.732-1.551 4.027-0.267-0.077-0.527-0.158-0.776-0.243v0 0zM9.824 9.447c-0.591-3.019-0.198-5.297 0.789-5.869 1.052-0.609 3.377 0.259 5.829 2.436 0.157 0.139 0.314 0.285 0.472 0.435-0.913 0.981-1.816 2.097-2.678 3.314-1.479 0.137-2.894 0.357-4.195 0.652-0.082-0.329-0.154-0.652-0.216-0.969v0 0zM23.384 12.796c-0.311-0.537-0.63-1.062-0.956-1.572 1.003 0.127 1.964 0.295 2.867 0.501-0.271 0.868-0.609 1.776-1.006 2.707-0.285-0.541-0.587-1.087-0.904-1.636v0 0zM17.854 7.41c0.619 0.671 1.24 1.42 1.85 2.233-0.615-0.029-1.237-0.044-1.865-0.044-0.622 0-1.24 0.015-1.851 0.043 0.611-0.805 1.236-1.554 1.866-2.232v0 0zM12.289 12.805c-0.311 0.539-0.607 1.082-0.887 1.626-0.391-0.928-0.726-1.84-0.999-2.72 0.897-0.201 1.853-0.365 2.85-0.489-0.33 0.515-0.652 1.043-0.964 1.584v0zM13.281 20.831c-1.030-0.115-2.001-0.271-2.897-0.466 0.278-0.896 0.62-1.828 1.019-2.775 0.281 0.544 0.579 1.087 0.891 1.627h0c0.318 0.55 0.648 1.089 0.987 1.614v0 0zM17.892 24.641c-0.637-0.687-1.271-1.446-1.892-2.264 0.602 0.024 1.216 0.036 1.839 0.036 0.641 0 1.274-0.014 1.898-0.042-0.612 0.832-1.23 1.593-1.846 2.27v0 0zM24.302 17.541c0.42 0.958 0.774 1.884 1.056 2.765-0.912 0.208-1.896 0.375-2.933 0.5 0.326-0.517 0.648-1.051 0.965-1.6 0.32-0.555 0.624-1.111 0.912-1.666v0 0zM22.227 18.536c-0.491 0.852-0.996 1.665-1.508 2.433-0.933 0.067-1.897 0.101-2.879 0.101-0.978 0-1.93-0.030-2.846-0.090-0.533-0.778-1.048-1.594-1.537-2.437h0c-0.487-0.841-0.935-1.689-1.341-2.533 0.406-0.845 0.853-1.695 1.337-2.534l-0 0c0.486-0.842 0.996-1.654 1.524-2.427 0.935-0.071 1.894-0.108 2.863-0.108h0c0.973 0 1.933 0.037 2.868 0.108 0.52 0.767 1.027 1.577 1.515 2.419 0.493 0.851 0.946 1.695 1.355 2.522-0.408 0.842-0.86 1.694-1.351 2.545v0 0zM24.997 3.539c1.053 0.607 1.462 3.055 0.801 6.266-0.042 0.205-0.090 0.414-0.141 0.625-1.304-0.301-2.721-0.525-4.203-0.664-0.864-1.23-1.759-2.348-2.657-3.317 0.242-0.232 0.483-0.454 0.723-0.663 2.321-2.020 4.49-2.817 5.478-2.247v0 0z"></path>*/
/*                         <path class="path4" fill="#53c1de" d="M17.839 13.171c1.55 0 2.807 1.257 2.807 2.807s-1.257 2.807-2.807 2.807-2.807-1.257-2.807-2.807c0-1.55 1.257-2.807 2.807-2.807z"></path>*/
/*                     </symbol>*/
/*                     <symbol id="micon-photoshop" viewBox="0 0 33 32">*/
/*                         <title>photoshop</title>*/
/*                         <path class="path1" fill="#000" d="M1.367 1.367h30.085v29.265h-30.085v-29.265z"></path>*/
/*                         <path class="path2" fill="#31c5f0" d="M1.367 1.367h30.085v29.265h-30.085v-29.265zM0 32h32.821v-32h-32.821v32zM22.127 13.128c-1.080 0-1.45 0.547-1.45 0.998 0 0.492 0.246 0.834 1.696 1.586 2.147 1.039 2.817 2.038 2.817 3.501 0 2.188-1.668 3.364-3.925 3.364-1.19 0-2.215-0.246-2.803-0.588-0.096-0.041-0.109-0.109-0.109-0.219v-2.010c0-0.137 0.068-0.178 0.164-0.109 0.862 0.561 1.846 0.807 2.749 0.807 1.080 0 1.532-0.451 1.532-1.067 0-0.492-0.315-0.93-1.696-1.641-1.942-0.93-2.749-1.873-2.749-3.446 0-1.764 1.381-3.227 3.774-3.227 1.176 0 1.997 0.178 2.448 0.383 0.109 0.068 0.137 0.178 0.137 0.273v1.873c0 0.109-0.068 0.178-0.205 0.137-0.602-0.383-1.491-0.615-2.379-0.615v0zM10.366 14.756c0.315 0.027 0.561 0.027 1.108 0.027 1.6 0 3.104-0.561 3.104-2.735 0-1.737-1.080-2.612-2.899-2.612-0.547 0-1.067 0.027-1.313 0.041v5.279zM7.932 7.494c0-0.096 0.191-0.164 0.301-0.164 0.875-0.041 2.174-0.068 3.528-0.068 3.788 0 5.265 2.079 5.265 4.732 0 3.473-2.516 4.964-5.607 4.964-0.52 0-0.697-0.027-1.067-0.027v5.251c0 0.109-0.041 0.164-0.164 0.164h-2.092c-0.109 0-0.164-0.041-0.164-0.164v-14.687z"></path>*/
/*                     </symbol>*/
/*                 </defs>*/
/*             </svg>*/
/* */
/*             <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*             <div class="totop">*/
/*                 <span><a href="#" id="toTop"><i class="fa fa-arrow-up"></i></a></span>*/
/*             </div>*/
/*             <p><a href="http://modx.ws/">Dev User Lab</a> создан <i class="fa fa-code"></i> <i class="fa fa-heart"></i> <a href="mailto:viktorminator@gmail.com">Виктором Матушевским</a></p>*/
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
