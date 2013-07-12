<?php

/* OfertaBundle:Default:includes/oferta.html.twig */
class __TwigTemplate_a1f1ab95e9435cda08503f495f704d2b extends Twig_Template
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
        echo "<section class=\"descripcion\">
    <h1><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "ciudad"), "slug"), "slug" => $this->getAttribute($this->getContext($context, "oferta"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
        echo "</a></h1>
        ";
        // line 3
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute($this->getContext($context, "oferta"), "descripcion"));
        echo "
        
        <a class=\"boton\" href=\"#\">Comprar</a>
</section>
<section class=\"estado\">
    <div class=\"tiempo\">
        <strong>Faltan</strong>: ";
        // line 9
        echo $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion"));
        echo "
    </div>
</section>

<section class=\"galeria\">
    <img alt=\"...\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getContext($context, "oferta"), "foto"))), "html", null, true);
        echo "\">
    <p class=\"precio\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute($this->getContext($context, "oferta"), "precio"), $this->getAttribute($this->getContext($context, "oferta"), "descuento")), "html", null, true);
        echo "</span></p>
    <p><strong>Condiciones:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "condiciones"), 100, true), "html", null, true);
        echo "</p>
</section>

<section class=\"direccion\">
    <h2>Disfruta de la oferta en</h2>
    <p>
        <a href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "nombre"), "html", null, true);
        echo "</a>
        ";
        // line 23
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "direccion"), "html", null, true));
        echo "

    </p>
</section>

<section class=\"tienda\">
    <h2>Sobre la tienda</h2>
    ";
        // line 30
        echo nl2br(twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "descripcion"), 40), "html", null, true));
        echo "

</section>



    
    


";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  68 => 23,  64 => 22,  55 => 16,  45 => 14,  37 => 9,  28 => 3,  22 => 2,  19 => 1,  53 => 8,  49 => 15,  44 => 5,  38 => 4,  31 => 2,);
    }
}
