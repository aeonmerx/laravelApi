fetch('http://127.0.0.1:8085/api/datos')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json();
})
.then(data => {
  // Obtener el contenedor donde deseas mostrar los datos
  const datosContainer = document.getElementById('datos-container');

  // Limpiar cualquier contenido previo en el contenedor
  datosContainer.innerHTML = '';

  // Iterar sobre cada objeto de datos y agregarlos al contenedor
  data.forEach(persona => {
    const personaDiv = document.createElement('div');
    personaDiv.innerHTML = `
      <p>Nombre: ${persona.nombre}</p>
      <p>Edad: ${persona.edad}</p>
      <p>Ciudad: ${persona.ciudad}</p>
      <hr>
    `;
    datosContainer.appendChild(personaDiv);
  });
})
.catch(error => {
  console.error('Hubo un problema con la operación fetch:', error);
});

