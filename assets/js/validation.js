function validation_name() {
    var form = document.getElementById("form");
    var name = document.getElementById("name").value;
    var text_name = document.getElementById("text_name");
    var pattern_name = /^[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{0,}\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,}(\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,})?$/;
    if (name.match(pattern_name)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_name.innerHTML = "";
        text_name.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_name.innerHTML = "Введите корректное имя";
        text_name.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}
function validation_city() {
   var form = document.getElementById("form");
   var name = document.getElementById("city").value;
   var text_name = document.getElementById("text_city");
   var pattern_name = /^[А-ЯA-Z][а-яa-zА-ЯA-Z\-]+(?:[\s-][А-ЯA-Z][а-яa-zА-ЯA-Z\-]+)*$/;
   if (name.match(pattern_name)) {
       form.classList.add("valid");
       form.classList.remove("invalid");
       text_name.innerHTML = "";
       text_name.style.color = "#0b00ab";
       document.getElementById("sub").disabled=false;
   }
   else {
       form.classList.remove("valid");
       form.classList.add("invalid");
       text_name.innerHTML = "Пожалуйста заполните поле корректно";
       text_name.style.color = "#000000";
       document.getElementById("sub").disabled=true;
   }
}