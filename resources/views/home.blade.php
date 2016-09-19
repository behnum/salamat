@extends('layouts.app')

@section('content')

<!-- Modals -->
<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Settings</h4>
      </div>
      <div class="modal-body">
        <p>Put the settings content here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- / End of Modals -->

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
                        <p>Add it here.</p>
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
                                <th>3.53KM</th>
                                <th>87KG</th>
                                <th>
                                    <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-wrench"></i></a>
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
