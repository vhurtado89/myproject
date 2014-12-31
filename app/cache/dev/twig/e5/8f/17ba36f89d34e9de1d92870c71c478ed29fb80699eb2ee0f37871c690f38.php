<?php

/* default/index.html.twig */
class __TwigTemplate_e58f17ba36f89d34e9de1d92870c71c478ed29fb80699eb2ee0f37871c690f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <p>For the purpose of this project there are only two links on this page. The first will take you to the contacts page where you can view all the contacts. The second link will take you to the API docs page.  </p>

    <p>
    \t<a href = \"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("api_1_get_contacts");
        echo "\"> Go to Contacts Rest API</a>
    </p>

    <p>
    \t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\"> Go to API DOCS</a>
    </p>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
