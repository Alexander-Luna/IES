document.addEventListener("DOMContentLoaded", async function () {
  document.getElementById("btnentrar").addEventListener("click", submitForm);
  function submitForm() {
    const form = document.getElementById("miForm");
    const formData = new FormData(form);
    fetch("../../controllers/router.php?op=login", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          swal("Algo salio mal!" + response, "error");
          throw new Error("Error en la solicitud");
        }
        if (response.status === 200) {
          window.location.href = "../main/";
        } else {
          swal("Error", "Usuario o contraseña incorrectos", "warning");
          return;
        }
      })
      .catch((error) => {
        swal("Ups! Algo salió mal!", error, "error");
      });
  }
});
