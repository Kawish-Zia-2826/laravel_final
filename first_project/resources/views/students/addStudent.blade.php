<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Form</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    @media (max-width: 480px) {
      .form-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Student Info</h2>
    <form action="{{route('addStudent')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" id="name" name="student_name" placeholder="Enter your full name" required>
      </div>

      <div class="form-group">
        <label for="email">Student Email</label>
        <input type="email" id="email" name="student_email" placeholder="Enter your email" required>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>
