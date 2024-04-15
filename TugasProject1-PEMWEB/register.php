<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <h1>Registrasi</h1>

  <form action="register.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>

    <label for="NoTelp">No.Telp:</label>
    <input type="tel" id="NoTelp" name="NoTelp">
    <br>

    <label for="Alamat">Alamat:</label>
    <input type="text" id="Alamat" name="Alamat">
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="eye-icon">
    <svg
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="20"
    viewBox="0 0 89 63"
    fill="none">
    <path
    d="M57.7458 31.4177C57.7458 34.9521 56.3418 38.3418 53.8426 40.841C51.3434 43.3402 47.9537 44.7442 44.4193 44.7442C40.8849 44.7442 37.4952 43.3402 34.996 40.841C32.4968 38.3418 31.0928 34.9521 31.0928 31.4177C31.0928 27.8833 32.4968 24.4936 34.996 21.9944C37.4952 19.4952 40.8849 18.0912 44.4193 18.0912C47.9537 18.0912 51.3434 19.4952 53.8426 21.9944C56.3418 24.4936 57.7458 27.8833 57.7458 31.4177Z"
    fill="#626B96"/>
    <path
    d="M88.3702 29.4321C78.784 10.2552 61.7616 0.32251 44.4194 0.32251C27.0816 0.32251 10.0547 10.2552 0.468498 29.4321C0.160395 30.0486 0 30.7285 0 31.4177C0 32.107 0.160395 32.7868 0.468498 33.4034C10.0547 52.5802 27.0771 62.5129 44.4194 62.5129C61.7572 62.5129 78.784 52.5802 88.3702 33.4034C88.6783 32.7868 88.8387 32.107 88.8387 31.4177C88.8387 30.7285 88.6783 30.0486 88.3702 29.4321ZM44.4194 53.6286C31.2305 53.6286 17.7574 46.4323 9.45946 31.4177C17.7574 16.4032 31.2261 9.20685 44.4194 9.20685C57.6082 9.20685 71.0813 16.4032 79.3793 31.4177C71.0813 46.4323 57.6082 53.6286 44.4194 53.6286Z"
    fill="#626B96"
    />
    </svg>
    </span> 
    <br>

    <label for="konfirmasi_password">Konfirmasi Password:</label>
    <input type="password" id="konfirmasi_password" name="konfirmasi_password">
    <svg
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="20"
    viewBox="0 0 89 63"
    fill="none">
    <path
    d="M57.7458 31.4177C57.7458 34.9521 56.3418 38.3418 53.8426 40.841C51.3434 43.3402 47.9537 44.7442 44.4193 44.7442C40.8849 44.7442 37.4952 43.3402 34.996 40.841C32.4968 38.3418 31.0928 34.9521 31.0928 31.4177C31.0928 27.8833 32.4968 24.4936 34.996 21.9944C37.4952 19.4952 40.8849 18.0912 44.4193 18.0912C47.9537 18.0912 51.3434 19.4952 53.8426 21.9944C56.3418 24.4936 57.7458 27.8833 57.7458 31.4177Z"
    fill="#626B96"/>
    <path
    d="M88.3702 29.4321C78.784 10.2552 61.7616 0.32251 44.4194 0.32251C27.0816 0.32251 10.0547 10.2552 0.468498 29.4321C0.160395 30.0486 0 30.7285 0 31.4177C0 32.107 0.160395 32.7868 0.468498 33.4034C10.0547 52.5802 27.0771 62.5129 44.4194 62.5129C61.7572 62.5129 78.784 52.5802 88.3702 33.4034C88.6783 32.7868 88.8387 32.107 88.8387 31.4177C88.8387 30.7285 88.6783 30.0486 88.3702 29.4321ZM44.4194 53.6286C31.2305 53.6286 17.7574 46.4323 9.45946 31.4177C17.7574 16.4032 31.2261 9.20685 44.4194 9.20685C57.6082 9.20685 71.0813 16.4032 79.3793 31.4177C71.0813 46.4323 57.6082 53.6286 44.4194 53.6286Z"
    fill="#626B96"
    />
    </svg>
    </span> 
    <br>

    <label for="Role">Role:</label>
    <br>
    <input type="radio" id="Seller" name="Role">
    <label for="Seller">Seller</label>
    <br>
    <input type="radio" id="Buyer" name="Role">
    <label for="Buyer">Buyer</label>
    <br>

    <button type="submit" name="register">Daftar</button>
  </form>
</body>
</html>