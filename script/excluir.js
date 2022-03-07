function verifica(recid) {
    if (confirm("Tem certeza que deseja excluir este cadastro?")) {
        window.location="excluir.php?idexc=" + recid;
    }
}