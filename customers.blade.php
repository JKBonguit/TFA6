@extends('layouts.app')
@section('content')
<section><div class="page-head"><div><div class="eyebrow">Eloquent database records</div><h1>Customer Accounts</h1><p>Records retrieved from the <code>customers</code> table by <code>Customer</code>.</p></div><a class="button" href="{{ route('users') }}">View user accounts</a></div><div class="table-wrap"><table><thead><tr><th>#</th><th>Customer</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td>{{ $customer->id }}</td><td><strong>{{ $customer->full_name }}</strong></td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
@endforeach
</tbody></table></div></section>
@endsection
