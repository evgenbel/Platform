@extends('layouts.profile')

@section('title')
    {{ trans('user::profile.title') }} | @parent
@stop

@section('h1')
    {{ trans('user::profile.title') }}
@stop

@section('content')
    <div class="col-sm-8 blog-main">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div><!-- /.blog-main -->
@stop

@section('profile_menu')
    <a class="blog-nav-item active" href="">{{ trans('user::profile.title') }}</a>
    <a class="blog-nav-item" href="">{{ trans('user::profile.orgs') }}</a>
@stop

@section('right_menu')
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    {{--<div class="sidebar-module sidebar-module-inset">--}}
    {{--<h4>About</h4>--}}
    {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
    {{--</div>--}}
    {{--<div class="sidebar-module">--}}
    {{--<h4>Archives</h4>--}}
    {{--<ol class="list-unstyled">--}}
    {{--<li><a href="#">March 2014</a></li>--}}
    {{--<li><a href="#">February 2014</a></li>--}}
    {{--<li><a href="#">January 2014</a></li>--}}
    {{--<li><a href="#">December 2013</a></li>--}}
    {{--<li><a href="#">November 2013</a></li>--}}
    {{--<li><a href="#">October 2013</a></li>--}}
    {{--<li><a href="#">September 2013</a></li>--}}
    {{--<li><a href="#">August 2013</a></li>--}}
    {{--<li><a href="#">July 2013</a></li>--}}
    {{--<li><a href="#">June 2013</a></li>--}}
    {{--<li><a href="#">May 2013</a></li>--}}
    {{--<li><a href="#">April 2013</a></li>--}}
    {{--</ol>--}}
    {{--</div>--}}
    {{--<div class="sidebar-module">--}}
    {{--<h4>Elsewhere</h4>--}}
    {{--<ol class="list-unstyled">--}}
    {{--<li><a href="#">GitHub</a></li>--}}
    {{--<li><a href="#">Twitter</a></li>--}}
    {{--<li><a href="#">Facebook</a></li>--}}
    {{--</ol>--}}
    {{--</div>--}}
    <div class="sidebar-module">
        <ol class="list-unstyled">
            <li><a href="#" class="active">{{ trans('user::profile.title') }}</a></li>
            <li><a href="#">{{ trans('user::profile.orgs') }}</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->
@stop
