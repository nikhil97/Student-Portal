@extends('layouts.app')

@section('content')

     <form method="post" action="/user/updated">
         {{method_field('PATCH')}}
         <input type="hidden" name="_token" value="{{ csrf_token() }}">


         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-md-offset-2">
                     <div class="panel panel-default">
                         <div class="panel-heading">Name</div>
                         <div class="panel-body">
                            <input class = "form-control "type="textarea" name="name" value="{{$user->name}}" required>


                         </div>

                         <div class="panel-heading">Branch</div>
                         <div class="panel-body">
                             <div class="col-md-6">
                                 <select class = " form-control"  name="branch"required>
                                     <option> {{$user->branch}} </option>
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
                         <div class="panel-heading">Year Of Passing</div>
                         <div class="panel-body">
                             <input class = "form-control "type="textarea" name="year_of_passing" value="{{$user->year_of_passing}}" required>

                         </div>
                         <br>
                         <div class="panel-heading">Skills</div>
                         <div class="panel-body">
                             <input class = "form-control "type="textarea" name="skills" value="{{$user->skills}}">

                         </div>

                         <div class="panel-heading">Certification</div>
                         <div class="panel-body">
                             <input class = "form-control "type="textarea" name="certification" value="{{$user->certification}}" >
                         </div>
                         <div class="panel-heading">Training</div>
                         <div class="panel-body">
                             <input class = "form-control "type="textarea" name="training" value="{{$user->training}}" >
                         <div class="panel-heading">Interest</div>
                         <div class="panel-body">
                             <input class = "form-control "type="textarea" name="interests" value="{{$user->interests}}" >

                     </div>

                      <button class="btn btn-primary"  type="submit">Save</button>
                 </div>
             </div>
         </div></div>
         </div>
     </form>

@endsection