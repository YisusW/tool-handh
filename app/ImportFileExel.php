<?php

namespace handh;

use Maatwebsite\Excel\Facades\Excel;

class ImportFileExel extends Excel {
	//
	public function getFile() {

		return public_path().'/books.csv';

	}

	public function getFilters() {

		return [
			'chunk'
		];
	}

}
