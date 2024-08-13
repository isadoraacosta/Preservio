
const slides = document.querySelectorAll('.slideshow-container a'); // armazena todos os links <a>
const dots = document.querySelectorAll('.dot');  // armazena todos os elementos span

let indice = 0;

// => : forma mais facil de escrever uma função 
// FUNÇÃO PARA OCULTAR TODOS OS SLIDES E MOSTRAR SO O DO INDICE n 
function mostrarSlide(n) { // n é o indice do slide
  slides.forEach(slide => { // forEach executar uma função para cada elemento de um array, logo o slide vai pegar cada elemento de slides por vez
    slide.style.display = 'none'; // esconde todos os slides
  });
  slides[n].style.display = 'block'; // exibe apenas o slide do indice indicado
}


// FUNÇÃO PARA OCULTAR O PREENCHIMENTO DE TODOS OS PONTOS E PREENCHER SO O DO INDICE n 
function mostrarponto(n) {
  dots.forEach(dot => { // forEach executar uma função para cada elemento de um array, logo o dot vai pegar cada elemento de dots por vez
    dot.classList.remove('active'); // remove a classe active de cada ponto, desativando todos os pontos 
  });
  dots[n].classList.add('active'); // adiciona a classe active ao ponto no índice n, tornando-o ativo 
}

function atualSlide(n) { // n é o indice passado pelo clique do user no ponto
  indice = n; // variavel com o indice passado pelo clique do user no ponto
  mostrarSlide(indice); // chama a função dos slides com o indice como argumento
  mostrarponto(indice); // chama a função dos pontos com o indice como argumento
}

function proximoSlide() {
  indice++; // incrmentando +1 ao indice do slide atual
  if (indice > slides.length - 1) { // verifica se o indice é maior do que a quantidade de slides -1
    // slides.length: O comprimento total do array slides, contendo todos os slides.
    indice = 0; // se for maior o indice é resetado para zero
  }
  mostrarSlide(indice); // chama a função de mostrar o slide
  mostrarponto(indice); // chama a função de mostrar o ponto
}

setInterval(proximoSlide, 5000); // setInterval é uma função embutida em JavaScript que permite que execute uma determinada função repetidamente em intervalos de tempo definidos

