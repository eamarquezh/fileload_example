
const nombre = document.getElementById('nombre');
const miArchivo = document.getElementById('miArchivo');
const botonCarga = document.getElementById('botonCarga');

botonCarga.addEventListener('click',()=>{uploadImagen_fetch(miArchivo,nombre.value)});


async function uploadImagen_fetch(datfile,datfile2) {

    var totalfiles = datfile.files.length;
    
    if(totalfiles > 0 ){
    
      var formData = new FormData();
    
      // Read selected files
      for (var index = 0; index < totalfiles; index++) {
        formData.append("file[]", datfile.files[0]);
        formData.append("newname", datfile2);
      }
    await fetch('loadfile.php',{method: "POST",body: formData})
    .then(response=>response.json())
        .then(data=>{
            console.log(data.result);
        });

    }else{
      alert("Please select a file");
    }
    }