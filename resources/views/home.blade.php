@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1>
                {{ Auth::user()->name }}
                <a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add New</a>
                <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-cog">
</i></a>

            </h1>

            

            <br><br>
                
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
                                <th>3/Mehr/1395</th>
                                <th>226</th>
                                <th>10'06''/KM</th>
                                <th>3.53KM</th>
                                <th>87KG</th>
                                <th>
                                    <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-wrench"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>2/Mehr/1395</th>
                                <th>226</th>
                                <th>10'06''/KM</th>
                                <th>3.53KM</th>
                                <th>87KG</th>
                                <th>
                                    <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-wrench"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>1/Mehr/1395</th>
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
