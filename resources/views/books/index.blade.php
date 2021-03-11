@extends('books.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="float-md-left">
                <h3>Laravel 8 CRUD example</h3>
            </div>
            <div class="float-md-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Create a book</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['author'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['updated_at'] }}</td>
                    <td>
                        <form action="{{ route('books.destroy',$item->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('books.show',$item->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('books.edit',$item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data->links() !!}
@endsection
