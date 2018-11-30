let  errorname = true;
var regexEmail= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var regexName= /^([ \u00c0-\u01ffa-zA-Z\.' \-]{3,})+$/;
let  formemail = document.getElementsByName('newemail')[0];
let  formpwold = document.getElementsByName('passwordold')[0];
let  formpwnew = document.getElementsByName('passwordnew')[0];
let  formpwnewag = document.getElementsByName('passwordnewag')[0];
let  formusername = document.getElementsByName('newname')[0];
let  form1 = document.getElementById('pwchange');
let  form2 = document.getElementById('mailchange');
let  form3 = document.getElementById('namechange');

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

formpwold.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formpwold.onblur = function () {
    if (this.value.length >5) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgpwold').innerHTML = '';
        document.getElementById('msgpwold').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgpwold').innerHTML = 'Das Passwort muss min. 6 Zeichen lang sein.';
        document.getElementById('msgpwold').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}

formpwnew.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formpwnew.onblur = function () {
    if (this.value.length >5) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgpwnew').innerHTML = '';
        document.getElementById('msgpwnew').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgpwnew').innerHTML = 'Das Passwort muss min. 6 Zeichen lang sein.';
        document.getElementById('msgpwnew').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}

form1.addEventListener('submit',function (evt) { 

   if (errorname) {
      evt.preventDefault();
   }
});

formpwnewag.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formpwnewag.onblur = function () {
    if (this.value === formpwnew.value) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgpwnewag').innerHTML = '';
        document.getElementById('msgpwnewag').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgpwnewag').innerHTML = 'Das Passwort muss identisch sein.';
        document.getElementById('msgpwnewag').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}

form2.addEventListener('submit',function (evt) { 

   if (errorname) {
      evt.preventDefault();
   }
});

formusername.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formusername.onblur = function () {
    if (this.value.match(regexName)&& this.value.length >3) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgusername').innerHTML = '';
        document.getElementById('msgusername').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgusername').innerHTML = 'Der Username darf keine Sonderzeichen enthalten und muss min. 4 Zeichen enthalten.';
        document.getElementById('msgusername').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}


form3.addEventListener('submit',function (evt) { 

   if (errorname) {
      evt.preventDefault();
   }
});