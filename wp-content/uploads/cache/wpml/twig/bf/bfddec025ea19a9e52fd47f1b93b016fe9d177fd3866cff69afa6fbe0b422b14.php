<?php

/* tooltip.twig */
class __TwigTemplate_f809d26f12c94d5e3f71a6d19f0ef7e529e8785a840aa34df9ca66412278657e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"#\" class=\"js-wpml-ls-tooltip-open wpml-ls-tooltip-open otgs-ico-help\" data-content=\"";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "text", array()), "html_attr");
        echo "\" data-link-text=\"";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "link", array()), "text", array()), "html_attr");
        echo "\" data-link-url=\"";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "link", array()), "url", array()), "html_attr");
        echo "\" data-link-target=\"";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "link", array()), "target", array()), "html_attr");
        echo "\"></a>";
    }

    public function getTemplateName()
    {
        return "tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tooltip.twig", "C:\\OpenServer\\domains\\rdteh.seotm.biz\\wp-content\\plugins\\sitepress-multilingual-cms-master\\templates\\language-switcher-admin-ui\\tooltip.twig");
    }
}
