<?php

/* base.html.twig */
class __TwigTemplate_772a7c25c9a256e3d0585f0aeeb728cebc7dedb292ac335064df6747690516d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>Symfony Configuration</title>
        <link rel=\"stylesheet\" href=\"../../bundles/framework/css/structure.css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"../../bundles/framework/css/body.css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"../../bundles/sensiodistribution/webconfigurator/css/install.css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <img src=\"../../bundles/framework/images/logo_symfony.png\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form-row\">

                      <label for=\"search-id\">
                          <img src=\"../../bundles/framework/images/grey_magnifier.png\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\" class=\"sf-button\">
                          <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">OK</span>
                            </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                <div class=\"block\">
                    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                </div>
            </div>
            <div class=\"version\">Symfony Standard Edition</div>
        </div>

       
        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>



";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "REST API";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  109 => 45,  104 => 6,  98 => 5,  89 => 53,  87 => 52,  79 => 46,  77 => 45,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
