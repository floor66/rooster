<div class="page-header">
    <h1>Dienst bewerken</h1>
	<hr />
	{% if tpl === false %}
	<p>Datum: <strong>{{ date("d-m-Y", shift.date) }}</strong></p>
	{% endif %}
	<form method="post" action="">
		<label for="description">Omschrijving:</label>
		<input name="description" type="input" placeholder="Bijv. 'Snijzaal ochtend'" value="{{ shift.description }}" class="form-control" style="width: 25%;" />
		<label for="description">Aantal medewerkers:</label>
		<input name="num_users" type="number" min="0" value="{{ shift.num_users }}" class="form-control" step="1" style="width: 5%;" />
		<br />
		<label>Starttijd (HH:MM):</label>
		<div class="input-group" style="width: 10%;">
			<input name="time_start_h" id="time_start_h" value="{{ date("H", shift.timestamp_start) }}" type="number" data-next="time_start_m" maxlength="2" min="0" max="24" class="form-control autojump" />
			<input name="time_start_m" id="time_start_m" value="{{ date("i", shift.timestamp_start) }}" type="number" data-next="time_finish_h" maxlength="2" min="0" max="60" class="form-control autojump" />
		</div>
		<label>Eindtijd (HH:MM):</label>
		<div class="input-group" style="width: 10%;">
			<input name="time_finish_h" id="time_finish_h" value="{{ date("H", shift.timestamp_end) }}" type="number" data-next="time_finish_m" maxlength="2" min="0" max="24" class="form-control autojump" />
			<input name="time_finish_m" id="time_finish_m" value="{{ date("i", shift.timestamp_end) }}" type="number" maxlength="2" min="0" max="60" class="form-control autojump" />
		</div>
		<br />
		<button type="submit" class="btn btn-primary">Bijwerken</button>
	</form>
	{% if tpl === true %}
	<br />
	<p>
		<a href="<?php echo $this->url->get("invulrooster/default/"); ?>">Terug naar het overzicht van de standaard diensten</a>
	</p>
	{% else %}
	<br />
	<p>
		<a href="<?php echo $this->url->get("invulrooster/view/". $shift->schedule_id ."/"); ?>">Terug naar het rooster</a>
	</p>
	{% endif %}
</div>


