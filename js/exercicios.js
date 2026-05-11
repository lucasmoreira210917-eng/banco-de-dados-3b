document.addEventListener('DOMContentLoaded', () => {
    const tabela =new tabellainterativa({
        tabelaId: 'tabela-exercicios',
        filtroId: 'campo-filtro',
        msgVazioId: 'msg-vazio'
    });
    tabela.iniciar();
});