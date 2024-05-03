@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">

				<h3>{{ __('List books') }}</h3>
				<br>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">{{ __('id') }}</th>
							<th scope="col">{{ __('Title') }}</th>
							<th scope="col">{{ __('Price') }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($books as $book)
						<tr>
							<td>{{ $book->id }}</td>
							<td>{{ $book->name }}</td>
							<td>{{ $book->price }}$</td>
							<td>
								<form action="{{ route('books.destroy', $book->id) }}" method="POST">
									@csrf
									@method('DELETE')
								
									<button type="submit" class="btn btn-outline-danger btn-sm">
										{{ __('delete') }}
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>
@endsection
