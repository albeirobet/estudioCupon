<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_ff29c68cfdc78e2a6d319601dba62512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Cupon, cada día ofertas increíbles en tu ciudad con
descuentos de hasta el 90%";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        echo " 
";
        // line 6
        $this->env->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig")->display($context);
    }

    // line 8
    public function block_aside($context, array $blocks = array())
    {
        echo " ... ";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 6,  44 => 5,  38 => 4,  31 => 2,);
    }
}
