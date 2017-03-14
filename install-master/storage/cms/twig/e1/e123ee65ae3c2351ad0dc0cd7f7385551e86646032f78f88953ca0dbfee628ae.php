<?php

/* /home/simplon/Documents/SortieAdom/install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_51ac75ec8e4841be1c0bd94172571bdb7a77407e8f509fd6909a7a5421c07aa3 extends Twig_Template
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
<a href=\"/home\"><h4>Home</h4></a>
<a href=\"/Apropos\"><h4>A propos</h4></a>
<a href=\"/contact\"><h4>Contact</h4></a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/Documents/SortieAdom/install-master/themes/demo/partials/site/header.htm";
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
<a href=\"/home\"><h4>Home</h4></a>
<a href=\"/Apropos\"><h4>A propos</h4></a>
<a href=\"/contact\"><h4>Contact</h4></a>
</div>", "/home/simplon/Documents/SortieAdom/install-master/themes/demo/partials/site/header.htm", "");
    }
}
