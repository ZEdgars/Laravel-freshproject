@extends('master')
@section('title', 'New Project')



@section('content')

    <h1 class="title">Let's create New Project</h1>

    <!-- Make post request to projects link. So we need a route that understands POST method -->
    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <div class="field">
            <input class="input" type="text" name="title" placeholder="Project title">
        </div>

        <div class="field">
            <div class="control">
                <textarea name="description" class="textarea" placeholder="Project description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

    </form>

@endsection
