const txtarea = document.querySelector("#form__msg");

txtarea.addEventListener("input", (e) => {
  txtarea.style.height = "2.8rem";
  txtarea.style.height = (txtarea.scrollHeight + 2) / 10 + "rem";
});

