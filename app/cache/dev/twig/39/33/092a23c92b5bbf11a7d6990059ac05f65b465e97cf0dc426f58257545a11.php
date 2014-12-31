<?php

/* ContactBundle:Contact:editContact.html.twig */
class __TwigTemplate_3933092a23c92b5bbf11a7d6990059ac05f65b465e97cf0dc426f58257545a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ContactBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t\t<h1>Contact Form</h1>
\t\t";
        // line 6
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 7
            echo "\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("api_1_put_contact", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
            echo "\" method=\"PUT\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

\t\t\t\t";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

\t\t\t\t<input type=\"submit\" value=\"submit\">

\t\t\t</form>
\t\t";
        }
        // line 15
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:editContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 9,  52 => 7,  50 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
