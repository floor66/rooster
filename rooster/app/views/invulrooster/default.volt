<div class="page-header">
    <h1>Invulrooster</h1>
	<hr />
	<p>Stel hier in hoe een standaard week eruit ziet:</p>
	<div class="row" id="defaults">
	{% for day in days_enc %}
		{% set i = loop.index %}
		<div class="col">
			<strong>{{ day }}</strong>
			<hr />
			<a href="<?php echo $this->url->get("shifts/new/template/1/day/". $i ."/"); ?>">(+ Toevoegen)</a><br /><br />
			{% if shifts[i]|length > 0 %}
				{% for shift in shifts[i] %}
				<p>
					<strong>{{ shift.description }}</strong><br />
					{{ date("H:i", shift.timestamp_start) }} - {{ date("H:i", shift.timestamp_end) }}<br />
					{{ shift.num_users }} medewerker(s)<br />
					<a href="<?php echo $this->url->get("shifts/edit/". $shift->shift_id ."/template/". $shift->schedule_template_id ."/"); ?>">(Bewerk)</a> 
					<a href="<?php echo $this->url->get("shifts/delete/". $shift->shift_id ."/"); ?>">(Verwijder)</a>
				</p>
				<hr />
				{% endfor %}
			{% endif %}
		</div>
	{% endfor %}
	</div>
</div>


