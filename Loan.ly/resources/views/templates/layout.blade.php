<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Auth Page')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .bg-image {
      background-image: url('@yield('bg-image', asset('assets/img/Login.png'))');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    .card {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      z-index: 2;
    }
    .logo-top-left {
      position: absolute;
      top: 24px;
      left: 40px;
      z-index: 10;
      background: rgba(255,255,255,0.95);
      border-radius: 10px;
      padding: 6px 10px 6px 10px;
      display: flex;
      align-items: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .logo-top-left img {
      height: 48px;
      margin-right: 6px;
    }
    .logo-top-left span {
      font-size: 2rem;
      font-weight: 700;
      color: #205781;
      font-family: 'Poppins', Arial, sans-serif;
      letter-spacing: 1px;
    }
    @media (max-width: 600px) {
      .logo-top-left {
        top: 10px;
        left: 10px;
        padding: 4px 10px 4px 6px;
      }
      .logo-top-left img {
        height: 36px;
        margin-right: 6px;
      }
      .logo-top-left span {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body>
  <div class="bg-image">
    <div class="logo-top-left">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Loan.ly Logo">
    </div>
    <div class="card bg-light">
      @yield('contents')
    </div>
  </div>
</body>
</html>