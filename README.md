## Como configurar o banco de dados

1. Certifique-se de que você tem um servidor MySQL ou MariaDB rodando.
2. Importe o arquivo `database/banco_de_dados.sql` para o MySQL:
   ```bash
   mysql -u seu_usuario -p nome_do_banco < database/banco_de_dados.sql
