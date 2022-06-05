(function () {
  emailjs.init("IH0qa6bFcB3KVWPaA");
})();

const contactForm = document.querySelector(".contact-me__form");
contactForm.addEventListener("submit", function (event) {
  event.preventDefault();
  const name = this.name.value
  const email = this.email.value
  const message = this.message.value

  emailjs.send("service_mt77159", "template_8sqauxr", {
    to_name: 'Isaac',
    from_name: name,
    email: email,
    message: message
  }, "IH0qa6bFcB3KVWPaA").then(response => {
    const contactSectionContainer = document.querySelector(".contact-me .mycontainer")
    const content = `<h2 style='margin-bottom:1rem'>Sent ✔</h2>
                     <p>Thank you for reaching out🤝, I'll be in touch.</p>`
    contactSectionContainer.innerHTML = content;
    contactSectionContainer.style.textAlign = "center";
    contactSectionContainer.style.paddingBottom = "4rem";
  }).catch(err => {
    alert("Failed...", err)
  })
})
