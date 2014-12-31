<?php

/* ContactBundle:Contact:newContact.html.twig */
class __TwigTemplate_cceee26f959f1e46292a96690e2cef33997fa80cda8fef5f9fdc72c929224a93 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t\t<h1>Contact Form</h1>
\t\t";
        // line 5
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 6
            echo "\t\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getUrl("api_1_post_contact");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

\t\t\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "\t

\t\t\t\t<input type=\"submit\" value=\"submit\">

\t\t\t\t";
            // line 12
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t\t\t
\t\t\t</form>
\t\t";
        }
        // line 16
        echo "\t\t<a href = \"";
        echo $this->env->getExtension('routing')->getPath("api_1_get_contacts");
        echo "\"> Go Back</a>
\t";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:newContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  68 => 12,  61 => 8,  53 => 6,  51 => 5,  42 => 3,  37 => 2,  11 => 1,);
    }
}
