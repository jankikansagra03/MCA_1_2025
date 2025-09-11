$(document).ready(function () {
  function validateField(input) {
    let field = $(input);
    let value = field.val().trim();
    let errorSpan = $("#" + field.attr("name") + "Error");
    let validationType = field.data("validation") || "";
    let minLength = field.data("min") || 0;
    let maxLength = field.data("max") || 9999;
    let filesize = field.data("filesize") || 0;

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
      if (
        validationType.includes("strongPassword") &&
        !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).{8,}$/.test(value)
      ) {
        errorMessage =
          "Password must be at least 8 characters, including uppercase and lowercase letters, numbers, and a special character.";
      }
      // Confirm password validation
      if (validationType.includes("confirmPassword")) {
        let confirmPassword = field.val().trim();
        let password = $("#" + field.data("password-id"))
          .val()
          .trim();
        if (confirmPassword !== password) {
          errorMessage = "Passwords do not match.";
        }
      }
      // Terms and Conditions validation
      if (validationType.includes("terms") && !field.is(":checked")) {
        errorMessage = "You must agree to the Terms & Conditions.";
      }
      // Alphabetical validation
      if (validationType.includes("alpha") && !/^[A-Za-z\s]+$/.test(value)) {
        errorMessage = "Only letters are allowed.";
      }
      // Numeric validation
      if (validationType.includes("numeric") && !/^\d+$/.test(value)) {
        errorMessage = "Only numbers are allowed.";
      }
      // Min length validation
      if (validationType.includes("min") && value.length < minLength) {
        errorMessage = `Must be at least ${minLength} characters.`;
      }
      // Max length validation
      if (validationType.includes("max") && value.length > maxLength) {
        errorMessage = `Must be less than ${maxLength} characters.`;
      }
      // File validation
      if (validationType.includes("file") && field[0].files.length > 0) {
        let file = field[0].files[0];
        let fileName = file.name;
        let fileSizeKB = file.size / 1024;

        if (!/\.(jpg|jpeg|png)$/i.test(fileName)) {
          errorMessage = "Only JPG, JPEG, or PNG files are allowed.";
        } else if (
          validationType.includes("filesize") &&
          fileSizeKB > filesize
        ) {
          errorMessage = `File size must be less than ${filesize} KB.`;
        }
      } else if (
        validationType.includes("file") &&
        field[0].files.length === 0
      ) {
        errorMessage = "Please upload a file.";
      }
      // Select field validation
      if (
        field.is("select") &&
        validationType.includes("required") &&
        (value === "" || field.find("option:selected").index() === 0)
      ) {
        errorMessage = "Please select an option.";
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

  //validate on change or input
  $("input, textarea, select").on("input change", function () {
    validateField(this);
  });
  // validate each filed on submit
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
