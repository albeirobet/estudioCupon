<?php

/* CiudadBundle:Default:recientes.html.twig */
class __TwigTemplate_f9c7a010c8326e72c5a276fa10a1f96a extends Twig_Template
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
        echo "Ofertas recientes en ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "recientes";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Ofertas recientes en <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
        echo "</strong></h1>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ofertas"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 7
            $this->env->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig")->display($context);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 9
            echo "<p>Esta ciudad todavía no ha publicado ninguna oferta</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:recientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  83 => 9,  70 => 7,  52 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 2,);
    }
}
