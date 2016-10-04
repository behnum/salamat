@extends('layouts.app')

@section('content')

<!-- Modals -->
@include('includes.modals')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Warning!</strong> This is an early Beta version! Things might go wonky.
            </div>

            <h1>
                {{ Auth::user()->name }}

                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#addNewCollapse" aria-expanded="false" aria-controls="addNewCollapse">
                  <i class="glyphicon glyphicon-plus"></i> Add
                </button>
            </h1>
<hr>
                <div class="collapse" id="addNewCollapse">

                  <div class="panel panel-default">
                      <div class="panel-heading">Add a Record</div>

                      <div class="panel-body">
                        <form action="save" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputDate" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDate" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputActiveCal" class="col-sm-2 control-label">Active Cal</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputActiveCal" placeholder="Active Cal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAvgPace" class="col-sm-2 control-label">Avg. Pace</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputAvgPace" placeholder="Avg. Pace">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDistance" class="col-sm-2 control-label">Distance</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDistance" placeholder="Distance">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputWeight" class="col-sm-2 control-label">Weight</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWeight" placeholder="Weight">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Save</button>
                        </form>
                      </div>
                  </div>

                </div>

            <br>

            <div class="panel panel-default">
                <div class="panel-heading">Quick Glance</div>

                <div class="panel-body">
                    <i class="glyphicon glyphicon-leaf"></i>
                    You ran for <b>123</b> kilometers in <b>123</b> sessions.<br>
                    <i class="glyphicon glyphicon-gift"></i>
                    The total number of active calories is: 456 Cal .<br>
                </div>
            </div>

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
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>3/7/95</th>
                                <th>226</th>
                                <th>10'06''/KM</th>
                                <th>3.53 KM</th>
                                <th>87 KG</th>
                                <th>
                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-wrench"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                </th>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
