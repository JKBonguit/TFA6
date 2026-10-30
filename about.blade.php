@extends('layouts.app')
@section('content')
<section class="about"><div class="eyebrow">About this activity</div><h1>Laravel POS Foundations</h1><p>This application rebuilds the POS pages using Laravel's conventions and MVC architecture. Each page is reached through a named route, handled by a controller method, and rendered by a Blade template.</p><div class="card"><h2>{{ $course }}</h2><p><strong>Module:</strong> {{ $module }}</p><p style="margin-bottom:0">The customer and user pages now use migrations, a seeder, Eloquent models, and database records instead of static controller arrays.</p></div></section>
@endsection
