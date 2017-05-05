@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Uploads
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($uploads as $upload)
                                    <tr>
                                        <td>{{ $upload->id }}</td>
                                        <td class="table-actions">
                                            <img src="{{ $upload->url }}" style="width: 100px;" />
                                        </td>
                                        <td class="table-actions">
                                            <a class="delete" href="{{ URL::route('uploads.destroy', $upload->id) }}">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="text-center"> 
                            {{ $uploads->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
