<?php namespace App;

use Illuminate\Html\HtmlFacade as Html;

class Assets {

	public static function styles($load=array())
	{
		$string       = '';
		$autocomplete = 'autocomplete.css';
		$date         = 'plugins/datepicker3.css';

		foreach ($load as $styles) {
			$string .= Html::style('assets/css/' . $$styles);
		}

		return $string;
	}

	public static function scripts($load=array())
	{
		$string       = '';
		$autocomplete = 'autocomplete.js';
		$date         = 'datepicker/bootstrap-datepicker.js';

		foreach ($load as $scripts => $script) {
			$string .= Html::script('assets/js/' . $$scripts);
		}

		$string .= '<script language="javascript" type="text/javascript">$(document).ready(function() {';

		if (array_key_exists('autocomplete', $load)) {
			$selector = $load['autocomplete'];
			$string .= '$("#' . $selector . '").autocomplete();';
		}

		if (array_key_exists('date', $load)) {
			$date    = explode('|', $load['date']);
			foreach ($date as $selector) {
				$string .= '
					$("#' . $selector . '").datepicker({
						format: "yyyy/mm/dd",
						todayBtn: "linked",
						autoclose: true
					});
				';
			}
		}

		$string .= '}); </script>';

		return $string;
	}

}
