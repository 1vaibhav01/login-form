const fname = $("#fname");
const lname = $("#lname");
const mobile = $("#mobile");
const email = $("#email");

const change = (element) => {
  element.click(() => {
    if (element.val() === "") {
      element.css("border", "2px solid red");
    } else {
      element.css("border", "");
    }
  });

  element.on("input", () => {
    if (element.val() !== "") {
      element.css("border", "");
    }
  });
};

change(fname);
change(lname);
change(mobile);
change(email);

let java = $("#java");
let php = $("#php");
let js = $("#js");

$(".php_container, .java_container, .js_container").hide();

php.on("change", updateContainers);
js.on("change", updateContainers);
java.on("change", updateContainers);

function updateContainers() {
  let phpChecked = php.is(":checked");
  let jsChecked = js.is(":checked");
  let javaChecked = java.is(":checked");

  if (!phpChecked && !javaChecked && !jsChecked) {
    $(".php_container, .java_container, .js_container").hide();
  } else if (phpChecked && javaChecked && jsChecked) {
    $(".php_container, .java_container, .js_container").show();
  } else if (phpChecked && javaChecked) {
    $(".php_container, .java_container").show();
    $(".js_container").hide();
  } else if (phpChecked && jsChecked) {
    $(".js_container, .php_container").show();
    $(".java_container").hide();
  } else if (jsChecked && javaChecked) {
    $(".js_container, .java_container").show();
    $(".php_container").hide();
  } else if (phpChecked) {
    $(".php_container").show();
    $(".js_container, .java_container").hide();
  } else if (jsChecked) {
    $(".js_container").show();
    $(".php_container, .java_container").hide();
  } else if (javaChecked) {
    $(".java_container").show();
    $(".php_container, .js_container").hide();
  }
}
