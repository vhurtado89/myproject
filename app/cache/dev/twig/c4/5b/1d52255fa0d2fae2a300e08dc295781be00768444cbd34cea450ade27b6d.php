<?php

/* ContactBundle:Contact:getContacts.html.twig */
class __TwigTemplate_c45b1d52255fa0d2fae2a300e08dc295781be00768444cbd34cea450ade27b6d extends Twig_Template
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
        // line 28
        echo "
";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<h1 class=\"firstname\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact List", array(), "ContactBundle"), "html", null, true);
        echo "</h1>

\t\t<ul id=\"contact-list\">
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 9
            echo "\t\t\t\t<li>
\t\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t<a href = \"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_get_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "lastname", array()), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t<a href= \"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_edit_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit", array(), "ContactBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t<a href= \"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_1_remove_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete", array(), "ContactBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t\t\t<li>
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact List is Empty", array(), "ContactBundle"), "html", null, true);
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</ul>
\t\t<p>
\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("api_1_new_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add new Contact", array(), "ContactBundle"), "html", null, true);
        echo "</a>
\t\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:getContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  109 => 23,  100 => 20,  97 => 19,  86 => 15,  79 => 13,  70 => 11,  66 => 10,  63 => 9,  58 => 8,  51 => 5,  48 => 4,  43 => 28,  40 => 4,  37 => 3,  11 => 1,);
    }
}
