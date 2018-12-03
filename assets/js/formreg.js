let  errorname = true;
var regexEmail= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var regexName= /^([ \u00c0-\u01ffa-zA-Z\.' \-]{3,})+$/;
var regexId= /^[0-9]+$/;
let  formemail = document.getElementsByName('regemail')[0];
let  formpwold = document.getElementsByName('usernr')[0];
let  formpwnew = document.getElementsByName('regpassword')[0];
let  formpwnewag = document.getElementsByName('regpasswordag')[0];
let  formusername = document.getElementsByName('regusername')[0];
let  form1 = document.getElementById('regok');


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
    if (this.value.match(regexId)&& this.value.length ===6) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgid').innerHTML = '';
        document.getElementById('msgid').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgid').innerHTML = 'Die falsche ID wurde eingetragen.';
        document.getElementById('msgid').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}

formpwnew.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formpwnew.onblur = function () {
    if (this.value.length >5) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgregpw').innerHTML = '';
        document.getElementById('msgregpw').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgregpw').innerHTML = 'Das Passwort muss min. 6 Zeichen lang sein.';
        document.getElementById('msgregpw').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}



formpwnewag.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formpwnewag.onblur = function () {
    if (this.value === formpwnew.value) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgregpwag').innerHTML = '';
        document.getElementById('msgregpwag').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgregpwag').innerHTML = 'Das Passwort muss identisch sein.';
        document.getElementById('msgregpwag').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}


formusername.onfocus = function () {
    this.setAttribute('style','background-color: transparent');
}

formusername.onblur = function () {
    if (this.value.match(regexName)&& this.value.length >3) {
        this.setAttribute('style','border-bottom-color: green; box-shadow: inset 0 -1px 0 0 green ');
        document.getElementById('msgreuser').innerHTML = '';
        document.getElementById('msgreuser').setAttribute('style','display:none');
        errorname = false;
    } else {
        this.setAttribute('style','border-bottom-color: red; box-shadow: inset 0 -1px 0 0 red ');
        document.getElementById('msgreuser').innerHTML = 'Der Username darf keine Sonderzeichen enthalten und muss min. 4 Zeichen enthalten.';
        document.getElementById('msgreuser').setAttribute('style','display:block; color:firebrick;');
        errorname = true;
    }
}


form1.addEventListener('regok',function (evt) { 

   if (errorname) {
      evt.preventDefault();
   }
});
