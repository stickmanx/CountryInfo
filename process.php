<?php

	include_once("country.php");
	
	class Process {

		var $country;

		public function __construct() {

			$this->country = new Country();

			if(isset($_POST['action']) and $_POST['action'] == 'country_display') {
				$this->queryCountryDropdown();
			} elseif (isset($_POST['action']) and $_POST['action'] == 'country_select') {
				$this->countrySelect();
			}
		}
	
		// get country names and code to build dropdown list
		function queryCountryDropdown() {
			$countries = $this->country->all_countries();

			$selection_html = "
				<form id='country_select' action='process.php' method='post'>
					<input type='hidden' name='action' value='country_select'/>
					<select name='Country'>
				";
			foreach($countries as $country) {
				$selection_html .= "
						<option value='".utf8_encode($country['Code'])."''>".utf8_encode($country['Name'])."</option>
				";
			}
			$selection_html .= "
					</select>
					<input type='submit' value='Check Info'/>
				</form>
				";

			$data['html'] = $selection_html;
			echo json_encode($data);
		}

		// get country info and return html
		function countrySelect() {
			$country_info = $this->country->country_info($_POST['Country']);

			$country_info_display_html = "
				<ul>
					<li>Country: ".utf8_encode($country_info['Name'])."</li>
					<li>Continent: ".$country_info['Continent']."</li>
					<li>Region: ".$country_info['Region']."</li>
					<li>Population: ".$country_info['Population']."</li>
					<li>Life Expectancy: ".$country_info['LifeExpectancy']."</li>
					<li>Government Form: ".$country_info['GovernmentForm']."</li>
				</ul>
			";

			$data['html'] = $country_info_display_html;
			echo json_encode($data);
		}

	}

	$process = new Process();
?>