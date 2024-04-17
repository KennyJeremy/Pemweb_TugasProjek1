function submitRegistForm() {
  const formData = new FormData(document.getElementById("registerForm"));
  const url = "register.php";

  axios
    .post(url, formData)
    .then((res) => {
      console.log("Registrasi berhasil");
      window.location.href = "login_page.php?alert=terdaftar";
    })
    .catch((error) => {
      console.error("Error fetching data: ", error);
    });
}
