<?php

/* OfertaBundle:Default:includes/minioferta.html.twig */
class __TwigTemplate_226fdcaa8801544b1eed4e0faa096fb3 extends Twig_Template
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
        echo "<section class=\"oferta mini\">
<div class=\"descripcion\">
<h2><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
        echo "</a></h2>
";
        // line 4
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute($this->getContext($context, "oferta"), "descripcion"));
        echo "
<a class=\"boton\" href=\"#\">Comprar</a>
<div class=\"estado\">
<strong>Faltan</strong>: ";
        // line 7
        echo $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"));
        echo "
</div>
</div>
<div class=\"galeria\">
<img alt=\"Fotografía de la oferta\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getContext($context, "oferta"), "foto"))), "html", null, true);
        echo "\">
<p class=\"precio\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute($this->getContext($context, "oferta"), "precio"), $this->getAttribute($this->getContext($context, "oferta"), "descuento")), "html", null, true);
        // line 13
        echo "</span></p>
<p>Disfruta de esta oferta en <a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "nombre"), "html", null, true);
        // line 15
        echo "</a></p>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/minioferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 14,  50 => 13,  46 => 12,  42 => 11,  35 => 7,  29 => 4,  23 => 3,  19 => 1,  92 => 12,  83 => 9,  70 => 7,  52 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 2,);
    }
}
