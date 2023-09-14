document.addEventListener("DOMContentLoaded", () => {
  const botaoLoginpopup = document.querySelector(".botaoLogin-popup");
  const iconfechar = document.querySelector(".icon-fechar");
  const Logincadastropopup = document.querySelector(".Login-cadastro-popup");
  const linkLogin = document.querySelector(".link-login");
  const linkCadastro = document.querySelector(".link-cadastro");

  botaoLoginpopup.addEventListener("click", () => {
    Logincadastropopup.classList.add("ativar-popup");
  });
  iconfechar.addEventListener("click", () => {
    Logincadastropopup.classList.remove("ativar-popup");
  });
  linkCadastro.addEventListener("click", () => {
    Logincadastropopup.classList.add("ativo");
  });

  linkLogin.addEventListener("click", () => {
    Logincadastropopup.classList.remove("ativo");
  });
});



document.addEventListener('DOMContentLoaded', () => {
    const Logincadastropopup = document.querySelector('.Login-cadastro-popup');
    const linkLogin = document.querySelector('.Link-login');
    const linkcadastro = document.querySelector('.Link-cadastro');

    linkcadastro.addEventListener('click', () => {
        Logincadastropopup.classList.add('ativo');
    });

    linkLogin.addEventListener('click', () => {
        Logincadastropopup.classList.remove('ativo');
    });
});