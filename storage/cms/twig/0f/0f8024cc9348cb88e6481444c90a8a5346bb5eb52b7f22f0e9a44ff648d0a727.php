<?php

/* /home/simplon/exos/install-master/themes/demo/pages/contact.htm */
class __TwigTemplate_92ad973a0bb6fd565bb15c5d6120d734c214221b417d15ea0628a30f39d2ef3a extends Twig_Template
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
        echo "<div class=\"col-md-offset-4\">
  

\t<div class=\"container\">

\t<h2 class=\"col-md-offset-2\">Contactez nous!</h2>

\t<form method=\"post\" class=\"well col-md-6\">

\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Nom:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required=\"required\">\t
\t</div>
\t\t
   <div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"prenom\">Prenom:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"email\">Email:</label>
\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"numero\">Numero:</label>
\t\t<input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" required=\"required\">\t
\t</div>
\t<div class=\"form-group\">
\t<label class=\"control-label\" for=\"message\">Message:</label>
    <textarea class=\"form-control\" id=\"message\" name=\"message\"></textarea>
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>

\t\t
\t</form>
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/themes/demo/pages/contact.htm";
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
        return new Twig_Source("<div class=\"col-md-offset-4\">
  

\t<div class=\"container\">

\t<h2 class=\"col-md-offset-2\">Contactez nous!</h2>

\t<form method=\"post\" class=\"well col-md-6\">

\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Nom:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required=\"required\">\t
\t</div>
\t\t
   <div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"prenom\">Prenom:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"email\">Email:</label>
\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"numero\">Numero:</label>
\t\t<input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" required=\"required\">\t
\t</div>
\t<div class=\"form-group\">
\t<label class=\"control-label\" for=\"message\">Message:</label>
    <textarea class=\"form-control\" id=\"message\" name=\"message\"></textarea>
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>

\t\t
\t</form>
\t</div>
</div>
</div>", "/home/simplon/exos/install-master/themes/demo/pages/contact.htm", "");
    }
}
