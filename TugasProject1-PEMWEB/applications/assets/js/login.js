function submitLoginForm() {
  const formData = new FormData(document.getElementById("loginForm"));
  const url = "../controllers/login.php";

  axios
    .post(url, formData)
    .then((res) => {
      console.log("Login berhasil");
      window.location.href = "../../index.php";
    })
    .catch((error) => {
      window.location.href = "login_page.php?alert=gagal";
      console.error("Error:", error);
    });
}
