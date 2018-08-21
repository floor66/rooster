<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }
	
	public function loginAction()
	{		
		if($this->request->isPost() && !$this->session->has("user")) {
			$auth_code = $this->request->getPost("auth_code");
			$success = false;
			
			if(strlen($auth_code) > 0) {
				$auth_code_md5 = md5($auth_code);
				
				$user = Users::query()
					->where("auth_code = :auth_code:")
					->bind([
						"auth_code" => $auth_code_md5
					])
					->execute();
				
				if(count($user) == 1) {
					$this->session->set("user", $user[0]->nickname);
					$this->view->setVar("user_loggedin", true);
					$success = true;
					
					$this->response->redirect("home/");
				}
			}
			
			if($success === false) {
				$this->view->setVar("error", "Inloggen is mislukt. Controleer je code en probeer opnieuw.");
			}
		} else {
			$this->response->redirect("home/");
		}
	}

	public function logoutAction()
	{
		$this->session->destroy();
		$this->response->redirect("home/");
	}
}

