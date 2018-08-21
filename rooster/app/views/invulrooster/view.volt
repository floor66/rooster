<div class="page-header">
    <h1>Invulrooster: {{ schedule.name }}</h1>
	<em>Gemaakt op: {{ date("d-m-y H:i:s", schedule.created_on) }}</em>
	<hr />
	<h3>Het invulrooster voor <strong>{{ date("M Y", schedule.for_month) }}</strong></h3><br />
	Laten zien per week (weeknr. er bij), dag 1 t/m 7 met huidige shifts er in gezet<br /><br />
	<strong>Week 25:</strong><br /><br />
	<div class="row" id="defaults">
	{% for day in days_enc %}
		{% set i = loop.index %}
		<div class="col">
			<strong>{{ day }}</strong><br />
			<em>dd-mm-yy</em>
			<hr />
			<a href="<?php echo $this->url->get("shifts/new/schedule/". $schedule->schedule_id ."/day/". 691200 ."/"); ?>">(+ Toevoegen)</a><br /><br />
			{% if shifts[i]|length > 0 %}
				{% for shift in shifts[i] %}
				<p>
					<strong>{{ shift.description }}</strong><br />
					{{ date("H:i", shift.timestamp_start) }} - {{ date("H:i", shift.timestamp_end) }}<br />
					{{ shift.num_users }} medewerker(s)<br />
					<a href="<?php echo $this->url->get("shifts/edit/". $shift->shift_id ."/"); ?>">(Bewerken)</a>
				</p>
				<hr />
				{% endfor %}
			{% endif %}
		</div>
	{% endfor %}
	</div>
	<hr />
	<br />
	<a href="<?php echo $this->url->get("invulrooster/overview/"); ?>">Terug naar het overzicht</a>
</div>


