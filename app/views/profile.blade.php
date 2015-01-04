@extends('layout')

@section('title')
<title>{{ $title . $baseTitle }}</title>
@stop

@section('content')

<div class="row">

  <div class="five columns profile block-content pull-left">
    <h4 class="hr-dotted">Profile<i class="fi-book pull-right"></i></h4>
    <ul>
      <li><b>{{ $profile->name }}</b></li>
      <li><i class="fi-marker"></i>{{ $profile->location }}</li>
      <li><i class="fi-social-skype"></i>{{$profile->skype}}</li>
      <li><i class="fi-social-twitter"></i>{{ $profile->twitter }}</li>
      <li><i class="fi-social-github"></i>{{ $profile->github }}</li>
    </ul>
  </div>

  <div class="two columns pull-left">
    <img class="avatar polaroid block-center" src="http://www.gravatar.com/avatar/{{ GravatarHelper::get($user->email) }}" />
  </div>

  <div class="five columns block-content pull-left">
    <h4 class="hr-dotted">Activity<i class="fi-clock pull-right"></i></h4>
  </div>

</div>
@stop
