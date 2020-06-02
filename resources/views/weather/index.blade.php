<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        
             <div class="content">

                @if(Session::has('success'))
                <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
                </div>
                @endif
        
            @if(Session::has('fail'))
                  <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                  @php
                  Session::forget('fail');
                  @endphp
                  </div>
                  @endif

                <form action="{{ route('weather.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    Select City:
                    <select  name="city_name" class="form-control">
                    <option value="Bangalore">Bangalore</option>
                    <option value="Mysore">Mysore</option>
                    </select>

                    <input type="submit" class="btn btn-primary" value="Save"/>
                </form>

                <a href="/" >Go Back</a>
            <table border="1">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>properties</td>
                    </tr>
                </thead>
                <tbody>
                    @if($weathers->count() > 0)
                    @foreach($weathers as $weather)
                    <tr>
                        <td>{{$weather->id}}</td>
                        <td>{{ $weather->name }}</td>
                        <td>{{ $weather->properties }}</td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                        <td colspan="3" align="center">Currently there are no users</td>
                       </tr>
                    @endif
                </tbody>

                
            </table>
            </div>
       
    </body>
</html>
