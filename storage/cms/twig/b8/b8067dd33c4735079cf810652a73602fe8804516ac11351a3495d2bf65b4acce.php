<?php

/* /home/axell/projetSAD/install-master/themes/demo/partials/test.htm */
class __TwigTemplate_fa94c452d548413a2e54c8773039c604bcbb206e1b02fd8e8dc8a7ea8a14e0ca extends Twig_Template
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
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, officia tempore ea dolor corporis hic ex sint amet nostrum natus perspiciatis rem odit tempora debitis non numquam ipsam quisquam expedita.</p>";
    }

    public function getTemplateName()
    {
        return "/home/axell/projetSAD/install-master/themes/demo/partials/test.htm";
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
        return new Twig_Source("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, officia tempore ea dolor corporis hic ex sint amet nostrum natus perspiciatis rem odit tempora debitis non numquam ipsam quisquam expedita.</p>", "/home/axell/projetSAD/install-master/themes/demo/partials/test.htm", "");
    }
}
