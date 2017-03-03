<?php

/* /home/simplon/exos/install-master/themes/demo/pages/homehome.htm */
class __TwigTemplate_3fbd996e4695ffae8b47a5b749feb61bf30c15d8b276841f34969a17f232045a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>Accueil</title>
  <link rel=\"stylesheet\" href=\"/css/app.css\">
</head>
<body>
  <h1>Bienvenue sur Sorties A Domicile</h1>
  <div class=\"ui three item menu\">
    <a class=\"item\" href=\"/\">Accueil</a>
    <a class=\"item\" href=\"/apropos\">A propos</a>
    <a class=\"item\" href=\"/contact\">Contact</a>
  </div>
  <br>
  <br>
<script src=\"js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/themes/demo/pages/homehome.htm";
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
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>Accueil</title>
  <link rel=\"stylesheet\" href=\"/css/app.css\">
</head>
<body>
  <h1>Bienvenue sur Sorties A Domicile</h1>
  <div class=\"ui three item menu\">
    <a class=\"item\" href=\"/\">Accueil</a>
    <a class=\"item\" href=\"/apropos\">A propos</a>
    <a class=\"item\" href=\"/contact\">Contact</a>
  </div>
  <br>
  <br>
<script src=\"js/app.js\"></script>
</body>
</html>", "/home/simplon/exos/install-master/themes/demo/pages/homehome.htm", "");
    }
}
