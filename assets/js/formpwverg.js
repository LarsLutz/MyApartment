let  errorname = true;
var regexEmail= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let  formemail = document.getElementsByName('pwemail')[0];
let  form1 = document.getElementById('submit');
formemail.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formemail.onblur = function () {
    if (this.value.match(regexEmail)) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgemail').innerHTML = '';
        document.getElementById('msgemail').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgemail').innerHTML = 'Bitte geben sie eine korrekte Mailadresse ein';
        document.getElementById('msgemail').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
        
    }
  
}

form1.addEventListener('submit',function (evt) { 

   if (errorname) {
      evt.preventDefault();
   }
});


