document.addEventListener("DOMContentLoaded", function() {
    // Obtener el formulario y los campos de entrada
    const form = document.getElementById("login-form");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
  
    // Agregar un evento de escucha para el envío del formulario
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Evitar el envío del formulario
  
      // Obtener los valores ingresados por el usuario
      const usernameValue = usernameInput.value;
      const passwordValue = passwordInput.value;
  
      // Validar los datos ingresados
      if (usernameValue === "Admin" && passwordValue === "CVCUCEI") {
        // Establecer una cookie o variable de sesión para indicar que el usuario ha iniciado sesión
        // Esto permite que otras páginas verifiquen si el usuario ha iniciado sesión correctamente
        document.cookie = "logged_in=true"; // Establecer una cookie
        sessionStorage.setItem("Logeado", "1")
        // Redirigir a la siguiente página (cambiar la URL a la deseada)
        window.location.href = "Pagina_principal.html";
      } else {
        // Mostrar mensaje de error
        alert("Usuario o contraseña incorrectos");
      }
    });
  });
  