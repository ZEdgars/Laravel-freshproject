@extends('master')
@section('title', 'Edit Project')



@section('content')

    <div class="column is-half">

        <h1 class="title">Let's Edit Project</h1>

        <form method="POST" action="/projects/{{ $project->id }}">

            <!-- Helper method to ask Laravel to treat POST request as PATCH request -->
            {{ method_field('PATCH') }}

            {{ csrf_field() }}

            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
                </div>

            </div>

            <div class="field">
                <label for="description" class="label">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea">{{ $project->description }}</textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Project</button>
                </div>
            </div>

        </form>

        <form method="POST" action="/projects/{{ $project->id }}">

            <hr>

            <!-- Same as above, but shorthand -->
            @method('DELETE')
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Delete Project</button>
                </div>
            </div>
        </form>
    </div>





@endsection
