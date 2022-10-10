<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
  <div class="container mt-5">

    <h1 class="text-center mb-4">List Data Student</h1>

    <div class="text-end mb-4">
        <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
    </div>

    @foreach($student as $row)

    <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">

            <span>{{ $row->nama }}</span>

            <div>
              <a href="{{ route('student.show', $row->id) }}" class="btn btn-success">
                <i class="fa-solid fa-eye"></i>
              </a>
              <a href="{{ route('student.show', $row->id) }}" class="btn btn-primary">
                <i class="fa-solid fa-pencil"></i>
              </a>
              <a href="{{ route('student.show', $row->id) }}" class="btn btn-danger">
                <i class="fa-solid fa-trash-can"></i>
              </a>
            </div>  

          </div>

        </div>
    </div>

    @endforeach

  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>