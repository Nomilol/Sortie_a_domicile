<?php

/* /home/simplon/Documents/SortieAdom/install-master/themes/demo/pages/contact.htm */
class __TwigTemplate_a0e7b67974cd743554ca4264f2e49e0208bdee73f7bfeea76e230a18897a03fe extends Twig_Template
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
        echo "<div class=\"col-md-offset-1\">
  
    <div class=\"container\">
    <h2 class=\"col-md-offset-4\">Contactez nous!</h2>
    <form method=\"post\" class=\"well col-md-10\">
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"nom\">Nom:</label>
        <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required=\"required\">    
    </div>
        
   <div class=\"form-group\">
        <label class=\"control-label\" for=\"prenom\">Prenom:</label>
        <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required=\"required\">  
    </div>
        
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"email\">Email:</label>
        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required=\"required\">   
    </div>
        
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"numero\">Numero:</label>
        <input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" required=\"required\">    
    </div>
    <div class=\"form-group\">
    <label class=\"control-label\" for=\"message\">Message:</label>
    <textarea class=\"form-control\" id=\"message\" name=\"message\"></textarea>
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>
    
        
    </form>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/Documents/SortieAdom/install-master/themes/demo/pages/contact.htm";
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
        return new Twig_Source("<div class=\"col-md-offset-1\">
  
    <div class=\"container\">
    <h2 class=\"col-md-offset-4\">Contactez nous!</h2>
    <form method=\"post\" class=\"well col-md-10\">
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"nom\">Nom:</label>
        <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required=\"required\">    
    </div>
        
   <div class=\"form-group\">
        <label class=\"control-label\" for=\"prenom\">Prenom:</label>
        <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required=\"required\">  
    </div>
        
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"email\">Email:</label>
        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required=\"required\">   
    </div>
        
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"numero\">Numero:</label>
        <input type=\"number\" class=\"form-control\" id=\"numero\" name=\"numero\" required=\"required\">    
    </div>
    <div class=\"form-group\">
    <label class=\"control-label\" for=\"message\">Message:</label>
    <textarea class=\"form-control\" id=\"message\" name=\"message\"></textarea>
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>
    
        
    </form>
    </div>
</div>
</div>", "/home/simplon/Documents/SortieAdom/install-master/themes/demo/pages/contact.htm", "");
    }
}
