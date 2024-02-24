'use strict';
const allSections = document.querySelectorAll('.section');

const revealSection = function (entries, observer) {
  const [entry] = entries;

  if (!entry.isIntersecting) return;

  entry.target.classList.remove('section--hidden');
  observer.unobserve(entry.target);
};

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0.3,
});

allSections.forEach(function (section) {
  sectionObserver.observe(section);
  section.classList.add('section--hidden');
});

const langOptions = document.querySelector('#language').querySelectorAll('.dropdown-item');
const form = document.querySelector('#language');
const langField = document.querySelector('input[name="lang"]');
langOptions.forEach((option, i) => {
  option.addEventListener('click', function (e) {
    langField.value = this.dataset.lang;
    form.submit();
  })
});

grecaptcha.ready(function () {
  grecaptcha.execute('6LcfoosiAAAAAL_4FygpjFJQHVtGGjDxm3vUWom4', { action: 'ejemplo' })
    .then(function (token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token;
    });
});
