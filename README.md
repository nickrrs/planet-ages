
# Sobre Mim

## Quem sou eu?
Eu sou Nickolas, um entusiasta da tecnologia e apaixonado por programação e desenvolvimento web, se for pra falar sobre minha vida profissional, eu diria que começou
a "pouco tempo", por meados de 2020 consegui meu primeiro job. Mas desde que era criança sou apaixonado por tecnologias e sempre olhei com olhos brilhantes para programação,
com 14 anos eu já conhecia HTML/CSS/Javascript, adorava brincar com CSS estilizando coisas e fazendo websites pra o Habbo com meus amigos. 

Mas foi em meados de 2017, aos 18 anos, quando entrei na faculdade, que decidi tornar disso uma carreira profissional, minha maior motivação com certeza foi o amor que já nutria por anos por tecnologia e esse mundo de desenvolvimento web. Quando estava aprendendo a programar na faculdade, me apaixonei pelo lado do back-end, a ideia de solucionar problemas que estavam na minha frente com algumas letras na tela de um computador me deixava fascinado, e desde então é isso que tenho feito e tentado fazer. Aprendendo e tentando solucionar problemas, criar ideias e tecnologias novas com minhas proprias mãos. 

## O que faço, o que fiz?
Recentemente não tenho trabalhado em nenhum projeto pessoal novo (embora tenho uma ideia bastante legal, que provavelmente, por motivos externos, não vou conseguir colocar à frente =/), porém, tenho alguns anos de experiência atuando em projetos de diversos segmentos, tais como Saúde, Marketing, e-Commerce, Mercado Financeiro, entre outros. Passei por um layoff recentemente e estou em busca de uma nova oportunidade, de aprender, executar e poder dar o meu máximo em mais um desafio nesse mundão da tecnologia. 

## Projetos
Alguns dos projetos, que participei no desenvolvimento de forma integral, e também atuei realizando suporte, manutenção e sustentação, incluem:
- [Projeto 1] - https://www.hortiplace.com.br - E-commerce e Sistema ERP para a empresa.
- [Projeto 2] - https://www.exiber.com - Desenvolvimento completo de uma API/Microservices em Node.js, utilizando serviços em nuvem (GCP), para realizar a extração e funilamento de dados de campanha de marketing para a empresa Exiber. 
- [Projeto 3] - https://kikos.fit - Desenvolvimento da API do app da Kikosfit, e também do sistema CMS.

## Meus Links
- [Github] https://github.com/nickrrs
- [LinkedIn] https://www.linkedin.com/in/nickolasribeiro/?locale=pt_BR

## Respondendo um pouco mais das suas perguntas: 
> Para você, qual é a forma mais efetiva de aprender algo novo relacionado à
programação?: 
    - Simples, pra mim, a maneira mais efetiva e também mais divertida de se aprender algo, é fazendo ! Na prática, resumidamente. Mas claro, é sempre legal ter alguém experiente que possa dar uma mãozinha a guiar no caminho. 

> Defina, na sua percepção, quais características uma pessoa deve ter para ser
considerada boa desenvolvedora?
    - Conhecer e ter expertise em uma tecnologia, stacks e skill set com certeza é o mínimo. Mas na minha concepção, um bom desenvolvedor é aquele que tem ótimas soft-skills, que sabe comunicar, sabe ajudar, não tem medo de aprender e de questionar, e é aquele que trabalha muito bem em equipe.


## Bom agora chega de conversa, e vamos pra o que interessa..

## Observações sobre o teste: 

> Escolhi uma linguagem que tenho conhecimento e maior conforto, portanto, fui de Laravel. E projeto tá rodando via container com o docker-compose. Então, relaxa, é bem simples, só seguir o passo-a-passo :

> 1) Ao clonar o projeto, rodar o comando: `` composer install `` para instalar todas as libs e dependências do projeto.
> 2) O projeto está com o docker-compose já configurado, com coisas básicas, já que é um projeto simples, até então. Só rodar o comando a seguir pra levantar o container/servidor: ``bash ./vendor/bin/sail up ``
> 3) Os testes montados são simples, envolvem cenários simples, pra rodar é só executar o comando: `` php artisan test `` e ele vai executar automaticamente os testes unitários montados.
> 4) Eu montei rotas públicas também que podem ser testadas, caso queira ver onde as rotas estão e não conhece a arquitetura em Laravel, só seguir essa sequencia de pastas e arquivos: ./routes/api.php
