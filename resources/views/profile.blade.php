<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thông tin cá nhân</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .mb-4{
        text-align: center;
    }
    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
      font-size: 24px;
      font-weight: bold;
    }

    .card-text {
      font-size: 16px;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Thông tin cá nhân</h2>
  <div class="row justify-content-center">
    @foreach($listProfile as $profile)
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ $profile['name'] }}</h4>
            <p class="card-text">
              <strong>Tuổi:</strong> {{ $profile['age'] }}<br>
              <strong>Quê quán:</strong> {{ $profile['hometown'] }}<br>
              <strong>Chuyên ngành:</strong> {{ $profile['major'] }}<br>
              <strong>Email:</strong> {{ $profile['email'] }}<br>
              <strong>Số điện thoại:</strong> {{ $profile['phone'] }}
            </p>
            <a href="https://drive.google.com/file/d/12lXQ4qd5FCsks9ZXgLabEzddJG8Hi2k6/view" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

</body>
</html>
