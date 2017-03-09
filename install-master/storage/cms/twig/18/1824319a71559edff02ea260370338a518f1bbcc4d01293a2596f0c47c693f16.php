<?php

/* /home/simplon/Documents/SortieAdom/install-master/themes/demo/layouts/fallback.htm */
class __TwigTemplate_7d82dbbb019b2e791f5b199cf659ff598d2304fa749fa3317d7e967dd8342bec extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/simplon/Documents/SortieAdom/install-master/themes/demo/layouts/fallback.htm";
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
        return new Twig_Source("{% page %}", "/home/simplon/Documents/SortieAdom/install-master/themes/demo/layouts/fallback.htm", "");
    }
}
