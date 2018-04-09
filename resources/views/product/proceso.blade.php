@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Agustin Proceso</span>

          <form class="col 12" method="POST" action="{{ url('register-product-masive') }}"  enctype="multipart/form-data">
                <div class="row">

                  <ul class="collapsible">

                    <li id="">
                      <div class="collapsible-header"><i class="material-icons">local_offer</i><p>Quantity of products</p>&nbsp;
:&nbsp;
<strong id="total_pro">0</strong>
                        <span class="badge">Total price : $<strong id="total_pri">0</strong> </span>
                      </div>

                    </li>
                  </ul>


                </div>

              <div class="row">

                      <button type="reset" class="btn blue lighten-1 waves-effect waves-light ">
                                    PDF<i class="material-icons right">picture_as_pdf</i></button>
                      <button type="reset" class="btn blue lighten-1 waves-effect waves-light ">
                                    Cancelar<i class="material-icons right">cancel</i></button>
              </div>


          </form>


        <table class="responsive-table hover" >
          	<caption>This is the table with DATATABLE NICE</caption>
          	<thead>
          		<tr>
          			<th>#</th>
          			<th>Code</th>
          			<th>Description</th>
          			<th>Price</th>
          			<th>Status</th>
                <th></th>
          		</tr>
          	</thead>
          	<tbody>

              @if( isset($products) )
              @foreach( $products as $key => $element)

                <tr >

          			<td>{{ intval($key+1 ) }}</td>
          			<td class="code_product" >{{$element->code }}</td>
          			<td class="name_product" >{{$element->name }}</td>
          			<td>{{$element->price }}</td>
          			<td>{{$element->status }}</td>
                <td>
                  @if($element->status == 'yes')
                  <p>
                      <label>
                        <input class="get_product pulse" id="{{ $element->id }}" type="checkbox" title="add" />
                        <span></span>
                        <span class="get_price" style="display:none">{{$element->price }}</span>
                      </label>
                  </p>
                  @endif
                </td>
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

    <script src="{{ asset('process/process.js') }}" type="text/javascript"></script>

@endsection