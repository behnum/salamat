@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1>
                {{ Auth::user()->name }}
                <a href="#" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-plus"></span> Add New</a>
                <a href="#" class="btn btn-warning">Settings</a>

            </h1>

            

            <br><br>
                
            <div class="panel panel-default">
                <div class="panel-heading">Summary</div>

                <div class="panel-body">
                    So far, you ran for <b>123</b> kilometers in <b>123</b> sessions.<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae hic dolor possimus mollitia perferendis facere illo consectetur dolorem temporibus quod eum itaque laudantium cumque dolores quas saepe iusto, doloribus provident!
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Log</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Active Cal</th>
                                <th>Avg. Pace</th>
                                <th>Distance</th>
                                <th>Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></th>
                                <th>1/Mehr/1395</th>
                                <th>7:15 AM</th>
                                <th>226</th>
                                <th>10'06''/KM</th>
                                <th>3.53KM</th>
                                <th>87KG</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
