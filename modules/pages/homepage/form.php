<div class="box-search">
	<form action="search.php">
		<div class="field">
			<!-- <label for="need">What you need</label>
			<input type="text" id="need" placeholder="transportation, accommodation, gear"> -->
			<select name="" id="">
				<option value="" selected disabled>Select what you need</option>
				<option value="">Transportation</option>
				<option value="">Accommdation</option>
				<option value="">Gear</option>
			</select>
		</div>
		<div class="field">
			<label for="where">Destination, Address</label>
			<input type="text" id="where" placeholder="find here">
		</div>
		<div id="dateRange">
			<div class="field">
				<label for="date-form">Where</label>
				<input type="text" id="date-form" placeholder="From">
			</div>
			<div class="field">
				<label for="date-to" style="opacity: 0">a</label>
				<input type="text" id="date-to" placeholder="To">
			</div>
		</div>
		<div class="field btn-search">
			<button type="submit" id="search">
				<i class="zmdi zmdi-search"></i>
			</button>
		</div>
	</form>
</div>

