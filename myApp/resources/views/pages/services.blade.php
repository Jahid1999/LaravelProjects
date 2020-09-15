@extends('layouts.app')

@section ('content')

    <div style="text-align: center">
        <div >
            <h2>{{$title}} </h2>
            <p> This is the list of services that My App provides:
                @if(count($services) > 0)
                    @foreach ($services as $service)
                        <li> {{$service}}</li>
                    @endforeach
                @endif
             </p>
        </div>

        <div class="links">
            <a href="https://www.facebook.com/aa.jahid30">Facebook</a>
            <a href="https://github.com/Jahid1999">GitHub</a>
        </div>
    </div>
 @endsection 