document.addEventListener('DOMContentLoaded', () => {
    const tabela =new tabellainterativa({
        tabelaId: 'tabela-exercicios',
        filtroId: 'campo-filtro'
    });
    tabela.iniciar();
});