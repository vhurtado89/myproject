<?php

/* ContactBundle:Contact:editContact.html.twig */
class __TwigTemplate_3933092a23c92b5bbf11a7d6990059ac05f65b465e97cf0dc426f58257545a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t<h1>Contact Form</h1>
\t";
        // line 3
        if ((!(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))))) {
            // line 4
            echo "\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("api_1_put_contact", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

\t\t\t";
            // line 6
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "\t\t
\t\t\t\t
\t\t\t<input type=\"submit\" value=\"submit\">
\t\t\t
\t\t\t";
            // line 10
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t</form>
\t";
        }
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:editContact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 6,  31 => 4,  29 => 3,  20 => 1,);
    }
}
