@extends('maket')




@section('main')

            @foreach($categors as $categor)
                    <li><a href="#">{{ $categor->name }} </a></li>
            @endforeach
@endsection