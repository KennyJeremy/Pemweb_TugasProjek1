function submitLoginForm() {
  const formData = new FormData(document.getElementById("loginForm"));
  const url = "login.php";

  axios
    .post(url, formData)
    .then((res) => {
      console.log("Login berhasil");
      window.location.href = "index.php";
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
