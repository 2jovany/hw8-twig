<?php

namespace LetsTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function showAction()
    {
    	$menu = array();
    	for ($i = 0; $i <=7; $i++){
    		$menu[$i]['title'] = 'title_'.$i;
			$menu[$i]['link'] = '/link_'.$i;
	    }
	    $foot_menu = array();
	    for ($i = 0; $i <=7; $i++){
		    $foot_menu[$i]['title'] = 'foot_title_'.$i;
		    $foot_menu[$i]['link'] = '/foot_link_'.$i;
	    }
	    return $this->render('LetsTwigBundle:Web:index.html.twig', array(
	    	'menu' => $menu,
		    'foot_menu' => $foot_menu,
	    ));
    }
}
