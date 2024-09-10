const primaryColor = "white";
const secondColor = "rgb(177, 177, 177)";
const btnDescription = document.querySelector("#btn-description");
const btnItinerario = document.querySelector("#btn-itinerario");
const btnDate = document.querySelector("#btn-date");

function changeColor(colorOne, colorTwo, colorThree) {
  btnDescription.style.color = colorOne;
  btnItinerario.style.color = colorTwo;
  btnDate.style.color = colorThree;
}

function changeColorTitle(titleId) {
  if (titleId == "#btn-description") {
    changeColor(primaryColor, secondColor, secondColor);
  }
  if (titleId == "#btn-itinerario") {
    changeColor(secondColor, primaryColor, secondColor);
  }
  if (titleId == "#btn-date") {
    changeColor(secondColor, secondColor, primaryColor);
  }
}

function changeContent(description, itinerario, date, titleId) {
  document.querySelector("#content-description").style.display = description;
  document.querySelector("#content-itinerario").style.display = itinerario;
  document.querySelector("#content-date").style.display = date;
  changeColorTitle(titleId);
}

btnDescription.addEventListener("click", () =>
  changeContent("flex", "none", "none", "#btn-description")
);
btnItinerario.addEventListener("click", () =>
  changeContent("none", "flex", "none", "#btn-itinerario")
);
btnDate.addEventListener("click", () =>
  changeContent("none", "none", "flex", "#btn-date")
);
