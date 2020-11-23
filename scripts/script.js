function verifica(reccod) {
    if(confirm("Tem certeza que deseja excluir permanentemente esse cadastro?")) {
        window.location = "excluir.php?idexc=" + reccod;
    }
}