let buttons = [];

function addCourse(button, x) {
  button.disabled = true;
  button.nextElementSibling.disabled = false;
  let elem = document.getElementById("+" + x);
  console.log(elem); // add this line to check the element
  buttons.push(elem);
}

function removeCourse(button, x) {
  button.disabled = true;
  button.previousElementSibling.disabled = false;
  let index = buttons.indexOf(document.getElementById("+" + x));
  if (index > -1) 
  {
	buttons.splice(index, 1);
  }
}

function check(){
	alert(buttons[0]);
}

