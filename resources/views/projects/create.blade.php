@extends('master')
@section('title', 'New Project')



@section('content')

    <h1 class="title">Let's create New Project</h1>

    <!-- Make post request to projects link. So we need a route that understands POST method -->
    <form method="POST" action="/projects">

        {{ csrf_field() }}




        <div class="field">

            <label for="title" class="label">Project Title</label>

            <div class="control">
                <input
                    type="text"
                    class="input" {{ $errors->has('title') ? 'is-danger' : '' }}
                    name="title"
                    value="{{ old('title') }}"
                    required>
            </div>

        </div>



        <div class="field">

            <label for="description" class="label">Project Description</label>

            <div class="control">
                <!-- This is front-end side browser validation (using require). But must/better have back-end as well -->
                <textarea
                    name="description"
                    class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                    required>
                    {{ old('description') }}
                </textarea>
            </div>

        </div>




        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>



        @include ('errors')

    </form>

@endsection
