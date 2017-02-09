@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <button id="toggleSearchButton" onclick="toggleSearch()" type="button" class="btn btn-primary">Search
                </button>
                <br>
                <div id="showSearchDiv" class="panel-body" style="display: none;">
                    <form class="form-group" method="get" action={{url('/search')}}>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name"><br>
                            <input class="form-control" type="text" name="year_of_passing"
                                   placeholder="Year Of Passing"><br>
                            <input class="form-control" type="text" name="skills"
                                   placeholder="Skills or Certifiacation"><br>
                            <input class="form-control" type="text" name="interests" placeholder="Interest"><br></div>
                        <div class="panel-body">
                            <div class="col-md-6 col-md-offset-6">
                                <select class=" form-control" name="branch">
                                    <option value="null">Select Branch</option>
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
                        <button type="submit" class="btn btn-primary">GO</button>
                    </form>
                </div>
                <h4>All Activities</h4>
                <ul class="list-group">
                    @foreach($activities as  $activity)
                        <li class="list-group-item">
                            <a href="/user/{{$activity->user->id}}/timeline">{{$activity->user->name}}</a>
                            <h4>{{$activity->title}}</h4>
                            <p>{{$activity->desc}}</p>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function toggleSearch() {

            $('#showSearchDiv').delay(200).slideToggle('slow');
        }

    </script>


@endsection

