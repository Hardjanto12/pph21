// {{-- /* A function to prevent user from entering space in the input field. */ --}}
  var input = document.getElementById("bpjs");
  input.addEventListener("keydown", function(event) {
    if (event.keyCode === 32) {
      event.preventDefault();
      $(input).tooltip({
        title: "Spaces are not allowed in this field!",
        placement: "right",
        template: '<div class="tooltip alert-danger" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div><div class="tooltip-close"><button type="button" class="btn-close" aria-label="Close"></button></div></div>'
      });
      $(input).tooltip("show");
      $(".tooltip-close .btn-close").on("click", function() {
        $(input).tooltip("hide");
      });
    }
  });