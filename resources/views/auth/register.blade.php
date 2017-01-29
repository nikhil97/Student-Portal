@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch</label>

                            <div class="col-md-6">
                                <select class = " form-control" id="branch" name="branch"required>
                                    <option> select </option>
                                    <option>CSE</option>
                                    <option>ME</option>
                                    <option>ECE</option>
                                    <option>IT</option>
                                    <option>EN</option>
                                    <option>CE</option>
                                    <option>MCA</option>
                                    <option>MBA</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="year-of-passing" class="col-md-4 control-label">Year of Passing</label>

                            <div class="col-md-6">
                                <input id="year-of-passing" type="text" class="form-control" name="year_of_passing" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="skills" class="col-md-4 control-label">Skills</label>

                            <div class="col-md-6">
                                <input id="skills" type="text" class="form-control" name="skills" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="certification" class="col-md-4 control-label">Certification</label>

                            <div class="col-md-6">
                                <input id="certification" type="text" class="form-control" name="certification">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="training" class="col-md-4 control-label">Training</label>

                            <div class="col-md-6">
                                <input id="training" type="text" class="form-control" name="training">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="interests" class="col-md-4 control-label">Interest</label>

                            <div class="col-md-6">
                                <input id="interests" type="text" class="form-control" name="interests">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
