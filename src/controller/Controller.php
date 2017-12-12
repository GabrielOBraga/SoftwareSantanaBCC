<?php
declare (strict_types=1);
namespace  home\controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use home\enterprise\cadastroProdutos\produto;

use home\enterprise\cadastroFuncionario\Funcionarios;
use home\enterprise\cadastroServiceCar\servicosCar;
use home\enterprise\contactCliente\webmail;
use home\errors\InvalidArgument;

/**
 * Class Controller
 * @package home\controller
 */
class Controller
{

    /**
     * @var
     */
    protected $newLogin;
    /**
     * @var
     */
    protected  $session;
    /**
     * @var
     */
    protected $produtos;

    /**
     * @param Request $request
     * @return Response
     */

    public function indexAction (Request $request){
        $this->session= new Session();
        if ( $request->getMethod()=='POST'){
        }
        ob_start();
        include sprintf(__DIR__ . '/../view/index.php');
        return new Response( ob_get_clean());

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function cFuncionarioAction (Request $request){
        $error = '';
        $this->session = new Session();
        $permission = ['admin' , 'gabriel'];
        $user = $this->session->get('user');
        if ( !in_array($user,$permission)){
            //add flash message
            return new RedirectResponse('index');
        }
        if ( $request->getMethod()=='POST')
        {
            try {

                $funcionario = new Funcionarios($request->request->get('name') ,$request->request->get('cpf'),$request->request->get('rua') , $request->request->get('telefone'));
                $funcionario->setEmail($request->request->get('email'));
                $funcionario->setNascimento($request->request->get('nascimento'));
                $funcionario->setCep($request->request->get('cep'));
                $funcionario->save();

                $this->session->set('Funcionario', $funcionario);
                return new RedirectResponse (__DIR__ . '/../view/adm.php');
            }
            catch ( InvalidArgument $e){
                $error=$e->getMessage();
                $this->session->getFlashBag()->add('info',$e->getMessage());
            }
            catch ( \Throwable $e ){
                $error= 'Erro dados nao informados corretamente';
            }
        }
        ob_start();
        include sprintf(__DIR__ . '/../view/cadastrofuncionario.php');
        return new Response( ob_get_clean());

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function admAction (Request $request){
        $this->session = new Session();
        $permission = ['admin' , 'gabriel'];
        $permission2 = ['igor'];
        $user = $this->session->get('user');


        if ( in_array($user,$permission2)){
            //add flash message
            return new RedirectResponse('sistema');
        }

        if ( !in_array($user,$permission)){
            //add flash message
            return new RedirectResponse('index');
        }

        if ( $request->getMethod()=='POST'){
        }
        ob_start();
        include sprintf(__DIR__ . '/../view/adm.php');
        return new Response( ob_get_clean());

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function produtosAction (Request $request){

        $permission = ['gabriel','igor'];
        $this->session= new Session();
        $user = $this->session->get('user');
        if ( !in_array($user,$permission)){
            //add flash message
            return new RedirectResponse('index');
        }

        if ( $request->getMethod()=='POST'){
            try{
                $produto = new Produto($request->request->get('descricao') , $request->request->get('ref') , $request->request->get('valor'));
                $produto->save();
            }
            catch ( InvalidArgument $e){
                $error=$e->getMessage();
            }
            catch ( \Throwable $e ){
                $error= 'Erro dados nao informados corretamente';
            }
        }
        ob_start();
        include sprintf(__DIR__ . '/../view/produtos.php');
        return new Response( ob_get_clean());

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function sistemaAction (Request $request){
        $this->session= new Session();
        $permission = ['igor'];
        $user = $this->session->get('user');
        if ( !in_array($user,$permission)){
            //add flash message
            return new RedirectResponse('index');
        }

        if ( $request->getMethod()=='POST'){
        }
        ob_start();
        include sprintf(__DIR__ . '/../view/sistema.php');
        return new Response( ob_get_clean());

    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function  loginAction ( Request $request)
    {
        if ( $request->getMethod()==  'POST'){

            $users = ['igor'=>'73f6329219d4994f2acb7ac7280f6c18da346aefee01b7749596daf1cd01b4e8',
                'user'=>'08541a1932cfd4240a0c60cc03b46eadd9c3e369cad32c0789d9c795062bb6a0'];

            $usersadmin = ['admin'=>'e0c7dd217f6cd20d8f729e82c67d1382a078b9a5b94199e87bd4d424dec18dc1',
                'gabriel'=>'c86567fd32867a35109099eb2ccd2058eb6b28b7632bb8c217fa965060f12bb9'];


            foreach ($users as $login =>$pwd) {
                if( $request->request->get('uname')== $login &&
                    hash("sha256",$request->request->get('psw') . 'OiAlessandro')==$pwd ) //hash alterado
                {
                    $this->session = new Session();
                    $this->session->set('user',$login);
                    return new RedirectResponse('sistema');
                }

            }
            foreach ($usersadmin as $login =>$pwd) {
                if ($request->request->get('uname') == $login &&
                    hash("sha256", $request->request->get('psw') . 'OiAlessandro') == $pwd   //hash alterado
                ) {
                    $this->session = new Session();
                    $this->session->set('user', $login);
                    return new RedirectResponse('adm');
                }
            }

            $msg = new FlashMessages();
            $msg->error("Nome de usuário e/ou senha incorretos.");
            $msg->display();

        }
        return $this->render_view('login');
    }

    /**
     * @param string $route
     * @return Response
     */

    public function render_view(string $route){
        ob_start();
        include sprintf(__DIR__."/../view/$route.php");
        return new Response (ob_get_clean());
    }

}
