'use strict';

  document.addEventListener('DOMContentLoaded', function (){

    document.querySelectorAll(".link-barra").forEach(function(li) {
      li.addEventListener('click', f => cargar(li.dataset.url));
      cargarPortada();
    })
    let container = document.querySelector(".container-float");
    let main = document.getElementById('main');
    let server = 'http://web-unicen.herokuapp.com/api/groups/';
    let url = server+'PocaiMatias82/tpespecial/';

    //Funcion agregada por Conrado para partialRender
    function cargar(url) {
      fetch(url)
        .then(r => r.text())
        .then(url => container.innerHTML = url)
        .then(linksPortada, cargarTabla );
      }
      function linksPortada() {
        let img = document.querySelectorAll(".imagenprincipal");
          if (img) {
            img.forEach(function(imagen) {
            imagen.addEventListener('click', event =>
            cargar(imagen.dataset.url));
          });
        }
      }
    function cargarPortada() {
        fetch('htmls/portada.html')
        .then(r => r.text())
        .then(html => {container.innerHTML = html;
          linksPortada();
        })
        .catch(error => main.innerHTML= 'Problema en el proceso '+ error)
    }
    function cargarTabla() {
        cargarDivTabla();
        bajarObjeto();
    }

    // function cargarDivTabla() {
    //     fetch('htmls/tabla.html')
    //     .then(r => r.text())
    //     .then(html => main.innerHTML = html)
    //     .catch(error => error)
    // }

    function bajarObjeto() {
        fetch(url)
        .then(r => r.json())
        .then(json => armarTabla(json))
        .catch(error => 'Problema en la operación '+error)
    }

    function armarTabla(json) {
        let conteTabla = document.getElementById('divTab');
        let html = document.getElementById('tbody');

        for (let i=0; i<json.tpespecial.length; i++) {
            let personaje = json.tpespecial[i].thing.personaje;
            let nacimiento = json.tpespecial[i].thing.nacimiento;
            let actividad = json.tpespecial[i].thing.actividad;
            html+='<tr class="verde"><td>'+personaje+'</td><td>'+nacimiento+'</td><td>'+actividad+'</td>';
            html+= '<td><button name="borrar">Borrar fila</button></td><td><button name="editar">Editar fila</button></td></tr>';
        }

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
