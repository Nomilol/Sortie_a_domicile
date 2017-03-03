<?php

/* /home/simplon/exos/install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_5da47fd1d59fa2b676469b60a98e1d1a6fd932924d2b1e186eb908e82af244bb extends Twig_Template
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
<a href=\"/\"><h1 class=\"headh1\">Sorties A Domicile</h1></a>
<img class=\"headimg\"  src=\"http://resizer.gandi.ws/gandi81403/image/logo_1.jpg?w=960\" alt=\"\">
</div>
<div class=\"headselect\">
<a href=\"/\"><span>Home</span></a>
<a href=\"/propos\"><span>A propos</span></a>
<a href=\"/contact\"><span>Contact</span></a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/themes/demo/partials/site/header.htm";
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
<a href=\"/\"><h1 class=\"headh1\">Sorties A Domicile</h1></a>
<img class=\"headimg\"  src=\"http://resizer.gandi.ws/gandi81403/image/logo_1.jpg?w=960\" alt=\"\">
</div>
<div class=\"headselect\">
<a href=\"/\"><span>Home</span></a>
<a href=\"/propos\"><span>A propos</span></a>
<a href=\"/contact\"><span>Contact</span></a>
</div>", "/home/simplon/exos/install-master/themes/demo/partials/site/header.htm", "");
    }
}
