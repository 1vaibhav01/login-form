// console.log("first");

// class Validator {
//   constructor(formId) {
//     this.isValid = true;
//     this.err = $(".error");
//     this.unameEmail = $("#usernameEmail").val();
//     this.err.hide();

//     this.form = $(`#${formId}`);
//     this.form.on("submit", (e) => this.validate(e));
//   }

//   validateUserNameEmail = (txt) => {
//     // const re = /^[A-Za-z\.]+[A-Za-z]$/;
//     // const re2 = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

//     // return re.test(txt) || re2.test(txt);
//     return {};
//   };

//   validate = (e) => {
//     e.preventDefault();
//     this.err.empty();

//     if (!this.validateUserNameEmail(this.unameEmail)) {
//       this.err.css("color", "red");
//       this.err.append("Invalid Email or Username!");
//       this.err.show();
//       this.isValid = false;
//     } else {
//       this.err.hide();
//     }

//     if (this.isValid) {
//       e.target.submit();
//     }
//   };
// }

// $(document).on("DOMContentLoaded", () => {
//   const validator = new Validator("login-form");
// });


