function validar(){
    let nombre = document.getElementById('nombre').value;
    let contacto = document.getElementById('contacto').value;
   
  
    // Valida que el campo de nombre no tenga números y que se mayor de 3 caracteres
    const nombrevalido = /^[a-zA-Z ]+$/;
    if (!nombrevalido.test(nombre) && nombre.length < 3) {
      alert('El nombre no puede contener números y debe tener al menos 3 caracteres');
      return; 
    }
  
    // Valida que el campo de numero no tenga letras
    const contactovalido = /^\d{6,}$/;
    if (!contactovalido.test(contacto)) {
      alert('El número de contacto debe tener al menos 6 dígitos y solo puede contener números');
      return;
    }
  }