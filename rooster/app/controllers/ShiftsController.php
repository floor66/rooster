<?php

class ShiftsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function newAction()
    {
		$day = $this->dispatcher->getParam("day");
		$schedule_template_id = $this->dispatcher->getParam("schedule_template_id");
		$schedule_id = $this->dispatcher->getParam("schedule_id");
		$for_timestamp = $this->dispatcher->getParam("for_timestamp");
		
		$this->view->setVar("for_timestamp", $for_timestamp);
		$this->view->setVar("schedule_id", $schedule_id);

		if($day !== null) {
			$this->view->setVar("tpl", true);
			
			$days = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"];
			$this->view->setVar("day", $day);
			$this->view->setVar("day_name", $days[$day - 1]);
		} else {
			$this->view->setVar("tpl", false);
		}

		if($this->request->isPost()) {
			if($day !== null) {
				//handle adding to tpl
				if($schedule_template_id !== null) {
					$success = true;
					$desc = $this->request->getPost("description");
					$num_users = $this->request->getPost("num_users");
					$time_start_h = $this->request->getPost("time_start_h");
					$time_start_m = $this->request->getPost("time_start_m");
					$time_finish_h = $this->request->getPost("time_finish_h");
					$time_finish_m = $this->request->getPost("time_finish_m");
					
					if(strlen($desc) == 0) {
						//too short desc error
						$success = false;
					}
					
					if(!is_numeric($num_users)) {
						//num_users invalid
						$success = false;
					}
					
					if(!is_numeric($time_start_h) || $time_start_h < 0 || $time_start_h > 24 || 
						!is_numeric($time_start_m) || $time_start_m < 0 || $time_start_m > 60) {
						//invalid start_time
						$success = false;
					}
					
					if(!is_numeric($time_finish_h) || $time_finish_h < 0 || $time_finish_h > 24 ||
						!is_numeric($time_finish_m) || $time_finish_m < 0 || $time_finish_m > 60) {
						//invalid start_time
						$success = false;
					}
					
					if($success === true) {
						$new_shift = new Shifts();
						
						$ts_modified = 345600 + (($day - 1) * (24 * 60 * 60));
						
						$new_shift->setDescription($desc);
						$new_shift->setScheduleTemplateId($schedule_template_id);
						$new_shift->setNumUsers((int) $num_users);
						$new_shift->setDate($ts_modified); //generate a date on day $day
						$new_shift->setTimestampStart($ts_modified + (60 * 60 * $time_start_h) + (60 * $time_start_m));
						$new_shift->setTimestampEnd($ts_modified + (60 * 60 * $time_finish_h) + (60 * $time_finish_m));
						
						$new_shift->save();
					}
					
					$this->response->redirect("invulrooster/default");
				} else {
					//No tplid error
				}
			} else {
				//handle adding to normal schedule
				
				$this->response->redirect("invulrooster/view/". $schedule_id ."/");
			}
		}
    }
	
	public function editAction()
	{
		$shift_id = $this->dispatcher->getParam("shift_id");
		$schedule_template_id = $this->dispatcher->getParam("schedule_template_id");
		$this->view->setVar("tpl", $schedule_template_id !== null);
		
		if($shift_id !== null) {
			$shift = Shifts::findfirst($shift_id);
			
			if(!$shift) {
				//unknown shift_id err
				$this->response->redirect("invulrooster/");
			} else {
				if($schedule_template_id === null && $shift->schedule_template_id !== null) {
					$this->response->redirect("invulrooster/");
				} elseif($schedule_template_id !== null && $shift->schedule_template_id === null) {
					$this->response->redirect("invulrooster/");
				} else {
					$this->view->setVar("shift", $shift);
					
					if($this->request->isPost()) {
						//handle editing
						$success = true;
						$desc = $this->request->getPost("description");
						$num_users = $this->request->getPost("num_users");
						$time_start_h = $this->request->getPost("time_start_h");
						$time_start_m = $this->request->getPost("time_start_m");
						$time_finish_h = $this->request->getPost("time_finish_h");
						$time_finish_m = $this->request->getPost("time_finish_m");
						
						if(strlen($desc) == 0) {
							//too short desc error
							$success = false;
						}
						
						if(!is_numeric($num_users)) {
							//num_users invalid
							$success = false;
						}
						
						if(!is_numeric($time_start_h) || $time_start_h < 0 || $time_start_h > 24 || 
							!is_numeric($time_start_m) || $time_start_m < 0 || $time_start_m > 60) {
							//invalid start_time
							$success = false;
						}
						
						if(!is_numeric($time_finish_h) || $time_finish_h < 0 || $time_finish_h > 24 ||
							!is_numeric($time_finish_m) || $time_finish_m < 0 || $time_finish_m > 60) {
							//invalid start_time
							$success = false;
						}
						
						if($success === true) {
							$ts_base = $shift->getDate();
							
							$shift->setDescription($desc);
							$shift->setNumUsers((int) $num_users);
							$shift->setTimestampStart($ts_base + (60 * 60 * $time_start_h) + (60 * $time_start_m));
							$shift->setTimestampEnd($ts_base + (60 * 60 * $time_finish_h) + (60 * $time_finish_m));
							
							$shift->save();
							if($schedule_template_id !== null) {
								$this->response->redirect("invulrooster/default/");
							} else {
								$this->response->redirect("invulrooster/view/". $shift->schedule_id ."/");
							}
						}
					}
				}
			}
		} else {
			//no shift_id err
			$this->response->redirect("invulrooster/");
		}
	}
	
	public function deleteAction()
	{
		
	}
}

