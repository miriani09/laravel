@extends('books.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->pageQuantity }}</td>
                <td>{{ $item->company }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <form action="{{ route('books.destroy',$item->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('books.show',$item->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('books.edit',$item->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection
