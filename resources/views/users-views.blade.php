@extends('layout.main')
@push('title')
    <title>Users List</title>
@endpush
@section('main-section')
    <div class="container ">
        <h6 class="text-right"><a class="text-danger" href="{{ url('/users/trash') }}">Trash List</a></h6>
        <table class="table border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->username }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <a href="">
                                @if ($customer->status == 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </a>
                        </td>
                        <td>{{ $customer->created_at }}</td>
                        <td>
                            <a href="{{ route('users.edit', ['id' => $customer->id]) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                            <a class="ml-3"href="{{ route('users.delete', ['id' => $customer->id]) }}">
                                <button type="button" class="btn btn-warning">Trash</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
