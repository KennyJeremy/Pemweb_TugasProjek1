function submitRegistForm() {
  const formData = new FormData(document.getElementById("registerForm"));
  const url = "../controllers/register.php";

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var hp = document.getElementById("hp").value;
  var alamat = document.getElementById("alamat").value;
  var password = document.getElementById("password").value;
  var konfirmasi_password = document.getElementById(
    "konfirmasi_password"
  ).value;
  var role = document.querySelector('input[name="role"]:checked');

  if (
    name === "" ||
    email === "" ||
    hp === "" ||
    alamat === "" ||
    password === "" ||
    konfirmasi_password === "" ||
    !role
  ) {
    alert("Mohon lengkapi semua field!");
    return;
  }

  if (password !== konfirmasi_password) {
    alert("Konfirmasi password tidak cocok!");
    return;
  }

  axios
    .post(url, formData)
    .then((res) => {
      console.log("Registrasi berhasil");
      window.location.href = "../views/login_page.php?alert=terdaftar";
    })
    .catch((error) => {
      console.error("Error fetching data: ", error);
    });
}
