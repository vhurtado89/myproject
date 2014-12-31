<?php

/* RaulFraileLadybugBundle:Collector:ladybug.html.twig */
class __TwigTemplate_ad4e3271d85e13d0c3efbb64d503238e671e82c980802e4d1a06c57e5287ea07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["vars_count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "vars", array()));
        // line 6
        echo "
    ";
        // line 7
        ob_start();
        // line 8
        echo "        <img width=\"20\" height=\"28\" alt=\"Ladybug\" style=\"border-width: 0; vertical-align: middle; margin-right: 0;\" src=\"data:image/png;base64,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\"/>
        <span class=\"sf-toolbar-status";
        // line 9
        if (((isset($context["vars_count"]) ? $context["vars_count"] : $this->getContext($context, "vars_count")) > 0)) {
            echo " sf-toolbar-status-green";
        }
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["vars_count"]) ? $context["vars_count"] : $this->getContext($context, "vars_count")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Dumps</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["vars_count"]) ? $context["vars_count"] : $this->getContext($context, "vars_count")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => true)));
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 26
        ob_start();
        // line 27
        echo "        <img src=\"data:image/png;base64,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\" style=\"padding-top:5px;\" alt=\"Dependency Injection Container\" />
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 28
        echo "</span>
        <strong>Ladybug</strong>
        <span class=\"count\">
            <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "vars", array())), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        // line 37
        echo "    <h2>Ladybug</h2>

    <ul class=\"alt\">
        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "vars", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 41
            echo "        <li>
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "file", array(), "array"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "line", array(), "array"), "html", null, true);
            echo "
                    <span style=\"font-size:12px\">
                        ";
            // line 44
            echo $this->getAttribute($context["var"], "content", array(), "array");
            echo "
                    </span>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "RaulFraileLadybugBundle:Collector:ladybug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  139 => 44,  132 => 42,  129 => 41,  125 => 40,  120 => 37,  117 => 36,  109 => 31,  104 => 28,  100 => 27,  98 => 26,  95 => 25,  92 => 24,  85 => 21,  82 => 20,  77 => 17,  71 => 14,  67 => 12,  64 => 11,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
