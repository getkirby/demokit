panel.plugin('demokit', {
  created(app) {

    setTimeout(function prefill() {
      let login = document.querySelector(".k-login-form");

      if (login) {
        let email    = login.querySelector("input[type=email]");
        let password = login.querySelector("input[type=password]");
        let user     = "demo@getkirby.com";
        let pw       = "demodemo";
        const event  = new Event('input', { bubbles: true });

        for (let i = 0; i < user.length; i++) {
          setTimeout(function type(){
            email.value += user.charAt(i);
            email.dispatchEvent(event);
            password.value += pw.charAt(i);
            password.dispatchEvent(event);
          }, i * 25);
        }
      }
    }, 750);
  }
});
