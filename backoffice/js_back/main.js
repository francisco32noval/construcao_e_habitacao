function confirmarApagar() {

    var resposta = confirm("Tem a certeza que deseja apagar?");
    
    if (resposta) {
      
      alert("Item apagado com sucesso!");
  
    } 
    else {
      
        alert("Ação cancelada.");
    }

}