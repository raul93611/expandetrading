'use strict';
grecaptcha.ready(function () {
  grecaptcha.execute('6LcfoosiAAAAAL_4FygpjFJQHVtGGjDxm3vUWom4', { action: 'ejemplo' })
    .then(function (token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token;
    });
});
