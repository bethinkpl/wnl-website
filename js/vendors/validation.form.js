// VALIDATION "PLUGIN"
+function ($) {
  'use strict';

  function Validation(form, i) {
    this.form = form;
    this.fields = this.form.querySelectorAll("[data-validation-custom='true']"); // The fields that you want to validate
    this.errors = [];

    if (!this.fields.length) {
      return false;
    }

    this.setError(i);

    this.form.onsubmit = function(e) {
      e.preventDefault();

      var formValid = this.validate();

      if (formValid) { // If form validation success
        var path = this.form.dataset.postPath;
        var status = this.send(this.form, path);
        this.eventValid(this.form.dataset.eventValidName);

        if (status) {
          this.clearInput(this.form);
          this.showStatement(this.form.dataset.eventSendSuccessName);
        } else {
          this.showStatement(this.form.dataset.eventSendErrorName);
        }
      } else {
        this.eventNotValid(this.form.dataset.eventNotValidName);
        return false; // Old browser        
      }      
    }.bind(this);

    this.form.addEventListener('keyup', function(e){
      var el = e.target;

      if (el.dataset.validationCustom === 'true') {
        console.log(el.dataset.validationCustom);
        var validFiled = this.validateField(el);
      }
    }.bind(this));
  }

  Validation.prototype.setError = function(i) {
    for (var a = 0; a < this.fields.length; a++) {
      var id = 'error'+ i +'_'+ a +'';
      $(this.fields[a]).attr('data-error-id', id);

      if ($(this.fields[a]).attr('data-show-error') === "false") {
        return 0;
      }

      $('<p class="errorMessage" id="'+id+'" style="display: none;"></p>').insertAfter(this.fields[a]);
    }
  }

  Validation.prototype.validate = function() {
    this.clearErrors();

    for (var a = 0; a < this.fields.length; a++) {
      var Valid = this.validateField(this.fields[a]);
    }

    if (!this.errors.length) {
      return true;
    } else {
      return false;
    }
  }

  Validation.prototype.validateField = function(field) {
    var fieldValid = this.checkField(field);

    if (fieldValid) {
      this.markAsValid(field);
    } else {
      this.errors.push(field.dataset.errorMessage);
      this.markAsInvalid(field);
    }

    return fieldValid;
  }

  Validation.prototype.checkField = function(field) {
    if (field.value == "") {
      if (field.dataset.mayBeEmpty) {
        $(field).addClass('emptyIsValid');
        return true;
      }
      return false;
    } else {
      if (field.dataset.mayBeEmpty) {
        $(field).removeClass('emptyIsValid');
      }
      return this.checkAddValidation(field);
    }
  }

  Validation.prototype.checkAddValidation = function(field) {
    if (field.dataset.typeValidation == "SocialSecurityNumber") {
      return this.checkSocialSecurityNumber(field);
    } else if (field.dataset.typeValidation == "Date") {
      return this.checkDate(field);
    } else if (field.dataset.typeValidation == "Email") {
      return this.checkEmail(field);
    } else if (field.dataset.typeValidation == "RepeatEmail") {
      return this.checkRepeatEmail(field);
    } else if (field.dataset.typeValidation == "ZipCode") {
      return this.checkZipCode(field);
    } else if (field.dataset.typeValidation == "AcceptRegulations") {
      return this.checkAcceptRegulations(field);
    } else if (field.dataset.typeValidation == "Number") {
      return this.checkNumber(field);
    } else {
      return true;
    }
  }

  Validation.prototype.checkSocialSecurityNumber = function(field, parent) {
    var reg = /^[0-9]{11}$/;    
    if (reg.test(field.value)) {      
      var ssn = field.value.split("");
      var weights = [1,3,7,9], sum = 0, control = 0;
      for (var i = 0; i < 10; i++) {
        sum += ssn[i] * weights[i%4];
      }
      sum = sum % 10;
      if (sum != 0) {
        control = 10 - sum;
      }      

      if (control == ssn[10]) {
        return true;
      } else {
        return false;
      }     
    }
    else { 
      return false;      
    }   
  }  

  Validation.prototype.checkDate = function(field) {
    var day = field.value.substring(0,2);
    var month = field.value.substring(3,5);
    if ((day >= 1 && day <= 31) && (month >= 1 && month <= 12)) {
      return true;
    } else {
      return false;
    }
  }

  Validation.prototype.checkEmail = function(field) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
    if (reg.test(field.value)) {
      return true;
    } else {
      return false;
    }
  }

  Validation.prototype.checkRepeatEmail = function(field) {
    if (field.value == $('[data-email-repeat="true"]').val()) {
      return true;
    } else {
      return false;
    }
  }

  Validation.prototype.checkZipCode = function(field) {
    var reg = /^[0-9]{2}-[0-9]{3}$/;    
    if (reg.test(field.value) && field.value != "00-000") {      
      return true;      
    }
    else {
      return false;      
    }
  }

  Validation.prototype.checkAcceptRegulations = function(field) {
    if (field.checked) {
      return true;
    } else {
      return false;
    }
  }

  Validation.prototype.checkNumber = function(field) {
    var reg = /^[0-9]{1,12}$/;    
    if (reg.test(field.value)) {      
      return true;      
    }
    else {
      return false;      
    }
  }

  Validation.prototype.markAsValid = function(field) {
    field.classList.remove("invalid");
    field.classList.add("valid");
    this.hideError(field);
  }

  Validation.prototype.markAsInvalid = function(field) {
    field.classList.remove("valid");
    field.classList.add("invalid");
    this.showError(field);
  }

  Validation.prototype.hideError = function(field) {
    if ($(field).attr('data-show-error') === "false") {
      return 0;
    }

    var element = $(field).data('errorId');
    var el = document.getElementById(element);
    el.innerHTML = "";
    $(el).hide();
  }

  Validation.prototype.showError = function(field) {
    if ($(field).attr('data-show-error') === "false") {
      return 0;
    }

    var element = $(field).data('errorId');
    var el = document.getElementById(element);
    el.innerHTML = field.dataset.errorMessage;
    $(el).show();
  }

  Validation.prototype.clearErrors = function() {
    this.errors.length = 0;
  }

  Validation.prototype.clearInput = function(form) {
    $(form).trigger("reset");
    $(form).find('input, textarea').removeClass("valid");
  }

  Validation.prototype.eventValid = function(functionName) {
    if (!functionName) {
      return false;
    }

    eval(functionName + '()');
  }

  Validation.prototype.eventNotValid = function(functionName) {
    if (!functionName) {
      return false;
    }

    eval(functionName + '()');
  }

  Validation.prototype.showStatement = function(functionName) {
    if (!functionName) {
      return false;
    }

    eval(functionName + '()');
  }

  Validation.prototype.send = function(form, path) {
    // try send information from back-end script
    var request = $.ajax({
      type: 'post',
      url: path,
      async: false,
      data: $(form).serialize(),
      success: function (data) {
        if (data === 'success') {
          return true;        
        } 
        else if (data === 'error') {
          return false;
        }           
      },
      error: function (data) {
        return false;
      }
    });

    return request;
  }

  // CREATE NEW OBJECT TO VALIDATION
  var validation = new Array();
  $('form').each(function (i, val) {
    validation[i] = new Validation(this, i);
  });

  // CONVERT SPECIFIC FORMAT TO NORMAL DATE
  function changeDate(y, m, d) {
    if(m > 80) {
      y += 1800;
      m -= 80;
    } else if(m > 60) {
      y += 2200;
      m -= 60;
    } else if (m > 40) {
      y += 2100;
      m -= 40;
    } else if (m > 20) {
      y += 2000;
      m -= 20;
    } else {
      y += 1900;
    }

    var date = {
        year:y, 
        month:m,
        day:d
    };

    return date;
  }

  // ADD "0" IN DATE
  function addZero(number, count) {
    var num = number.toString();    
    while (num.length < count) {
      num = "0" + num;      
    }    
    return num;
  }

}(jQuery);