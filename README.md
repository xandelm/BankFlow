<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">BankFlow</h1>
    <br>
</p>

Protótipo contendo estruturas para um website para uso de instituições financeiras e seus clientes.

Foi desenvolvido utilizando Yii 2 Advanced Project Template. 

[//]: # (is a skeleton [Yii 2]&#40;https://www.yiiframework.com/&#41; application best for)
[//]: # (developing complex Web applications with multiple tiers.)

[//]: # (The template includes three tiers: front end, back end, and console, each of which)
[//]: # (is a separate Yii application.)
O template possui três tiers: front end, back end e console, cada qual é uma aplicação Yii diferente.
As dependencias estão presentes na pasta vendor, e podem ser instaladas utilizando composer.

<h2>Relatório de Desenvolvimento</h2>
<p>Este projeto foi desenvolvido utilizando xampp com phpmyadmin e a IDE PhpStorm.</p>
<p>O desenvolvimento do projeto foi realizado como um teste prático de duração de 48 horas. Dentro do tempo alocado, foi necessário a instalação do ambiente e aquisição de conhecimentos de PHP e Yii2. Apenas conhecimentos prévios de HTML, CSS e Git foram utilizados além dos adquiridos.</p>
<p>Considerando o curto prazo de dois dias dedicado ambos a aprendizagem da plataforma em si, o desenvolvimento do projeto, a gravação de um vídeo de apresentação e criação de documentações, os resultados de conhecimentos adquiridos e um protótipo inicial do sistema foram satisfatórios e o projeto foi uma ótima oportunidade de aprendizado.</p>

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
