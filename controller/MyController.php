<?php


namespace Services\Content\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller
{
    public function foo()
    {
        return new Response('FOO from content');
    }
}