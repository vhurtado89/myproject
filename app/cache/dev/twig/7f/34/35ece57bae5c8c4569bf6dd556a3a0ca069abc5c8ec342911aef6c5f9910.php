<?php

/* ContactBundle:Contact:getContact.html.twig */
class __TwigTemplate_7f3435ece57bae5c8c4569bf6dd556a3a0ca069abc5c8ec342911aef6c5f9910 extends Twig_Template
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
        // line 3
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "lastname", array()), "html", null, true);
        echo "</h1>

\t<table>
\t\t<tr>
\t\t\t<td>Email 1 : </td>
\t\t\t<td> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email1", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Eamil 2 :</td>
\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email2", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Address 1 :</td>
\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "address1", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Address 2 :</td>
\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "address2", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>City :</td>
\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "city", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>State : </td>
\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "state", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Zip : </td>
\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "zip", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Phone 1 :</td>
\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone1", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Phone 2 :</td>
\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone2", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t</table>
\t
<a href = \"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("api_1_get_contacts");
        echo "\"> Go Back</a>
";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:getContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  106 => 40,  99 => 36,  92 => 32,  85 => 28,  78 => 24,  71 => 20,  64 => 16,  57 => 12,  50 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
