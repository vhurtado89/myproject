<?php

/* ContactBundle:Contact:removeContact.html.twig */
class __TwigTemplate_22bf7b635f4a261d476427caf554e2800f7d1c90695c834c5797c26772d78734 extends Twig_Template
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
        // line 2
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("api_1_delete_contact", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" method=\"DELETE\" >
\t\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastname", array()), "html", null, true);
        echo "</h1>
\t\t<p>
\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email1", array()), "html", null, true);
        echo "
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email2", array()), "html", null, true);
        echo "
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "address1", array()), "html", null, true);
        echo "
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "address2", array()), "html", null, true);
        echo "
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "city", array()), "html", null, true);
        echo "
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "state", array()), "html", null, true);
        echo "
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "zip", array()), "html", null, true);
        echo "
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone1", array()), "html", null, true);
        echo "
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone2", array()), "html", null, true);
        echo "
\t\t</p>\t
\t\t<input type=\"submit\" value=\"submit\">
\t</form>
";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:removeContact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  31 => 3,  26 => 2,  20 => 1,);
    }
}
