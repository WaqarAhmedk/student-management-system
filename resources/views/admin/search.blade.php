@extends('admin.layout')

@section('content')


<div>
    <x-alert/>
<h1>SEARCH THE Student with</h1>

        <form method="post" action="{{route('student.search')}}" >
            @csrf
            <input type="text" placeholder="ENter query here" name="search"/>
            <input type="submit" value="SEARCH by CNIc"/>
        </form>

</div>




@endsection()
