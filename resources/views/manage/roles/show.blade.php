@extends('layouts.manage')

@section('content')
  <div class="flex-container box">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">{{$role->display_name}}</h1><small class="m-l-25"><em>({{$role->name}})</em></small>
        <p class="m-t-10">{{$role->name}}</p>
      </div>
      <div class="column">
      <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right">Edit Role</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title-small">Permissions:</h1>
                <ul>
                  @foreach ($role->permissions as $r)
                    <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
