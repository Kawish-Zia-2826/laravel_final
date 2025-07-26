<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Info Display</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .info {
      text-align: left;
      margin-top: 10px;
    }

    .info p {
      margin: 10px 0;
      font-size: 18px;
      color: #555;
    }

    .label {
      font-weight: bold;
      color: #222;
    }

    @media (max-width: 480px) {
      .card {
        padding: 20px;
      }

      .info p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>Student Details</h2>
    <div class="info">
      @foreach ($user as $item)
          <p><span class="label">Name:</span> {{$item->student_name}}</p>
      <p><span class="label">Email:</span> {{$item->student_email}}</p>
      <b></b>
      <button><a href="{{route('addStudent',$item->id)}}">add</a></button>
      <br>
      @endforeach


      
    </div>
  </div>


  {{$user->links()}}

</body>
</html>
