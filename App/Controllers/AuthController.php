<?php


namespace App\Controllers;

use WebFramework\AppController;
use WebFramework\Router;
use WebFramework\Request;

use App\Models\User;

class AuthController extends AppController
{
  public function register_view(Request $request)
  {
    return $this->render('auth/register.html.twig', ['base' => $request->base,
      'error' => $this->flashError]);
  }


  public function register(Request $request) { 
    $user = new User();
    $pdo = new AppController();

    echo "pdo <br>";
    var_dump($pdo);

    $sql = "INSERT INTO users (username, email, password) VALUES ('username', 'email', 'password')";
    $user = $pdo->prepare($sql);
    
    echo "<br><br>user<br>";
    var_dump($user);

    $user->setUsername($request->params['username']);
    $user->setEmail($request->params['email']);
    $user->setPassword($request->params['password']);

    $user->execute();

    var_dump($user);
    try {
      $user->validate();
    } catch (\Exception $e) {
      $this->flashError->set($e->getMessage());
      $this->redirect('/' . $request->base . 'auth/register', '302');
      return;
    }
    die();
  }



  public function login_view(Request $request)
  {
    return $this->render('auth/login.html.twig', ['base' => $request->base,
      'error' => $this->flashError]);
  }


  public function login(Request $request) { 
    $user = new User();
  
    $user->setEmail($request->params['email']);
    $user->setPassword($request->params['password']);

    try {
      $user->validate();
    } catch (\Exception $e) {
      $this->flashError->set($e->getMessage());
      $this->redirect('/' . $request->base . 'auth/login', '302');
      return;
    }

    echo "function login";

    var_dump($user);
    die();
  }

}
