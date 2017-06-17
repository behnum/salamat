@extends('layouts.app')

@section('content')

<!-- Modals -->
@include('includes.modals')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <!-- <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> This is an early Beta version! Things might go wonky.
            </div> -->

            <h1>
                🏃🏻 {{ Auth::user()->name }}

                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#addNewCollapse" aria-expanded="false" aria-controls="addNewCollapse">
                  <i class="glyphicon glyphicon-plus"></i> Add
                </button>
            </h1>
            <hr>
            @if(session('message'))
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong><hr>
                {{ session('message') }}
              </div>
            @endif
            @if($errors->any())
              <div class="alert alert-danger" role="alert">
                <strong>Error!</strong>
                <hr>
                <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            @if($errors->any())
              <div class="" id="addNewCollapse">
            @else
              <div class="collapse" id="addNewCollapse">
            @endif

                  <div class="panel panel-default">
                      <div class="panel-heading">Add a Record</div>

                      <div class="panel-body">
                        <form action="save" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="datePicker" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                <input name="date" type="text" class="form-control" id="datePicker" placeholder="Date" value="{{ old('date') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputActiveCal" class="col-sm-2 control-label">Active Cal</label>
                                <div class="col-sm-10">
                                <input name="active_cal" type="text" class="form-control" id="inputActiveCal" placeholder="Active Cal" value="{{ old('active_cal') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAvgPace" class="col-sm-2 control-label">Avg. Pace</label>
                                <div class="col-sm-10">
                                <input name="avg_pace" type="text" class="form-control" id="inputAvgPace" placeholder="Avg. Pace" value="{{ old('avg_pace') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDistance" class="col-sm-2 control-label">Distance</label>
                                <div class="col-sm-10">
                                <input name="distance" type="text" class="form-control" id="inputDistance" placeholder="Distance" value="{{ old('distance') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputWeight" class="col-sm-2 control-label">Weight</label>
                                <div class="col-sm-10">
                                <input name="weight" type="text" class="form-control" id="inputWeight" placeholder="Weight" value="{{ old('weight') }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Save</button>
                        </form>
                      </div>
                  </div>

                </div>

            <br>

            <div class="panel panel-default">
                <div class="panel-heading">🛎 Quick Glance</div>

                @if(isset($stats))
                    <div class="panel-body">
                        <i class="glyphicon glyphicon-leaf"></i>
                        You ran for <b>{{ $stats['totalDist'] }}</b> kilometers in <b>{{ $stats['itemsCount'] }}</b> sessions.<br>
                        <i class="glyphicon glyphicon-gift"></i>
                        The total number of active calories is: <b>{{ $stats['activeCal'] }}</b> Cal.<br>
                    </div>
                @else
                    <div class="panel-body">No data to display.</div>
                @endif
            </div>
            @if(isset($data))
            <div class="panel panel-default">
                <div class="panel-heading">Log</div>

                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Active Cal</th>
                                <th>Avg. Pace</th>
                                <th>Distance</th>
                                <th>Weight</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <th>{{ $item['date'] }}</th>
                                <th>{{ $item['active_cal'] }}</th>
                                <th>{{ $item['avg_pace'] }}/KM</th>
                                <th>{{ $item['distance'] }} KM</th>
                                <th>{{ $item['weight'] }} KG</th>
                                <th>
                                    <!-- <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-wrench"></i></a> -->
                                    <a id="remove-btn" href="./remove/{{ $item['id'] }}" class="btn btn-danger remove-btn" title="Remove Item"><i class="glyphicon glyphicon-trash"></i></a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
