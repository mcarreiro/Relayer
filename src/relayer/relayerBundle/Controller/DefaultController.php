<?php

namespace relayer\relayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
  
    public $urls = array('http://zepfilms.com/ebds','http://simpsonsfb.com.ar','http://zepfilms.com');
    
    public function indexAction()
    {
        return $this->render('relayerrelayerBundle:Default:index.html.twig', array());
    }
    
    public function projectsAction()
    {
        return $this->render('relayerrelayerBundle:Default:proyectos.html.twig', array('images' => $this->urls));
    }
    
    public function contactAction()
    {
        return $this->render('relayerrelayerBundle:Default:contacto.html.twig', array());
    }
    
    public function servicesAction()
    {
        return $this->render('relayerrelayerBundle:Default:servicios_nuevo.html.twig', array());
    }
    

    /**
     * sendEmailAction
     * 
     * @param mixed \Request Description.
     *
     * @access public
     *
     * @return mixed Value.
     */
    public function sendEmailAction(Request $request)
    {
        try {
                    $body = $request->request->get('contact_message');
                    $name = $request->request->get('contact_who');
                    $email = $request->request->get('contact_sendto');
                    $subject = $request->request->get('contact_subject');

            $message = \Swift_Message::newInstance()
                ->setSubject('Relayer.com.ar: '.$subject)
                ->setFrom($email)
                ->setTo(array('martin301290@gmail.com','zepfilms@gmail.com','consultas@relayer.com.ar'))
                ->setBody('Nombre De Contacto: '.$name.'. Manda mensaje: '.$body);

            $this->get('mailer')->send($message);
        } catch(\Exception $e) {
            throw $e;
        }
	return new Response();
    }
}