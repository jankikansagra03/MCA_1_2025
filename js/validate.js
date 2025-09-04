$(document).ready(function () {
  function validateField(input) {
    let field = $(input);
    let value = field.val().trim();
    let errorSpan = $("#" + field.attr("name") + "Error");
    let validationType = field.data("validation") || "";

    let errorMessage = "";
    if (validationType != "") {
      if (validationType.includes("required") && value === "") {
        errorMessage = "This field is required.";
      }
      if (validationType.includes("email")) {
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(value)) {
          errorMessage = "Please enter a valid email address.";
        }
      }
      if (errorMessage) {
        errorSpan.text(errorMessage).show();
        field.addClass("is-invalid");
        field.removeClass("is-valid");
      } else {
        errorSpan.hide();
        field.removeClass("is-invalid");
        field.addClass("is-valid");
      }
    }
  }
  $("form").on("submit", function (e) {
    let isValid = true;
    $(this)
      .find("input, textarea, select")
      .each(function () {
        validateField(this);
        if ($(this).next(".error").text !== "") {
          isValid = false;
        }
      });

    if (!isValid) {
      e.preventDefault();
    }
  });
});
