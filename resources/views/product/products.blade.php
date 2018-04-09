@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Products</span>

          <table class="responsive-table hover order-column  cell-border" >
          	<caption>This is the table with DATATABLE NICE</caption>
          	<thead>
          		<tr>
          			<th>#</th>
          			<th>Code</th>
          			<th>Description</th>
          			<th>Price</th>
          			<th>Status</th>
          		</tr>
          	</thead>
          	<tbody>
          		@if( isset($products) )
          		@foreach( $products as $key => $element)
	          		@if($element->status == 'no')
	          			<tr class="purple lighten-4">
	          		@else
	          		<tr >
	          		@endif

          			<td >{{ intval($key+1 ) }}</td>
          			<td>{{$element->code }}</td>
          			<td>{{$element->name }}</td>
          			<td>{{$element->price }}</td>
          			<td>{{$element->status }}</td>
          		</tr>
          		@endforeach
          		@else
          		<tr>
          			<td colspan="5">No hay Rergistros</td>
          		</tr>
          		@endif
          	</tbody>
          </table>
        </div>
      </div>
    </div>

@endsection