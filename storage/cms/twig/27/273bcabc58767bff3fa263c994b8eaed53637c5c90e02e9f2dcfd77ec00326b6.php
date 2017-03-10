<?php

/* /home/axell/projetSAD/install-master/themes/demo/partials/header.htm */
class __TwigTemplate_9a11478bed4dba8da2a60adc63c55bb8914e81fcc018fb0fa9dec5692b41a307 extends Twig_Template
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
        echo "<div class=\"head\">
<a href=\"/\"><h1 class=\"headh1\">Sorties à Domicile</h1></a>
<img class=\"headimg\"  src=\"http://resizer.gandi.ws/gandi81403/image/logo_1.jpg?w=960\" alt=\"\">
</div>
<div class=\"headselect\">
<a href=\"/\"><h4>Home</h4></a>
<a href=\"/propos\"><h4>A propos</h4></a>
<a href=\"/contact\"><h4>Contact</h4></a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/axell/projetSAD/install-master/themes/demo/partials/header.htm";
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
        return new Twig_Source("<div class=\"head\">
<a href=\"/\"><h1 class=\"headh1\">Sorties à Domicile</h1></a>
<img class=\"headimg\"  src=\"http://resizer.gandi.ws/gandi81403/image/logo_1.jpg?w=960\" alt=\"\">
</div>
<div class=\"headselect\">
<a href=\"/\"><h4>Home</h4></a>
<a href=\"/propos\"><h4>A propos</h4></a>
<a href=\"/contact\"><h4>Contact</h4></a>
</div>", "/home/axell/projetSAD/install-master/themes/demo/partials/header.htm", "");
    }
}
