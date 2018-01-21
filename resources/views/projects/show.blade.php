@extends('layouts.app')
@section('content')
        <div class="col-md-9 col-lg-9 col-sm-9  pull-left">
        <!-- Jumbotron -->
            <div class="well well-lg">
                <h1>{{$project->name}}</h1>
                <p class="lead">{{$project->description}}</p>
                {{--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>--}}
            </div>

            <!-- Example row of columns -->
            <div class="row" style="background: white; margin: 10px;">

                <a href="/projects/create" class="pull-right btn btn-default btn-sm">Add Project</a>

                <br/>
                <form method="post" action="{{ route('companies.store')}}">
                    {{csrf_field()}}


                    <div class="form-group">
                        <label for="company-name">Name<span class="required">"</span></label>
                        <input placeholder="Enter name"
                               id="company-name"
                               required
                               name="name"
                               spellcheck="false"
                               class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label for="company-content">Description</label>
                        <textarea placeholder="Enter description"
                                  style="resize:vertical"
                                  id="company-content"
                                  name="description"
                                  rows="5" spellcheck="false"
                                  class="form-control autosize-target text-left">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"
                               value="submit"/>
                    </div>
                </form>









              {{--  @foreach($project->projects as $project)--}}
                    {{--<div class="col-lg-4">
                        <h2>{{$project->	name}}</h2>
                        <p class="text-danger">{{$project->description}}</p>
                        <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Project »</a></p>
                    </div>--}}
               {{--  @endforeach--}}
            </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3  pull-right">
          {{--  <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>--}}
            <div class="sidebar-module">
                <h4>Action</h4>
                <ol class="list-unstyled">
                    <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
                    <li><a href="/projects/create">Add Project</a></li>
                    <li><a href="/projects">My projects</a></li>

                    <br/>
        @if($project->user_id == Auth::user()->id)
                    <li>
                        <a
                                href="#"
                                onclick="
                          var result = confirm('Are you sure you wish to delete this project?');
                                if(result){
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                            }
                            "
                        >
                            Delete
                        </a>

                        <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}"
                              method="post" style="display: none">
                            <input type="hidden" name="_method" value="delete">
                            {{csrf_field()}}
                        </form>
                    </li>
         @endif
                    {{--<li><a href="#">Add new user</a></li>--}}
                </ol>
            </div>
    {{--        <div class="sidebar-module">
                <h4>Members</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                </ol>
            </div>--}}

        </div>

@endsection