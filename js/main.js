function abrirEmpreendimentos(){setTimeout(clicarEmpreendimentos, 750);}

function clicarEmpreendimentos(){
  let link_empreendimentos = document.querySelector("#link_empreendimentos");
  link_empreendimentos.click();
}

function getScroll(menu_atual){
  let main = document.querySelector("main");
  if(menu_atual != "home"){
    main.scrollIntoView();
  }
}



document.getElementById('menu-toggle').addEventListener('click', function() {
  const navbar = document.getElementById('navbar');
  const menuToggle = document.getElementById('menu-toggle');

  // Alterna a exibição da navbar
  navbar.classList.toggle('open');

  // Alterna o ícone do botão
  if (navbar.classList.contains('open')) {
    menuToggle.innerHTML = '&#10005;';
  } 
  else {
    menuToggle.innerHTML = '&#9776;';
  }
});

