<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saints</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
  <main class="container">
    
    <a class="btn btn-primary" href="{{route('saints.create')}}" role="button">Add Saint</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Blessing count</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($saints as $saint)
        <tr>
          <th scope="row">{{$saint->id}}</th>
          <td>{{$saint->name}}</td>
          <td>{{$saint->miracles_count}}</td>
          <td>
              {{-- se volessi passare piu parametri?  usando questo non va ['id'=>$saint->id]--}}
              <form class="form-inline"action="{{ route('saints.destroy', $saint->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-primary" href="{{route('saints.show', $saint->id)}}" role="button">Details</a>
                  <input class="btn btn-outline-danger" type="submit" value="Delete">
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
</body>

</html>
