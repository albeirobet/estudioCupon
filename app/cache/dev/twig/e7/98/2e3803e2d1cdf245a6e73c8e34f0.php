<?php

/* ::base.html.twig */
class __TwigTemplate_e7982e3803e2d1cdf245a6e73c8e34f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Cupon</title>
        ";
        // line 6
        $this->env->loadTemplate("YepsuaSmarTwigBundle::smartwigAssets.html.twig")->display($context);
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body id=\"";
        // line 10
        $this->displayBlock('id', $context, $blocks);
        echo "\">
        <div id=\"contenedor\">
                ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "                <footer>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">Privacidad</a>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        echo "\">Sobre nosotros</a>
                </footer>
            ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "        </div>
     </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "                ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  99 => 13,  86 => 8,  83 => 7,  78 => 5,  69 => 20,  56 => 16,  49 => 14,  39 => 9,  24 => 1,  106 => 21,  101 => 32,  96 => 12,  94 => 35,  90 => 10,  88 => 32,  80 => 27,  71 => 22,  64 => 18,  60 => 17,  57 => 17,  46 => 14,  42 => 10,  37 => 12,  34 => 6,  29 => 4,  85 => 18,  75 => 25,  70 => 11,  59 => 10,  52 => 15,  47 => 12,  45 => 7,  41 => 6,  36 => 7,  30 => 5,);
    }
}
