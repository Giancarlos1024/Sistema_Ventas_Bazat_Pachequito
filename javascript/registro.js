// Aquí puedes agregar cualquier validación que necesites para el formulario de registro
// Por ejemplo, puedes verificar que la contraseña y la confirmación de la contraseña sean iguales

const form = document.querySelector('.form');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  // Aquí puedes enviar los datos del formulario a un servidor o hacer cualquier otra acción necesaria
  console.log('User registered successfully');
});
