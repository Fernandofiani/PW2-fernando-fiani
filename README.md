# PW2-fernando-fiani
Programação Web ii por João Siles e Najara Cardoso
## Read-me

Documentação passo a passo da criação de  aplicações Laravel.


## PHP

Deve-se criar um arquivo php na IDE escolhida por você.

Para executar um arquivo de PHP siga estes passo:

 - Clone o repositório no caminho  `"C:\xampp\htdocs"` 
 - Abra o powershell como administrador
 - Execute os comandos na seguinte ordem:
 - `npm install -g typescript`
 - `npm install -g tsc`
Para executar o arquivo feche o powershell e abra novamente na pasta em que se localiza o arquivo e execute a seguinte linha:

    -`tsc .nomedoarquivo.ts`
    

# Laravel

As seguintes instruções se dirigem para a instalação do Laravel e a criação de uma aplicação Laravel.

## Criação do projeto Laravel
Primeiramente, instale o composer no seguinte link:https://getcomposer.org/download/
Execute o powershell e execute as seguintes linha:
 - `composer -v`
 - `npm install -g typescript`
 - `node -v`
 Feche o terminal e execute o powershell como administrador, em seguida execute estas linhas:
 

    `Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
`

    `composer global require laravel/installer`
    `Laravel new <Nome da Aplicação>`
    `composer run dev`

