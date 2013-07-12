<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SitioController extends Controller {

    
    
    public function estaticaAction($pagina) {
        
        
         \YsJQuery::useComponent(\YsJQueryConstant::COMPONENT_JQTREE);

    $root  = new \YsTreeNode('rootId');

    $node0 = new \YsTreeNode('node0', 'Node 0', $root);
    $node1 = new \YsTreeNode('node1', 'Node 1', $root);

    $node00 = new \YsTreeNode('node00', 'Node 00', $node0);
    $node01 = new \YsTreeNode('node01', 'Node 01', $node0);

    $node000 = new \YsTreeNode('node000', 'Node 000', $node00);
    $node001 = new \YsTreeNode('node001', 'Node 001', $node00);

    $node10 = new \YsTreeNode('node10', 'Node 10', $node1);
    $node11 = new \YsTreeNode('node11', 'Node 11', $node1);

    $tree = new \YsTree('treeId',$root);
//    return array('tree' => $tree);
    
            return $this->render('OfertaBundle:Sitio:' . $pagina . '.html.twig',array('tree' => $tree) );
              
//        return $this->render('OfertaBundle:Sitio:' . $pagina . '.html.twig',array('tags' =>  array("ActionScript","AppleScript","Asp",
//        "BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang",
//        "Fortran","Groovy","Haskell","Java","JavaScript","Lisp",
//        "Perl","PHP","Python","Ruby","Scala","Scheme")) );
        
    }
    
    public function HolaMundoAction(){
       $request = $this->getRequest();
       $nombre = $request->request->get('name');
       $apellido = $request->request->get('apellido');
       return new Response('Hola '.$nombre." ".$apellido);
    }

}

?>
