
const contact = document.getElementById("contact");

contact.addEventListener('mouseenter', () => {
  contact.style.right = '1em';
  console.log('Mouse enter the contact element!'); 
});

contact.addEventListener('mouseleave', () => {
    contact.style.right = '-17em';
    console.log('Mouse left the contact element!'); 
});