<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('product', function (Blueprint $table) {
				//
				$table->increments('id');
				$table->bigInteger('code');
				$table->string('name');
				$table->decimal('price', 8, 2);
				$table->integer('quantity');
				$table->string('status');
				$table->integer('weight')->nullable();
				$table->integer('size')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
		Schema::dropIfExists('product');
	}
}
