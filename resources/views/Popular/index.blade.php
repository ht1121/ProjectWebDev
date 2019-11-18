@extends('layout/main')

@section('title', 'Popular')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Popular Food This Week</h1>

          <table class="table">
          	<thead class="bg-warning">
          		<tr>
	          		<th scope="col">No</th>
	          		<th scope="col">Restaurant</th>
	          		<th scope="col">Food</th>
	          		<th scope="col">Show</th>
          		</tr>
          	</thead>
          	<tbody>
          		@foreach($popular as $f)
          		<tr>
          			<th scope="row">{{ $loop->iteration }}</th>

          			<td>{{ $f->restaurant }}</td>
          			<td>{{ $f->food }}</td>
          			<td>
          				<a href="" class="badge badge-info">Check</a>
          			</td>
          		@endforeach
          		</tr>
          	</tbody>
          </table>
        </div>
      </div>
    </div>

@endsection