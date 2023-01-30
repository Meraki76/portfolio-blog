function confirmClear() {
  var x = confirm("Are you sure you want to delete?");
  if (x) {
      return true; }
  else {
    return false; }
}

function resetColour() {
  document.getElementById("title").style.backgroundColor = null;
  document.getElementById("comment").style.backgroundColor = null;
}



function defaultPrevention() {
      if (document.getElementsByName("title")[0].value == "" && document.getElementsByName("comment")[0].value == "" )
      {
          document.getElementById("title").style.backgroundColor = "blue";
          document.getElementById("comment").style.backgroundColor = "blue";
          alert("Title and comment missing!");
      }
      else if (document.getElementsByName("title")[0].value == "") {
          document.getElementById("title").style.backgroundColor = "blue";
          document.getElementById("comment").style.backgroundColor = null;
          alert("Title missing!");
      }
      else if (document.getElementsByName("comment")[0].value == "") {
          document.getElementById("comment").style.backgroundColor = "blue";
          document.getElementById("title").style.backgroundColor = null;
          alert("Comment missing!");
      }
  }

const contact = document.getElementById("contact");

contact.addEventListener('mouseenter', () => {
  contact.style.right = '1em';
  console.log('Mouse enter the contact element!'); 
});

contact.addEventListener('mouseleave', () => {
    contact.style.right = '-17em';
    console.log('Mouse left the contact element!'); 
});

const selectMonth = document.getElementById("month");

selectMonth.addEventListener('change', () => {
  var x = document.getElementById("month").value;
});