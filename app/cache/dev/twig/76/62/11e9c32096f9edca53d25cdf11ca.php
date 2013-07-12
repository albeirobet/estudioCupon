<?php

/* ::frontend.html.twig */
class __TwigTemplate_766211e9c32096f9edca53d25cdf11ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["ciudadSeleccionada"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "has", array(0 => "ciudad"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "ciudad"), "method")) : ($this->getContext($context, "ciudad_por_defecto")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/normalizar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/comun.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/frontend.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<header>
       <h1>
           <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_portada");
        echo "\">CUPON</a>
       </h1>
       <nav>
        <ul>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_portada");
        echo "\">Oferta del día</a></li>
             <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => $this->getContext($context, "ciudadSeleccionada"))), "html", null, true);
        echo "\">Ofertas Recientes</a></li>
            <li><a href=\"#\">Mis ofertas</a></li>
            <li>";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CiudadBundle:Default:listaCiudades", array("ciudad" => $this->getContext($context, "ciudadSeleccionada"))));
        echo "</li>
        </ul>
       </nav>
</header>
<article>
";
        // line 32
        $this->displayBlock('article', $context, $blocks);
        // line 33
        echo "</article>
<aside>
";
        // line 35
        $this->displayBlock('aside', $context, $blocks);
        // line 36
        echo "</aside>
";
    }

    // line 32
    public function block_article($context, array $blocks = array())
    {
    }

    // line 35
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  101 => 32,  96 => 36,  94 => 35,  90 => 33,  88 => 32,  80 => 27,  71 => 24,  64 => 20,  60 => 18,  57 => 17,  46 => 14,  42 => 13,  37 => 12,  34 => 11,  29 => 4,  85 => 15,  75 => 25,  70 => 11,  59 => 10,  52 => 16,  47 => 17,  45 => 7,  41 => 6,  36 => 5,  30 => 3,);
    }
}
