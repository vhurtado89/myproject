<?php

/* ContactBundle:Contact:getContacts.html.twig */
class __TwigTemplate_c45b1d52255fa0d2fae2a300e08dc295781be00768444cbd34cea450ade27b6d extends Twig_Template
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
        echo "\t<h1 class=\"firstname\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact list", array(), "ContactBundle"), "html", null, true);
        echo "</h1>

\t<ul id=\"contact-list\">
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 6
            echo "\t\t\t<li>
\t\t\t\t<a href = \"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_get_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "lastname", array()), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "\t\t\t<li>
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.list.empty", array(), "ContactBundle"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ul>
\t<p>
\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("api_1_new_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contact.new.link", array(), "ContactBundle"), "html", null, true);
        echo "</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:getContacts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 14,  56 => 11,  53 => 10,  41 => 7,  38 => 6,  33 => 5,  26 => 2,  20 => 1,);
    }
}
