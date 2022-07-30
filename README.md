## Comandos que usei após fazer o pull

- `docker-compose up -d` (Cria o container do docker)
- `docker-compose run --rm composer install` (Instala a dependecia do php via composer)
- `cp .env.example .env` (Copia e cria o arquivo de configuracao do laravel)
- `docker-compose run --rm artisan key:generate` (Gera a chave do sistema)

- `docker-compose run --rm artisan --version` (Verifiquei que a versão do Laravel é a 7.30.4)

- `docker-compose run --rm artisan storage:link ` (Cria o link lógico que permite o upload de arquivos)

- `docker-compose run --rm artisan migrate --seed` (Cria as tabelas do banco de dados e popula ele)

- `docker-compose run --rm composer dumpautoload` (Ao criar um novo seeder este comando pode ser necessário)

- `docker-compose run --rm composer require barryvdh/laravel-dompdf` (Comando para Instalat o dompdf, não sei se precisa no servidor)

docker-compose run --rm artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider" (este NÃO é necessário)

permissao pro web servide

- `docker-compose run --rm app chmod -R 775 bootstrap storage` 
- `docker-compose run --rm app chown -R www-data.www-data bootstrap storage`

traduzir para pt BR

- `docker-compose run --rm composer require lucascudo/laravel-pt-br-localization --dev`
- `docker-compose run --rm artisan vendor:publish --tag=laravel-pt-br-localization`
(depois precisa mexer no config)

auth do laravel:

- `docker-compose run --rm composer require laravel/ui`
- `docker-compose run --rm artisan ui vue --auth`
- `docker-compose run --rm npm install`
- `docker-compose run --rm npm update`
- `docker-compose run --rm npm run dev`

sempre que criar uma seed nova:

- `docker-compose run --rm composer dumpautoload`

laravel debugbar (apenas em desenvolvimento)

- `docker-compose run --rm composer require barryvdh/laravel-debugbar --dev`

gerador de models e relacionamentos:

- `docker-compose run --rm composer require reliese/laravel --dev`
- `docker-compose run --rm artisan vendor:publish --tag=reliese-models`
- `docker-compose run --rm artisan config:clear`

Opções:

- `docker-compose run --rm artisan code:models` (montar tudo)
- `docker-compose run --rm artisan code:models --table=Nome_Tabela` (montar tabela especifica)
- `docker-compose run --rm artisan code:models --connection=pgsql` (definir conexão para o postgres)

Gerador de Crud:

- `docker-compose run --rm composer require ibex/crud-generator --dev` (instala)
- `docker-compose run --rm artisan vendor:publish --tag=crud` (publica configs)

Personalização do Gerador de Crud para seu template view e para seu banco de dados

- `` (na config,crud altere o layout para seu template base, por exemplo web.templates.templateBase)
- `` (nas suas models a variavel rule precisa estar setada, caso contrario o controller precisa ser alterado)

- `vá em vendor>ibex>crud-generator>src>stubs>views> e altere os arquivos .stub para o seu section name e tbm a classe content precisará ser retirada das divs (talvez) ` (Ajuste para sua view ficar com o template que está usando)

- `vá em vendor>ibex>crud-generator>src>commands>GeneratorCommand.php na linha 360 e altere para $this->tableColumns = DB::select('SELECT json_object_keys(to_json(json_populate_record(NULL::public.'.$this->table.', \'{}\'::JSON))) as Field');` (Ajuste para trabalhar com postgresql)


- `vá em vendor>ibex>crud-generator>src>commands>GeneratorCommand.php na linha 375 e altere para $columns[] = $column->field;` (Ajuste para trabalhar com postgresql)

- `docker-compose run --rm artisan make:crud {table_name}` (Uso)
- `docker-compose run --rm artisan make:crud banks` (exemplo de uso com uma tabela banks)

- `Route::resource('banks', 'BankController');` (Adicione no web routes)

- `docker-compose run --rm artisan make:crud {table_name} --route={route_name}` (Opcional)














