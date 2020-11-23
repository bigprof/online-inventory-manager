<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function categories_init(&$options, $memberInfo, &$args){
		/* Inserted by Search Page Maker for AppGini on 2020-11-23 11:04:54 */
		$options->FilterPage = 'hooks/categories_filter.php';
		/* End of Search Page Maker for AppGini code */


		return TRUE;
	}

	function categories_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function categories_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function categories_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function categories_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function categories_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function categories_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function categories_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function categories_after_delete($selectedID, $memberInfo, &$args){

	}

	function categories_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function categories_csv($query, $memberInfo, &$args){

		return $query;
	}
	function categories_batch_actions(&$args){

		return array();
	}
