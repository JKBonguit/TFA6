@extends('layouts.app')
@section('content')
<section><div class="page-head"><div><div class="eyebrow">Eloquent database records</div><h1>User Accounts</h1><p>Records retrieved from the <code>users</code> table by <code>User</code>.</p></div><a class="button" href="{{ route('customers') }}">View customer accounts</a></div><div class="table-wrap"><table><thead><tr><th>#</th><th>Username</th><th>Full Name</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td>{{ $user->id }}</td><td><strong>{{ $user->username }}</strong></td><td>{{ $user->full_name }}</td></tr>
@endforeach
</tbody></table></div></section>
@endsection
