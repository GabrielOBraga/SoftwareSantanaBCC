<?php
namespace  src\framework;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;


class Framework
{
    protected $matcher;
    protected $controllerResolver;
    /**
     * @var ArgumentResolver
     */
    protected  $argumentResolver;
    public  function __construct(Routing\Matcher\UrlMatcherInterface $matcher, ControllerResolver
    $controllerResolver, ArgumentResolver $argumentResolver)
    {
        $this->matcher= $matcher;
        $this->controllerResolver=$controllerResolver;
        $this->argumentResolver=$argumentResolver;
    }

    public function handle (Request $request){
        $session= new \Symfony\Component\HttpFoundation\Session\Session();
        $user= $session->get('user');
        $this->matcher->getContext()->fromRequest($request);
        try{
            $request->attributes->add($this->matcher->match($request->getPathInfo()));
            if (!$user){
                $request->attributes->add($this->matcher->match('/login'));
            }
        }catch (Routing\Exception\ResourceNotFoundException $e){
            $request->attributes->add($this->matcher->match('/index'));
        }catch (\Throwable $t){
            return new Response($t->getMessage(),500);
        }
        $controller=$this->controllerResolver->getController($request);
        $arguments= $this->argumentResolver->getArguments($request,$controller);
        return call_user_func_array($controller,$arguments);
    }
}