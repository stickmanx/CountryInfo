<?php

	include_once("connection.php");
	
	class Country {

		var $connection;

		public function __construct() {

			$this->connection = new Database();
		}

		// returns all countries
		function all_countries() {
			$query = "SELECT Name, Code FROM country";
			return $this->connection->fetch_all($query);
		}

		// return country info based on country code
		function country_info($code) {
			$country_info_query = "SELECT Name, Continent, Region, Population, LifeExpectancy, GovernmentForm  FROM country WHERE Code = '".$code."'";

			return $this->connection->fetch_record($country_info_query);
		}
	}
?>