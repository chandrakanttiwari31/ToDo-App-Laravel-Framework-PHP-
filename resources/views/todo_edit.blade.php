<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
        </style>
    </head>
    <body>
    <a href="todo_show">Back</a><br/><br/>
        <div class="flex-center position-ref full-height">
        <form  action="{{route('todo.update',[$todoArr->id])}}" method="post">
        @csrf
           <table id="customers">
          <tr>
              <td>Name<td>
              <td> <input type="text" name="name" required  value={{$todoArr->name}} /><td>
          </tr>

          <tr>
              <td><td>
              <td> <input type="submit" name="submit"/><td>
          </tr>
           </table>
           </form>
        </div>
    </body>
</html>
