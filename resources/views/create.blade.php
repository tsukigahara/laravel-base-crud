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

        <form class="d-flex" action="{{route('saints.store')}}" method="POST">
            @csrf
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Place of birth</label>
                    <input type="text" name="place_of_birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Blessing date</label>
                    <input type="date" name="blessing_date" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Miracles count (1-100)</label>
                    <input type="number" name="miracles_count" id="" class="form-control" placeholder="" aria-describedby="helpId" min="1" max="100">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
