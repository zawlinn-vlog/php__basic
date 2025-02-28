"use strict";

// CHECK EMAIL

function checkEmail(email) {
  // const reg = /([a-zA-Z]+)\@([a-z]+)\.([a-z]{2,3}|[a-z]{2})/;
  const reg = /^[a-z?\d?\.?\-]+@[a-z?\.]+[a-z]{2,3}$/;

  let bol = reg.test(email);

  if (!bol) return false;

  return bol;
}

// CHECK PASSWORD

function checkPassword(password) {
  if (password.length >= 6) {
    // console.log("pas length is more than 6");
    const reg =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{6}/;
    const bol = reg.test(password);

    return bol;
  } else {
    return false;
  }
}

// console.log(checkPassword("oxford@317"));

function checkUsername(username) {
  const reg = /^[a-z?\d?\.?\-]+$/;

  const bol = reg.test(username);

  if (bol) {
    return bol;
  }

  return false;
}

function checkingState(bol, el) {
  // console.log(bol, el);
  if (bol) {
    el.classList.remove("invalid");
    el.classList.add("valid");
    el.nextElementSibling.style.visibility = "hidden";
    el.nextElementSibling.style.opacity = "0";

    if (el.id == "password") {
      // console.log(el.id);

      oldPass = password.value;

      // console.log(oldPass);
    }
  } else {
    el.classList.add("invalid");
    el.classList.remove("valid");
    el.nextElementSibling.style.visibility = "visible";
    el.nextElementSibling.style.opacity = "1";
  }
}

const username = document.querySelector("#username"),
  email = document.querySelector("#email"),
  password = document.querySelector("#password"),
  fullname = document.querySelector("#fullname"),
  confirmPass = document.querySelector("#cpass"),
  form = document.querySelector("form");

let oldPass;

if (email && password) {
  const inputArr = [email, password];
  const checkFunArr = [checkEmail, checkPassword];

  inputArr.forEach((val, ind) => {
    // console.log(val);
    if (val) {
      val.addEventListener("keyup", function () {
        const bol = checkFunArr[ind](val.value);

        checkingState(bol, val);
      });
    }

    return false;
  });
}

if (fullname) {
  fullname.addEventListener("keyup", function () {
    checkingState(fullname.value, fullname);
  });
}

if (confirmPass) {
  confirmPass.addEventListener("keyup", function () {
    console.log(oldPass == confirmPass.value);
    if (oldPass == confirmPass.value) {
      confirmPass.classList.remove("invalid");
      confirmPass.classList.add("valid");
      confirmPass.nextElementSibling.style.visibility = "hidden";
      confirmPass.nextElementSibling.style.opacity = "0";
    } else {
      confirmPass.classList.add("invalid");
      confirmPass.classList.remove("valid");
      confirmPass.nextElementSibling.style.visibility = "visible";
      confirmPass.nextElementSibling.style.opacity = "1";
    }
  });
}

/*

const levels = {
    1: "Very Weak",
    2: "Weak",
    3: "Medium",
    4: "Strong",
};

function checkPwd(pwd) {
    if (pwd.length > 15) {
        return console.log(pwd + " - Too lengthy");
    } else if (pwd.length < 8) {
        return console.log(pwd + " - Too short");
    }

    const checks = [
        /[a-z]/,     // Lowercase
        /[A-Z]/,     // Uppercase
        /\d/,        // Digit
        /[@.#$!%^&*.?]/ // Special character
    ];
    let score = checks.reduce((acc, rgx) => acc + rgx.test(pwd), 0);

    console.log(pwd + " - " + levels[score]);
}

let pwds = [
    "u4thdkslfheogica",
    "G!2ks",
    "GeeksforGeeks",
    "Geeks123",
    "GEEKS123",
    "Geeks@123#",
];

pwds.forEach(checkPwd);

*/

const ptype = document.querySelector("#posttype").value;

console.log(ptype);

const selectBox = document.querySelector("#selectpost");

console.log(selectBox.querySelectorAll("option"));

const opt = selectBox.querySelectorAll("option");

opt.forEach((el, ind) => {
  el.removeAttribute("selected");
});

opt[ptype].setAttribute("selected", true);
