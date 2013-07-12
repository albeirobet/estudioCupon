<?php

/* CiudadBundle:Default:listaCiudades.html.twig */
class __TwigTemplate_40d82234e2339ca5cc57a490bf22d1aa extends Twig_Template
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
        echo "<select id=\"ciudadseleccionada\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ciudades"));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 3
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "slug"), "html", null, true);
            echo "\"
                data-url=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ciudad_cambiar", array("ciudad" => $this->getAttribute($this->getContext($context, "ciudad"), "slug"))), "html", null, true);
            echo "\"
                ";
            // line 5
            echo ((($this->getContext($context, "ciudadActual") == $this->getAttribute($this->getContext($context, "ciudad"), "slug"))) ? ("selected=\"selected\"") : (""));
            echo ">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</select>
<script type=\"text/javascript\">
    var lista = document.getElementById('ciudadseleccionada');
    lista.onchange = function() {
    var url = lista.options[lista.selectedIndex].getAttribute('data-url');
        window.location = url;
        };
</script>
";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:listaCiudades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  26 => 3,  22 => 2,  454 => 154,  450 => 153,  445 => 152,  440 => 149,  435 => 148,  429 => 145,  424 => 142,  419 => 141,  414 => 138,  409 => 137,  406 => 135,  401 => 127,  397 => 126,  393 => 125,  389 => 124,  385 => 123,  381 => 122,  377 => 121,  373 => 120,  369 => 119,  365 => 118,  361 => 117,  357 => 116,  353 => 115,  349 => 114,  345 => 113,  341 => 112,  337 => 111,  332 => 110,  328 => 108,  323 => 107,  318 => 104,  314 => 103,  310 => 102,  305 => 101,  300 => 98,  295 => 97,  289 => 94,  284 => 91,  279 => 90,  273 => 87,  268 => 85,  263 => 83,  261 => 82,  256 => 79,  252 => 78,  248 => 77,  244 => 76,  239 => 75,  234 => 72,  229 => 71,  224 => 68,  219 => 67,  213 => 64,  208 => 61,  203 => 60,  198 => 57,  193 => 56,  188 => 53,  183 => 52,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  157 => 44,  151 => 41,  145 => 38,  139 => 35,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  117 => 28,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  92 => 20,  84 => 18,  76 => 16,  72 => 15,  68 => 14,  48 => 9,  44 => 8,  40 => 7,  32 => 5,  28 => 4,  19 => 1,  103 => 20,  99 => 13,  86 => 8,  83 => 7,  78 => 5,  69 => 20,  56 => 11,  49 => 14,  39 => 6,  24 => 3,  106 => 21,  101 => 32,  96 => 21,  94 => 35,  90 => 10,  88 => 19,  80 => 17,  71 => 22,  64 => 13,  60 => 12,  57 => 17,  46 => 14,  42 => 10,  37 => 12,  34 => 6,  29 => 4,  85 => 18,  75 => 25,  70 => 11,  59 => 10,  52 => 10,  47 => 12,  45 => 7,  41 => 6,  36 => 6,  30 => 5,);
    }
}
