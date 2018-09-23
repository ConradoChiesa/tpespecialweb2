'use strict';

document.addEventListener('DOMContentLoaded', function (){

    document.querySelectorAll(".link-barra").forEach(function(li) {
      li.addEventListener('click', f => cargar(li.dataset.url));
      cargarPortada();
    })
    let container = document.querySelector(".container-float");
    let main = document.getElementById('main');
        
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
          linksPortada();})
        .catch(error => main.innerHTML= 'Problema en el proceso '+ error)
    }

    function cargarTabla() {
        cargarDivTabla();
        bajarObjeto();
    }

    function bajarObjeto() {
        fetch(url)
        .then(r => r.json())
        .then(json => armarTabla(json))
        .catch(error => 'Problema en la operación '+error)
    }

});
