document
  .querySelectorAll(".input-penerima, .input-judul, .textarea-pesan")
  .forEach(function (input) {
    input.addEventListener("input", function () {
      if (input.value.trim() !== "") {
        input.classList.add("filled");
      } else {
        input.classList.remove("filled");
      }
    });
  });
