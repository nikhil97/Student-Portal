@extends('layouts.app')

@section('content')

    <a href = '/myprofile'><button class="btn btn-primary">My Profile</button></a>

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>

                <div class="panel-body">
                    <form class="form-group" method="get" action={{url('/search')}}>
                        <input class="form-control" type="text" name="name" placeholder="Name" value="null"><br>
                        <div class="panel-heading">Branch</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <select class = " form-control"  name="branch" >
                                    <option> </option>
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
                        <input class="form-control" type="text" name="year_of_passing" placeholder="Year Of Passing"value="null"><br>
                        <input class="form-control" type="text" name="skills" placeholder="Skills or Certifiacation" value="null"><br>
                        <input class="form-control" type="text" name="interests" placeholder="Interest"value="null"><br>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

