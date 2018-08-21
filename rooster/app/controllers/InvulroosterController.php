<?php

class InvulroosterController extends ControllerBase
{

    public function indexAction()
    {
		$this->response->redirect("invulrooster/overview/");
    }
	
	public function overviewAction()
	{
		$page = $this->dispatcher->getParam("page");
		
		if($page == null) {
			$page = 1;
		}
		
		$schedules = Schedules::Query()
			->orderBy("created_on")
			->execute();
		
		$paginator = new Phalcon\Paginator\Adapter\Model(
			[
				"data" => $schedules,
				"limit" => 15,
				"page" => $page
			]
		);
		
		$this->view->setVar("page", $paginator->getPaginate());
	}
	
	public function viewAction()
	{
		$schedule_id = $this->dispatcher->getParam("schedule_id");
		
		if($schedule_id == null || !is_numeric($schedule_id)) {
			$this->response->redirect("invulrooster/overview/");
		}
		
		$schedule = Schedules::findFirst($schedule_id);
		$shifts = Shifts::Query()
			->where("schedule_id = :sid:")
			->bind([
				"sid" => $schedule_id
			])
			->execute();
		
		$days = [1, 2, 3, 4, 5, 6, 7];
		$days_enc = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];
		$per_day = [1 => [], 2 => [], 3 => [], 4 => [], 5 => [], 6 => [], 7 => []];
		$seen = [];
		
		foreach($days as $day) {
			foreach($shifts as $shift) {
				if(in_array($shift->shift_id, $seen)) {
					continue;
				}
				
				$shift_day = date("N", $shift->timestamp_start);
				
				if($shift_day == $day) {
					$seen[] = $shift->shift_id;
					$per_day[$day][] = $shift;
				}
			}
		}
		
		$this->view->setVar("days", $days);
		$this->view->setVar("days_enc", $days_enc);
		$this->view->setVar("shifts", $per_day);
		$this->view->setVar("schedule", $schedule);
	}
	
	public function defaultAction()
	{
		$shifts = Shifts::Query()
			->where("schedule_template_id IS NOT NULL")
			->execute();
		
		$days = [1, 2, 3, 4, 5, 6, 7];
		$days_enc = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];
		$per_day = [1 => [], 2 => [], 3 => [], 4 => [], 5 => [], 6 => [], 7 => []];
		$seen = [];
		
		foreach($days as $day) {
			foreach($shifts as $shift) {
				if(in_array($shift->shift_id, $seen)) {
					continue;
				}
				
				$shift_day = date("N", $shift->timestamp_start);
				
				if($shift_day == $day) {
					$seen[] = $shift->shift_id;
					$per_day[$day][] = $shift;
				}
			}
		}
		
		$this->view->setVar("days", $days);
		$this->view->setVar("days_enc", $days_enc);
		$this->view->setVar("shifts", $per_day);
	}

}

