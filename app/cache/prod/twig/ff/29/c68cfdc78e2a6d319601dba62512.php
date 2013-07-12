<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_ff29c68cfdc78e2a6d319601dba62512 extends Twig_Template
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Portada | Cupon</title>
    </head>
    <body id=\"portada\">
        <div id=\"contenedor\">
            <header>
                <h1><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">CUPON</a></h1>
                <nav>
                    <ul>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">Oferta del día</a></li>
                        <li><a href=\"#\">Ofertas recientes</a></li>
                        <li><a href=\"#\">Mis ofertas</a></li>
                    </ul>
                </nav>
            </header>

            <article class=\"oferta\">
                    <section class=\"descripcion\">
                    <h1><a href=\"#\">";
        // line 22
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "nombre"), "html", null, true);
        echo "</a></h1>
                        ";
        // line 23
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "descripcion"), "html", null, true);
        echo "
                        <a class=\"boton\" href=\"#\">Comprar</a>
                    </section>

                    <section class=\"galeria\">
                        <img alt=\"Fotografía de la oferta\" src=\"";
        // line 28
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($_oferta_, "foto"))), "html", null, true);
        echo "\">
                        <p class=\"precio\">";
        // line 29
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "precio"), "html", null, true);
        echo " &euro; <span>";
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "descuento"), "html", null, true);
        echo "</span></p>
                        <p><strong>Condiciones:</strong> ";
        // line 30
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "condiciones"), "html", null, true);
        echo "</p>
                    </section>

                    
                    <section class=\"estado\">
                        <div class=\"tiempo\">
                            <strong>Faltan</strong>: ";
        // line 36
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_oferta_, "fechaExpiracion")), "html", null, true);
        echo "
                        </div>
                        <div class=\"compras\">
                            <strong>Compras</strong>: ";
        // line 39
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "compras"), "html", null, true);
        echo "
                        </div>
                        <div class=\"faltan\">
                            ";
        // line 42
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        $context["faltan"] = ($this->getAttribute($_oferta_, "umbral") - $this->getAttribute($_oferta_, "compras"));
        // line 43
        echo "                                ";
        if (isset($context["faltan"])) { $_faltan_ = $context["faltan"]; } else { $_faltan_ = null; }
        if (($_faltan_ > 0)) {
            // line 44
            echo "                                Faltan <strong>";
            if (isset($context["faltan"])) { $_faltan_ = $context["faltan"]; } else { $_faltan_ = null; }
            echo twig_escape_filter($this->env, $_faltan_, "html", null, true);
            echo " compras</strong> <br/>
                                para activar la oferta
                                 ";
        } else {
            // line 47
            echo "                                <strong>Oferta activada</strong> por superar las
                                <strong>";
            // line 48
            if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_oferta_, "umbral"), "html", null, true);
            echo "</strong> compras necesarias
                                ";
        }
        // line 50
        echo "                        </div>
                     </section>

                    
                    
                    <section class=\"direccion\">
                        <h2>Disfruta de la oferta en</h2>
                        <p>
                            <a href=\"#\">";
        // line 58
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_oferta_, "tienda"), "nombre"), "html", null, true);
        echo "</a>
                            ";
        // line 59
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_oferta_, "tienda"), "direccion"), "html", null, true);
        echo "
                        </p>
                    </section>
                    <section class=\"tienda\">
                        <h2>Sobre la tienda</h2>
                        ";
        // line 64
        if (isset($context["oferta"])) { $_oferta_ = $context["oferta"]; } else { $_oferta_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_oferta_, "tienda"), "descripcion"), "html", null, true);
        echo "
                    </section>

                    
                    </article>
                    <aside>
                        ## FORMULARIO DE LOGIN ##
                        <section id=\"nosotros\">
                            <h2>Sobre nosotros</h2>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </section>
                    </aside>
                    <footer>
                        &copy; ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
                        <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">
                            Ayuda
                        </a>
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">
                            Contacto
                        </a>
                        <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">
                            Privacidad
                        </a>
                        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        echo "\">
                            Sobre nosotros
                        </a>
                    </footer>

                </div>
            </body>
        </html>

";
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
        return array (  186 => 87,  180 => 84,  174 => 81,  168 => 78,  164 => 77,  147 => 64,  138 => 59,  133 => 58,  123 => 50,  117 => 48,  114 => 47,  106 => 44,  102 => 43,  99 => 42,  92 => 39,  85 => 36,  75 => 30,  67 => 29,  62 => 28,  53 => 23,  48 => 22,  36 => 13,  30 => 10,  19 => 1,);
    }
}
