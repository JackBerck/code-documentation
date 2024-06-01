const colorButton = document.getElementById("colorButton");
const button = document.createElement("button");
const textButton = document.createTextNode("Random Color!");
const sRed = document.querySelector('input[name=sRed]');
const sGreen = document.querySelector('input[name=sGreen]');
const sBlue = document.querySelector('input[name=sBlue]');

colorButton.onclick = function() {
  document.body.style.backgroundColor = 'transparent';
  document.body.classList.toggle("color");
}

button.appendChild(textButton);
button.setAttribute('type', 'button');
colorButton.after(button);
button.addEventListener('click', function() {
  const r = Math.round(Math.random() * 255 + 0);
  const g = Math.round(Math.random() * 255 + 0);
  const b = Math.round(Math.random() * 255 + 0);
  document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +'';
});

sRed.addEventListener('input', function() {
  const r = sRed.value;
  const g = sGreen.value;
  const b = sBlue.value;
  document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});

sGreen.addEventListener('input', function() {
  const r = sRed.value;
  const g = sGreen.value;
  const b = sBlue.value;
  document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});

sBlue.addEventListener('input', function() {
  const r = sRed.value;
  const g = sGreen.value;
  const b = sBlue.value;
  document.body.style.backgroundColor = 'rgb('+ r +', '+ g +', '+ b +')';
});




// tambahan

document.body.addEventListener("mousemove", function(event) {
  const xPos = Math.round((event.clientX / innerWidth) * 255);
  const yPos = Math.round((event.clientY / innerHeight) * 255);
  document.body.style.backgroundColor = 'rgb('+ xPos + ', '+ yPos +', 0)'
});