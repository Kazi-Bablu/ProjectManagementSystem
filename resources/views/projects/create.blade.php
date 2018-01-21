@extends('layouts.app')
@section('content')
    <div class="col-md-8 col-lg-8 pull-left" >
        <h1>Add new Project</h1>
    </div>
       <div class="row col-md-9 col-lg-9 col-sm-9  ">

           <!-- Example row of columns -->
           <div class="row" style="background: white; margin: 10px;">
               <form method="post" action="{{ route('projects.store')}}">
                   {{csrf_field()}}


                   <div class="form-group">
                       <label for="project-name">Enter Project Name<span class="required">"</span></label>
                       <input placeholder="Enter project name"
                              id="company-name"
                              required
                              name="name"
                              spellcheck="false"
                              class="form-control"
                       />
                   </div>

                   <input type="hidden"
                          name="company_id"
                          value="{{$company_id}}"
                   />

                   <div class="form-group">
                       <label for="project-content">Enter Project Description</label>
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
                <li><a href="/projects">My projects</a></li>
                {{--<li><a href="/companies/{{$company->id}}/edit">Edit</a></li>--}}
            </ol>
        </div>
        {{--<div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
            </ol>
        </div>--}}

    </div>

@endsection