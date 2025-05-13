    
    const messageField = document.getElementById('message');
    const charCounter = document.getElementById('charCounter');

    messageField.addEventListener('input', () => {
      charCounter.textContent = `${messageField.value.length} / 500`;
    });

    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function (event) {
      event.preventDefault();

       const formData = new FormData(form);

      fetch('submit.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        if (data === 'success') {
          alert('Thank you! Your information has been submitted.');
          form.reset();
          charCounter.textContent = '0 / 500';
        } else {
          alert("Thank you for contacting ACCE10X. Error occured please try again!");
        }
      });
    });

