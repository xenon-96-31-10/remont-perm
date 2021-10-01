$(document).ready(function () {
    $("#phone").inputmask({"mask": "+7(999)999-9999","autoUnmask" : true, "removeMaskOnSubmit" : true });
    if(!document.getElementById('errors')){

    }else{
      var errors = document.getElementById('errors');
      window.scrollTo(0, $("#errors").offset().top);
    }
    if(!document.getElementById('success')){

    }else{
      var errors = document.getElementById('success');
      window.scrollTo(0, $("#success").offset().top);
    }
});
