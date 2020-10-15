let projects = false
let contact = false

let navElementProjects = document.getElementById("nav-projects")
let projectElement = document.getElementById("projects")

let navElementContact = document.getElementById("nav-contact")
let contactElement = document.getElementById("contact")

navElementProjects.addEventListener("click", () => {
  projects ? setElements("p", "100vh", false, "My projects") : setElements("p", "0vh", true, "Close")
})

navElementContact.addEventListener("click", () => {
  contact ? setElements("c", "100vh", false, "Contact") : setElements("c", "0vh", true, "Close")
})


let setElements = (e, margin, p, text) => {
  if (e === "p"){
    projectElement.style.marginTop = `${margin}`;
    projectElement.style.zIndex = "10";
    projects = p;
    navElementProjects.innerText = `${text}`;
    if (contact){
      contactElement.style.marginTop = "100vh";
      contactElement.style.zIndex = "1";
      contact = false;
      navElementContact.innerText = `Contact`;
    }
  }

  else {
    contactElement.style.marginTop = `${margin}`;
    contactElement.style.zIndex = "10";
    contact = p;
    navElementContact.innerText = `${text}`;
    if (projects){
      projectElement.style.marginTop = "100vh";
      projectElement.style.zIndex = "1";
      projects = false;
      navElementProjects.innerText = `My projects`;
    }
  }
}

let projectsMargin = () => {
  let pageHeight = document.body.scrollHeight;
  let element = document.getElementById('projects-content');
  let elementHeight = element.clientHeight;

  let elementMargin = (pageHeight - elementHeight) / 2;
  element.style.paddingTop = `${elementMargin}px`;
}

window.onload = () => {
  const landingText = document.getElementsByClassName("landing__line-text");
  for (let i = 0; i < landingText.length; i++) {
    landingText.item(i).classList.add("visible");
  }
  projectsMargin();
}

window.addEventListener('resize', projectsMargin);
