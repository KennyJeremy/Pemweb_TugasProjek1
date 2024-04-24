function submitPostingForm() {
  const formData = new FormData(document.getElementById("postingForm"));
  const url = "../controllers/posting.php";

  axios
    .post(url, formData)
    .then((res) => {
      alert("Post product berhasil");
      window.location.href = "index.php";
    })
    .catch((error) => {
      console.error("Error fetching data: ", error);
    });
}
