(function(){
	// Variables
	var lista = document.getElementById("lista"),
		tareaInput = document.getElementById("tareaInput"),
		btnNuevaTarea = document.getElementById("btn-agregar");
       

	// Funciones
	var agregarTarea = function(){
		var tarea = tareaInput.value,
			nuevaTarea = document.createElement("li"),
			enlace = document.createElement("a"),
			contenido = document.createTextNode(tarea);
        
  
		if (tarea === "") {
			tareaInput.setAttribute("placeholder", "Completa el campo");
			tareaInput.className = "error";
			return false;
		}
 
        
		// Agregamos el contenido al enlace
		enlace.appendChild(contenido);
		// Le establecemos un atributo href
		enlace.setAttribute("href", "#");
		// Agrergamos el enlace (a) a la nueva tarea (li)
		nuevaTarea.appendChild(enlace);
		// Agregamos la nueva tarea a la lista
		lista.appendChild(nuevaTarea);
 
		tareaInput.value = "";
 
		
             var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            }
          };
          xhttp.open("GET", "SANMARTIN.php?op=insert&t="+tarea, true);
          xhttp.send();  

        };

	var comprobarInput = function(){
		tareaInput.className = "";
		teareaInput.setAttribute("placeholder", "Agrega tu tarea");
	};
 
	// Eventos
 
	// Agregar Tarea
	btnNuevaTarea.addEventListener("click", agregarTarea);
 
	// Comprobar Input
	tareaInput.addEventListener("click", comprobarInput);
 
}());