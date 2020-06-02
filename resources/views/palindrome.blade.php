<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        
             <div class="content">
                <form action="{{ route('checkPalindrome') }}" method="POST"  enctype="multipart/form-data">
                    @method('get')
                    @csrf
                    Enter text: <input type="text" name="name" value=""/>

                    <input type="submit" class="btn btn-primary" value="Check value"/>
                </form>

                <a href="/" >Go Back</a>
           
            </table>
            </div>
       
    </body>
</html>
