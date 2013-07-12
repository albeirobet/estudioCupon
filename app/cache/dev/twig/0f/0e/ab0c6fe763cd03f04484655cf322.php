<?php

/* OfertaBundle:Sitio:ayuda.html.twig */
class __TwigTemplate_0f0eab0c6fe763cd03f04484655cf322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Showcase Tab | Data Model";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "        
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo "   
  Arbol: <br>
   ";
        // line 9
        echo $this->env->getExtension('ui.addons')->componentRender($this->getContext($context, "tree"));
        echo "
  Your name: <input value=\"\" type=\"text\" id=\"name\" name=\"name\" /> <br>
  Your apellido: <input value=\"\" type=\"text\" id=\"apellido\" name=\"apellido\" /> <br>

  ";
        // line 13
        $buttonbtnAjaxOptions = array(
            "label" =>"Ajax",
        );
        $buttonbtnAjax = $this->env->getExtension('ui.core')->getWidget('ui.button');
        echo $buttonbtnAjax->initButton("btnAjax",preg_replace('/\w=""/'," ","" . sprintf('id="%s"',"btnAjax") . sprintf('onclick="%s"',"HolaMundo()") . sprintf('type="%s"',"button")),"button","Ajax"        );
        echo $buttonbtnAjax->endWidget();
        echo $buttonbtnAjax->build()                
                ->in("#btnAjax")                
                ->addOptions($buttonbtnAjaxOptions)
                ->execute();        
        // line 14
        echo "  ";
        $buttonbtnTooltipOptions = array(
            "label" =>"Button",
        );
        $buttonbtnTooltip = $this->env->getExtension('ui.core')->getWidget('ui.button');
        echo $buttonbtnTooltip->initButton("btnTooltip",preg_replace('/\w=""/'," ","" . sprintf('id="%s"',"btnTooltip") . sprintf('type="%s"',"button")),"button","Button"        );
        echo $buttonbtnTooltip->endWidget();
        echo $buttonbtnTooltip->build()                
                ->in("#btnTooltip")                
                ->addOptions($buttonbtnTooltipOptions)
                ->execute();        
        echo "    
    ";
        // line 15
        $tooltiptooltip245Options = array(
        );
        $tooltiptooltip245 = $this->env->getExtension('ui.core')->getWidget('ui.tooltip');
        echo $tooltiptooltip245->build()                
                ->in("#tooltip245")                
                ->addOptions($tooltiptooltip245Options)
                ->_content("Hello World")
                ->in("#btnTooltip")
                ->execute();        
        // line 16
        echo "  
  <div id=\"divUpdate\"></div>  
  <div id=\"statusLog\"></div>
  
  ";
        // line 20
        $jqueryCorejqueryCore694Options = array(
            "url" =>$this->env->getExtension('routing')->getPath("_showcase_greeting"),
            "name" =>"HolaMundo",
        );
        $jqueryCorejqueryCore694 = $this->env->getExtension('ui.core')->getWidget('ui.jqueryCore');
        echo $jqueryCorejqueryCore694->remoteCommand("#name, #apellido"        ,"#divUpdate")->setEmbebedFunction(true)                
                ->addOptions($jqueryCorejqueryCore694Options)
                ->assignToVar("HolaMundo",false)
                ->execute();        
        // line 24
        echo "  
  ";
        // line 25
        $jqueryCorejqueryCore267Options = array(
            "onstart" =>"\$('#statusLog').show().html('Starting The Ajax Call');",
            "onsuccess" =>"\$('#statusLog').html('Success');",
            "oncomplete" =>"\$('#statusLog').html('Completed...').delay(3000).fadeOut();",
            "onerror" =>"\$('#statusLog').html('Ups!! Error');",
            "for" =>"#btnAjax",
        );
        $jqueryCorejqueryCore267 = $this->env->getExtension('ui.core')->getWidget('ui.jqueryCore');
        echo $jqueryCorejqueryCore267->executeAjaxStatus("#btnAjax"        ,"\$('#statusLog').show().html('Starting The Ajax Call');"        ,        null        ,"\$('#statusLog').html('Success');"        ,"\$('#statusLog').html('Completed...').delay(3000).fadeOut();"        ,"\$('#statusLog').html('Ups!! Error');"        ,        null        )        ;    }

    public function getTemplateName()
    {
        return "OfertaBundle:Sitio:ayuda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  116 => 24,  106 => 20,  100 => 16,  90 => 15,  76 => 14,  65 => 13,  58 => 9,  52 => 7,  47 => 31,  45 => 7,  41 => 6,  36 => 5,  30 => 3,);
    }
}
