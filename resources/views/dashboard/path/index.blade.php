@extends('dashboard.layouts.main')

@section('container')
<h1 class="mt-4">Path</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard/Path</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-10 ">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="col-sm-2">
                <a href="/dashboard/path/create" class="btn btn-primary col-12"><i class="fas fa-plus-circle"></i>
                    Add Data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paths as $path)
                <tr>
                    <td>{{$loop->iteration}}.</td>
                    <td>{{$path->name}}</td>
                    <td>{{$path->slug}}</td>
                    <td><img src="{{asset('storage/'.$path->image)}}" alt="{{$path->name}}" width="50" class="bg-dark rounded-2"></td>
                    <td>
                        <a href="/dashboard/path/{{$path->slug}}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                        <form action="/dashboard/path/{{$path->slug}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Are your sure???')" class="badge bg-danger border-0"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
