<?php

/* /home/simplon/exos/install-master/themes/demo/pages/events.htm */
class __TwigTemplate_87bc3ebdb84d687595b96f5a0f137de8f29d6b94dbb71d5ea08f6f01d70b1822 extends Twig_Template
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
        echo "<div class=\"infos sortie\">
</div>

<form class=\"ui form\" action=\"\" method=\"POST\">
    <div class=\"last name\">
        <label for=\"last name\">Nom</label>
        <input type=\"text\" id=\"last name\"/>
    </div>
    <div class=\"first name\">
        <label for=\"first name\">Prénom</label>
        <input type=\"text\" id=\"first name\"/>
    </div>
    <div class=\"mail\">
        <label for=\"mail\">Email</label>
        <input type=\"text\" id=\"mail\"/>
    </div>
    <div class=\"phone\">
        <label for=\"phone\">Téléphone</label>
        <input type=\"text\" id=\"phone\"/>
    </div>
    <div class=\"cp\">
        <label for=\"cp\">Code Postal</label>
        <input type=\"text\" id=\"cp\"/>
    </div>
    <button class=\"ui green button\" type=\"submit\">Confirmer</button>
    
</form>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/themes/demo/pages/events.htm";
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
        return new Twig_Source("<div class=\"infos sortie\">
</div>

<form class=\"ui form\" action=\"\" method=\"POST\">
    <div class=\"last name\">
        <label for=\"last name\">Nom</label>
        <input type=\"text\" id=\"last name\"/>
    </div>
    <div class=\"first name\">
        <label for=\"first name\">Prénom</label>
        <input type=\"text\" id=\"first name\"/>
    </div>
    <div class=\"mail\">
        <label for=\"mail\">Email</label>
        <input type=\"text\" id=\"mail\"/>
    </div>
    <div class=\"phone\">
        <label for=\"phone\">Téléphone</label>
        <input type=\"text\" id=\"phone\"/>
    </div>
    <div class=\"cp\">
        <label for=\"cp\">Code Postal</label>
        <input type=\"text\" id=\"cp\"/>
    </div>
    <button class=\"ui green button\" type=\"submit\">Confirmer</button>
    
</form>", "/home/simplon/exos/install-master/themes/demo/pages/events.htm", "");
    }
}
