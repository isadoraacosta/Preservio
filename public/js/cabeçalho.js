            // scroll: rolagem 
            // window.pageYOffset : recupera a posição de rolagem da tela 
            // classList : manipula o css do elemento 
            window.addEventListener('scroll', function () {
                var header = document.querySelector('header');
                var contador = window.pageYOffset;
        
                if (contador > 0) {
                    header.classList.add('pequeno');
                } else {
                    header.classList.remove('pequeno');
                }
            });

            




            


    // PARA O DO ADM: 

                // Função para alternar a visibilidade do menu do usuário
    function alterarMenu() {
        // Obtém o elemento do menu do usuário pelo seu ID
        var menu = document.getElementById('userMenu');
        // Alterna a classe 'show' no elemento do menu do usuário
        menu.classList.toggle('show');
    }


    