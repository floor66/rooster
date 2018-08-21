<div class="page-header">
    <h1>Invulrooster</h1>
	<hr />
	<p>Overzicht van alle invulroosters:</p>
	<table style="width: 50%;" border="1">
		<tr style="text-align: center;">
			<th>Naam</th><th>Voor maand/jaar</th><th>Gemaakt op</th><th>Afgesloten op</th><th>Details</th>
		</tr>
		{% for schedule in page.items %}
		<tr>
			<td>{{ schedule.name }}</td>
			<td>{{ date("M Y", schedule.for_month) }}</td>
			<td>{{ date("d-m-y H:i:s", schedule.created_on) }}</td>
			{% if schedule.finalized_on is defined %}
			<td>{{ schedule.finalized_on }}</td>
			{% else %}
			<td>Staat nog open</td>
			{% endif %}
			<td><a href="<?php echo $this->url->get("invulrooster/view/". $schedule->schedule_id ."/"); ?>">Bekijken</a></td>
		</tr>
		{% endfor %}
	</table>
	<br />
	<p>
		Pagina: <a href="<?php echo $this->url->get("invulrooster/overview/page/". $page->before ."/"); ?>">&lt;&lt;</a> 
		<strong>{{ page.current }}</strong> / {{ page.total_pages }} 
		<a href="<?php echo $this->url->get("invulrooster/overview/page/". $page->next ."/"); ?>">&gt;&gt;</a>
		<br />
	</p>
</div>


