@extends('layout')

@section('title')
  <title>{{ $title . $baseTitle }}</title>
@stop

@section('content')

<div class="row">

  <!-- Show all users -->
  <div class="five columns users block-content pull-left">
    <h3>All Users</h3>
    @foreach($users as $user)
      <section class="user">
        <img class="pull-left" src="http://www.gravatar.com/avatar/{{ GravatarHelper::get($user->email) }}" />
        <p class="userName">{{ HTML::linkAction('UserController@show', $user->name, array($user->id)) }}</p>
      </section>
    @endforeach
  </div>

  <!-- Show top users -->
  <div class="seven columns users block-content pull-left">
    <h3>Top Users</h3>
    @foreach($users as $user)
    <section class="user top">
      <img class="pull-left" src="http://www.gravatar.com/avatar/{{ GravatarHelper::get($user->email) }}" />
      <p class="userName">{{ $user->name }}</p>
      <section class="about-section">
        <ul>
          <li><i class="fi-marker"></i>Springfield, IL</li>
          <li><i class="fi-social-twitter"></i>@matthewjamesr</li>
          <li><i class="fi-social-github"></i>@matthewjamesr</li>
        </ul>
      </section>
    </section>
    @endforeach
  </div>

</div>
@stop
