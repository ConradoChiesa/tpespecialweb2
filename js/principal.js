'use strict';
document.addEventListener("DOMContentLoaded", function(){
    
    let main = document.getElementById('main');
    let server = 'http://web-unicen.herokuapp.com/api/groups/';
    let url = server+'PocaiMatias82/tpespecial/';
    cargarPortada();
    document.getElementsByClassName('link-barra')[0].addEventListener('click', cargarPortada);
    document.getElementsByClassName('link-barra')[1].addEventListener('click', cargarContacto);
    document.getElementsByClassName('link-barra')[2].addEventListener('click', cargarTabla);

    function cargarPortada() {
        fetch('htmls/portada.html')
        .then(r => r.text())
        .then(html => {main.innerHTML = html; escucharNoticias();})
        .catch(error => main.innerHTML= 'Problema en el proceso '+error)
    }

    function escucharNoticias() {
        document.querySelector('.articulo-uno').addEventListener('click', function(){
            fetch('htmls/mafalda.html')
            .then(r => r.text())
            .then(html => main.innerHTML = html)
            .catch(error => main.innerHTML = 'Problema en el proceso '+error)
        });
        document.querySelector('.articulo-dos').addEventListener('click', function(){
            fetch('htmls/chapulin.html')
            .then(r => r.text())
            .then(html => main.innerHTML = html)
            .catch(error => main.innerHTML = 'Problema en el proceso '+error)
        });
        document.querySelector('.articulo-tres').addEventListener('click', function(){
            fetch('htmls/sandokan.html')
            .then(r => r.text())
            .then(html => main.innerHTML = html)
            .catch(error => main.innerHTML = 'Problema en el proceso '+error)
        });
        document.querySelector('.articulo-cuatro').addEventListener('click', function(){
            fetch('htmls/superagente.html')
            .then(r => r.text())
            .then(html => main.innerHTML = html)
            .catch(error => main.innerHTML = 'Problema en el proceso '+error)
        });
    }
    
    function cargarContacto() {
        fetch('htmls/contacto.html')
        .then(r => r.text())
        .then(html => main.innerHTML = html)
        .catch(error => main.innerHTML = 'Problema en el proceso '+error)
    }

    function cargarTabla() {
        cargarDivTabla();
        bajarObjeto();
    }

    function cargarDivTabla() {
        fetch('htmls/tabla.html')
        .then(r => r.text())
        .then(html => main.innerHTML = html)
        .catch(error => error)
    }

    function bajarObjeto() {
        fetch(url)
        .then(r => r.json())
        .then(json => armarTabla(json))
        .catch(error => 'Problema en la operación '+error)
    }

    function armarTabla(json) {
        let conteTabla = document.getElementById('divTab');
        let html = '<table>';
        html += '<h2 class="argentinos">Personajes argentinos</h2>'
        html += '<thead><th>Personaje</th><th>Nacimiento<br><select id="filtro"><option value="value1">1750-1799</option>';
        html += '<option value="value2" selected>1800-1849</option><option value="value3">1850-1899</option>';
        html += '<option value="value4">1900-1949</option><option value="value5">1950-2000</option>';
        html += '<option value="value6" selected>Ver Todos</option></select><td>Actividad</th></thead>';
        for (let i=0; i<json.tpespecial.length; i++) {
            let personaje = json.tpespecial[i].thing.personaje;
            let nacimiento = json.tpespecial[i].thing.nacimiento;
            let actividad = json.tpespecial[i].thing.actividad;
            html+='<tr class="verde"><td>'+personaje+'</td><td>'+nacimiento+'</td><td>'+actividad+'</td>';
            html+= '<td><button name="borrar">Borrar fila</button></td><td><button name="editar">Editar fila</button></td></tr>';
        }
        html += '</table><div id="mensaje"></div><div class="debajoDeTabla">';
        html += '<input type="text" id="input-perso" placeholder="Personaje" value=""/>';
        html += '<input type="text" id="input-naci" placeholder="Año nacimiento"  value=""/>';
        html += '<select id="actividad"><option value="Artística">Artística</option>';
        html += '<option value="Política" selected>Política</option><option value="Deportiva">Deportiva</option>';
        html += '<option value="Científica">Científica</option><option value="Otra">Otra</option>';
        html += '<option value="Sin definir" selected>Definir actividad</option></select>';
        html += '<div class="div-botones"><button id="btn-enviar">Crear personaje</button>';
        html += '<button id="btnCrear3Filas">Crear tres filas</button>';
        html += '<button id="btn-mostrarTabComple">Mostrar tabla completa</button></div></div>';
        conteTabla.innerHTML += html;
        escucharEventosTabla(json, conteTabla);
    }
   
    function escucharEventosTabla(json, conteTabla){
        document.getElementById('btn-enviar').addEventListener('click', crearFila);
        document.getElementById('btnCrear3Filas').addEventListener('click', crearTresFilas);
        document.getElementById('btn-mostrarTabComple').addEventListener('click', function() {
            mostrarTabCompleta(json, conteTabla);
        });
        document.getElementById('filtro').addEventListener('click', function() {
            let valorNacimiento = document.getElementById('filtro').value;
            filtrar(json, conteTabla, valorNacimiento);
        });
        for (let i=0; i<json.tpespecial.length; i++) {
            document.getElementsByName('borrar')[i].addEventListener('click', function() {
            borrarFila(json, i);
        });
        document.getElementsByName('editar')[i].addEventListener('click', function() {
                editarFila(json, i);
        });
        }
        filtrarActividad(json, conteTabla);
    }

    function crearFila() {
        let personaje = document.getElementById('input-perso').value;
        let nacimiento = document.getElementById('input-naci').value;
        let actividad = document.getElementById('actividad').value;
        if (!(personaje === '' || nacimiento === '')){
            let data = {
                "personaje": personaje,
                "nacimiento": nacimiento,
                "actividad": actividad
            }
            let objeto = {
                "thing": data
            }
            fetch(url, {
                method: 'POST',
                mode: 'cors',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(objeto)
            })
            .then(r => {r.json(); cargarTabla();})
            .catch(error => console.log(error))
        } else {
             mensaje.innerHTML='<h4>Agregar "personaje" y "fecha de nacimiento".</h4>';
        }
    }
   
    function editarFila(json, i) {
      let ide = json.tpespecial[i]._id;
      let personaje = document.getElementById('input-perso').value;
      let nacimiento = document.getElementById('input-naci').value;
      let actividad = document.getElementById('actividad').value;
      if (!(personaje === '' || nacimiento === '')){
          let data = {
              "personaje": personaje,
              "nacimiento": nacimiento,
              "actividad": actividad
          }
          let objeto = {
              "thing": data
          }
          fetch(url+ide, {
              method: 'PUT',
              mode: 'cors',
              headers: {'Content-Type': 'application/json'},
              body: JSON.stringify(objeto)
          })
          .then(r => cargarTabla())
          .catch(error => console.log(error))
      } else {
           mensaje.innerHTML='<h4>Agregar "personaje" y "fecha de nacimiento".</h4>';
      }
    }

    function borrarFila(json, i) {
        let ide = json.tpespecial[i]._id;
        fetch(url+ide, {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}
        })
        .then(r => cargarTabla())
        .catch(error => console.log(error))
        }

    function crearTresFilas() {
        let personaje = document.getElementById('input-perso').value;
        let nacimiento = document.getElementById('input-naci').value;
        let actividad = document.getElementById('actividad').value;
        if (!(personaje === '' || nacimiento === '')){
            let data = {
                "personaje": personaje,
                "nacimiento": nacimiento,
                "actividad": actividad
            }
            let objeto = {
                "thing": data
            }
            for (let i=0; i<3; i++) {
                fetch(url, {
                method: 'POST',
                mode: 'cors',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(objeto)
                })
                .catch(error => console.log(error))
            }
            setTimeout(cargarTabla, 600);
        } else {
            mensaje.innerHTML='<h4>Agregar "personaje" y "fecha de nacimiento".</h4>';
        }
    }
    
    function filtrar(json, conteTabla, valorNacimiento) {
        if (valorNacimiento=='value1'){
            for (let i=0; i<json.tpespecial.length; i++) {
                let fechaNacimiento = parseInt(json.tpespecial[i].thing.nacimiento);
                if (!((fechaNacimiento>1749)&&(fechaNacimiento<1800))) {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.add('oculta');
                } else {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.remove('oculta');        
                } 
            }
        } else if (valorNacimiento=='value2'){
            for (let i=0; i<json.tpespecial.length; i++) {
                let fechaNacimiento = parseInt(json.tpespecial[i].thing.nacimiento);
                if (!((fechaNacimiento>1799)&&(fechaNacimiento<1850))) {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.add('oculta');
                } else {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.remove('oculta');        
                } 
            }
        } else if (valorNacimiento=='value3'){
            for (let i=0; i<json.tpespecial.length; i++) {
                let fechaNacimiento = parseInt(json.tpespecial[i].thing.nacimiento);
                if (!((fechaNacimiento>1849)&&(fechaNacimiento<1900))) {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.add('oculta');
                } else {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.remove('oculta');        
                } 
            }
        } else if (valorNacimiento=='value4'){
            for (let i=0; i<json.tpespecial.length; i++) {
                let fechaNacimiento = parseInt(json.tpespecial[i].thing.nacimiento);
                if (!((fechaNacimiento>1899)&&(fechaNacimiento<1950))) {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.add('oculta');
                } else {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.remove('oculta');        
                } 
            }
        } else if (valorNacimiento=='value5'){
            for (let i=0; i<json.tpespecial.length; i++) {
                let fechaNacimiento = parseInt(json.tpespecial[i].thing.nacimiento);
                if (!(fechaNacimiento>1949)) {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.add('oculta');
                } else {
                    conteTabla.getElementsByTagName('tr')[i+1].classList.remove('oculta');        
                } 
            } 
        } else if (valorNacimiento == 'value6') {
            mostrarTabCompleta(json, conteTabla);
        }
    }

    function mostrarTabCompleta(json, conteTabla) {
        for (let i=0; i<json.tpespecial.length; i++) {
            conteTabla.getElementsByTagName('tr')[i+1].classList.replace('oculta', 'deportiva');
        }
    }

    function filtrarActividad(json, conteTabla) {
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Política') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('politica');
            }
        } 
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Deportiva') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('deportiva');
            }
        }
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Científica') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('cientifica');
            }
        }
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Artística') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('artistica');
            }
        }
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Otra') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('otra');
            }
        }
        for (let i=0; i<json.tpespecial.length; i++) {
            if (json.tpespecial[i].thing.actividad ==='Sin definir') {
                conteTabla.getElementsByTagName('tr')[i+1].classList.add('otra');
            }
        }
    }
});