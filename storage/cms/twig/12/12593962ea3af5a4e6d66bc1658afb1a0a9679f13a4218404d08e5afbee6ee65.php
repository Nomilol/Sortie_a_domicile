<?php

/* /home/simplon/exos/install-master/plugins/timfoerster/leaflet/components/map/default.htm */
class __TwigTemplate_cfdf141ab4c09fe3136bb85c5dc021a9c787de1096a2debe5cb73ce2342c9ef6 extends Twig_Template
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
        $context["map"] = $this->getAttribute(($context["__SELF__"] ?? null), "map", array());
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "fieldId", array()), "html", null, true);
        echo "\" style=\"height: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "height", array()), "html", null, true);
        echo "\"></div>

";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 6
        echo "    <script>

        var ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "fieldId", array()), "html", null, true);
        echo " = L.map('";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "fieldId", array()), "html", null, true);
        echo "').setView([";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "latitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "longitude", array()), "html", null, true);
        echo "], ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "zoom", array()), "html", null, true);
        echo ");

        var defaultIcon = L.icon({
            iconUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-icon.png',
            iconRetinaUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-icon-2x.png',
            shadowUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-shadow.png',

            iconSize:    [25, 41],
            shadowSize:  [41, 41],
            iconAnchor:  [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28]
        });

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "mapboxAccessToken", array()), "html", null, true);
        echo "', {
            attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"http://mapbox.com\">Mapbox</a>',
            maxZoom: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "maxZoom", array()), "html", null, true);
        echo ",
            id: '";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "mapboxId", array()), "html", null, true);
        echo "',
            accessToken: '";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "mapboxAccessToken", array()), "html", null, true);
        echo "'
        }).addTo(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "fieldId", array()), "html", null, true);
        echo ");

        var paramters = {};
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["map"] ?? null), "objectsToDisplay", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 31
            echo "            parameters = ";
            if ($this->getAttribute($context["object"], "parameters", array())) {
                echo " ";
                echo trim(twig_replace_filter($this->getAttribute($context["object"], "parameters", array()), array("
" => "", "" => "")));
                echo " ";
            } else {
                echo " {} ";
            }
            echo ";
            ";
            // line 32
            if (($this->getAttribute($context["object"], "type", array()) == "marker")) {
                // line 33
                echo "                ";
                if ( !twig_test_empty($this->getAttribute($context["object"], "icon", array()))) {
                    // line 34
                    echo "                    parameters['icon'] = icon";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "icon", array()), "html", null, true);
                    echo ";
                ";
                } else {
                    // line 36
                    echo "                    parameters['icon'] = defaultIcon;
                ";
                }
                // line 38
                echo "            ";
            }
            // line 39
            echo "            var mapObject";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " = L.";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "type", array()), "html", null, true);
            echo "([";
            echo twig_escape_filter($this->env, trim($this->getAttribute($context["object"], "position", array())), "html", null, true);
            echo "], parameters).addTo(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["map"] ?? null), "fieldId", array()), "html", null, true);
            echo ");
            ";
            // line 40
            if ($this->getAttribute($context["object"], "popup", array())) {
                // line 41
                echo "                mapObject";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".bindPopup(\"";
                echo trim(twig_replace_filter($this->getAttribute($context["object"], "popup", array()), array("
" => "", "" => "")));
                echo "\");
            ";
            }
            // line 43
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </script>
";
        // line 5
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/simplon/exos/install-master/plugins/timfoerster/leaflet/components/map/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 5,  168 => 44,  154 => 43,  145 => 41,  143 => 40,  132 => 39,  129 => 38,  125 => 36,  119 => 34,  116 => 33,  114 => 32,  102 => 31,  85 => 30,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  62 => 22,  37 => 8,  33 => 6,  31 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set map = __SELF__.map %}

<div id=\"{{ map.fieldId }}\" style=\"height: {{ map.height }}\"></div>

{% put scripts %}
    <script>

        var {{ map.fieldId }} = L.map('{{ map.fieldId }}').setView([{{ map.latitude }}, {{ map.longitude }}], {{ map.zoom }});

        var defaultIcon = L.icon({
            iconUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-icon.png',
            iconRetinaUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-icon-2x.png',
            shadowUrl: '/plugins/timfoerster/leaflet/assets/leaflet/images/marker-shadow.png',

            iconSize:    [25, 41],
            shadowSize:  [41, 41],
            iconAnchor:  [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28]
        });

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={{ map.mapboxAccessToken }}', {
            attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, Imagery © <a href=\"http://mapbox.com\">Mapbox</a>',
            maxZoom: {{ map.maxZoom }},
            id: '{{ map.mapboxId }}',
            accessToken: '{{ map.mapboxAccessToken }}'
        }).addTo({{ map.fieldId }});

        var paramters = {};
        {% for object in map.objectsToDisplay %}
            parameters = {% if object.parameters %} {{ object.parameters|replace({\"\\n\":'', \"\\r\":''})|trim|raw }} {% else %} {} {% endif %};
            {% if object.type == 'marker' %}
                {% if object.icon is not empty %}
                    parameters['icon'] = icon{{ object.icon }};
                {% else %}
                    parameters['icon'] = defaultIcon;
                {% endif %}
            {% endif %}
            var mapObject{{ loop.index }} = L.{{ object.type }}([{{ object.position|trim }}], parameters).addTo({{ map.fieldId }});
            {% if object.popup %}
                mapObject{{ loop.index }}.bindPopup(\"{{ object.popup|replace({\"\\n\":'', \"\\r\":''})|trim|raw }}\");
            {% endif %}
        {% endfor %}
    </script>
{% endput %}
", "/home/simplon/exos/install-master/plugins/timfoerster/leaflet/components/map/default.htm", "");
    }
}
