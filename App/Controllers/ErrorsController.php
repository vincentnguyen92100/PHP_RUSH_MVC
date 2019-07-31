<?php

namespace App\Controllers;

use WebFramework\AppController;
use WebFramework\Router;
use WebFramework\Request;

use App\Models\User;

class ErrorsController extends AppController
{
  public function error_404(Request $request)
  {
    return $this->render('errors/404.html.twig');
  }
}
