@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Check-ins
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($checkins as $checkin)
                                    <tr>
                                        <td>{{ $checkin->latitude }}</td>
                                        <td>{{ $checkin->longitude }}</td>
                                        <td class="table-actions">{{ $checkin->address }}</td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="text-center"> 
                            {{ $checkins->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
