<?php

namespace handh\Http\Controllers;

use handh\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//

		return view('product.register');
	}

	public function viewMasive() {

		return view('product.masive');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) {
		//create

		dd($request->all());
		return view('product.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//

		\Excel::load($request->file_doc, function ($reader) {

				foreach ($reader->get() as $produc_exel) {

					$result = Product::where('code', (int) $produc_exel->code)->get()->first();
					if (isset($result)) {

						if ((int) $result->code == (int) $produc_exel->code) {

							$result->name = $produc_exel->description;
							$result->price = $produc_exel->price;
							$result->quantity = 1;
							$result->status = $produc_exel->status;
							$result->update();
						}

					} else {
						$product = new Product;

						$product->code = (int) $produc_exel->code;
						$product->name = $produc_exel->description;
						$product->price = $produc_exel->price;
						$product->quantity = 1;
						$product->status = $produc_exel->status;

						$product->save();
					}

				}
			});

		return view('product.masive')->with('message', 'the data was saved successly');
	}

	function see() {

		$datos = Product::get();

		return view('product.products')->with('products', $datos);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \handh\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \handh\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Product $product) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \handh\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Product $product) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \handh\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product) {
		//
	}

	public function load_products() {

		$datos = Product::get();

		return view('product.proceso')->with('products', $datos);
	}
}
