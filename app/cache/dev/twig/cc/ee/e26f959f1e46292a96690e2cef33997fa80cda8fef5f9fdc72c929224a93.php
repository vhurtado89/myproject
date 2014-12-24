<?php

/* ContactBundle:Contact:newContact.html.twig */
class __TwigTemplate_cceee26f959f1e46292a96690e2cef33997fa80cda8fef5f9fdc72c929224a93 extends Twig_Template
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
            echo $this->env->getExtension('routing')->getUrl("api_1_post_contact");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
\t\t\t";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "\t\t
\t\t\t<input type=\"submit\" value=\"submit\">
\t\t\t";
            // line 7
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t</form>
\t";
        }
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:newContact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 5,  31 => 4,  29 => 3,  20 => 1,);
    }
}
