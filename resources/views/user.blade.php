@extends('layouts.app')

@section('content')

    <form method="get" action="/user/edit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type=submit class=" btn btn-primary" style="float: right">Edit</button>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Name</div>
                        <div class="panel-body">
                            {{$user->name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Branch</div>
                        <div class="panel-body">
                            {{$user->branch}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Year Of Passing</div>
                        <div class="panel-body">
                            {{$user->year_of_passing}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Skills</div>
                        <div class="panel-body">
                            {{$user->skills}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Certification</div>
                        <div class="panel-body">
                            {{$user->Certication}}</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Training</div>
                        <div class="panel-body">
                            {{$user->training}}</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Interest
                        </div>
                        <div class="panel-body">
                            {{$user->interests}}</div>

                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection