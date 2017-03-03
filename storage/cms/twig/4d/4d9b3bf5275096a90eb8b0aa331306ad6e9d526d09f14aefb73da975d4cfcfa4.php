<?php

/* /home/simplon/exos/install-master/themes/demo/pages/home.htm */
class __TwigTemplate_eee4d614d8bfe544a916ee1a6fb41ecd81a0271642c5d0d218d36fb7be04739c extends Twig_Template
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
        echo "<h1>Bienvenue sur Sorties A Domicile</h1>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/themes/demo/pages/home.htm";
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
        return new Twig_Source("<h1>Bienvenue sur Sorties A Domicile</h1>", "/home/simplon/exos/install-master/themes/demo/pages/home.htm", "");
    }
}
