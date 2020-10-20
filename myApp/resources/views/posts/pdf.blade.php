<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dom PDF</title>

        <style>
            #tabl{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #tabl td, th{
                border: 1px solid #dddddd;
                padding: 8px;
                text-align: center;
            }
            #tabl tr:nth-child(even){
                background-color: darksalmon;
            }
            #tabl th{
                background-color:darkcyan;
                color:white;
            }
        </style>


        
    </head>
    <body>
        <table id="tabl">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td> {{$post->id}} </td>
                        <td> {{$post->title}} </td>
                        <td> {{$post->body}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>
