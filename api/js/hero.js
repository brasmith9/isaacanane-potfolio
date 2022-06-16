"user strict";

const headerContent = document.getElementsByClassName(".details");
const headerP = document.querySelector(".header .hero .content .ctas");
let headerMain = document.querySelectorAll(
  ".header .hero .content .freelance-h1"
);

function setHeaderMain() {
  headerMain = document.querySelectorAll(
    ".header .hero .content .freelance-h1"
  );
}

function removeH1() {
  headerMain = document.querySelectorAll(
    ".header .hero .content .freelance-h1"
  );
  // headerMain.forEach((header) => headerContent.removeChild(header));
  headerMain.forEach((header) => header.remove());
}

const wait = (ms) => new Promise(resolve => setTimeout(resolve, ms))
async function stack () {
    let span = document.getElementById("stack");
    let stackBoss = document.getElementById("stack_boss");
    for ( const stack of [ 'Frontend', 'Backend', 'Content', 'Fullstack' ] ) {
      span.innerText = stack;
      if(stack != 'Fullstack'){
        await wait(7000);
      }else{
        await wait(3500);
        stackBoss.classList.remove("typewriter")
        stackBoss.classList.add("typewriter-done")
      }
    }
}

stack();