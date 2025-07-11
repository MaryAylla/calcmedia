# 📊 Calculadora de Média Simples com PHP

Um sistema web básico e interativo, construído com **PHP** e **HTML**, projetado para calcular a média de duas notas. Este projeto é uma continuação didática para aprofundar seus conhecimentos em desenvolvimento web, reforçando conceitos fundamentais de formulários e processamento de dados.

Este projeto é uma excelente oportunidade para aprofundar conhecimentos em:

  * **HTML:** Criação de formulários com múltiplos campos de entrada (`<input type="number">`).
  * **PHP Básico:**
      * Recebimento e processamento de **múltiplos valores** via superglobal `$_GET`.
      * **Casting de tipo** para números de ponto flutuante (`(float)`) para lidar com decimais.
      * **Validação de entrada** (verificação de números e limites de intervalo).
      * **Operações aritméticas** (`+`, `/`).
      * **Formatação de números** para exibição (`number_format()`).
      * **Lógica condicional** (`if/else`) para determinar aprovação/reprovação.
  * **Boas Práticas de Código:** Manutenção da separação da lógica de apresentação (HTML) e processamento (PHP) e centralização dos estilos CSS.
  * **Web Fundamentals:** Compreensão da interação entre formulários HTML e scripts PHP.

-----

## ✨ Funcionalidades

  * **Entrada de Notas:** Formulário HTML com dois campos dedicados para inserir notas (com suporte a valores decimais e validação de 0 a 10).
  * **Cálculo de Média:** Realiza a soma e divisão das duas notas para obter a média aritmética.
  * **Resultado e Status:** Exibe a média calculada e informa se o aluno foi **APROVADO** (média $\\ge$ 7) ou **REPROVADO** (média $\<$ 7).
  * **Validação Robusta:**
      * Verifica se ambas as notas foram fornecidas.
      * Garante que os valores recebidos são numéricos.
      * Valida se as notas estão dentro do intervalo aceitável (entre 0 e 10), tanto no HTML quanto no PHP (validação do lado do servidor).
  * **Feedback ao Usuário:** Mensagens claras de erro para entradas inválidas ou dados ausentes.
  * **Design Consistente:** Utiliza um arquivo CSS externo para estilização, garantindo uma aparência uniforme entre o formulário e a página de resultados.

-----

## 🛠️ Tecnologias Utilizadas

  * **PHP**: Linguagem de script de servidor para a lógica de back-end.
  * **HTML5**: Linguagem de marcação para estruturar o conteúdo web e os formulários.
  * **CSS3**: Linguagem de estilo para a apresentação visual das páginas.

-----

## 🚀 Como Executar Localmente

Para rodar este projeto em sua máquina, você precisará de um ambiente de servidor web com suporte a PHP (como Apache com XAMPP/WAMP, Nginx, ou PHP embutido para testes).

1.  **Obtenha os arquivos do projeto:**

      * Crie os arquivos `calculadora_media.html`, `processar_media.php` e `style.css` (conforme o que desenvolvemos) no mesmo diretório.

2.  **Configure seu servidor web:**

      * Coloque a pasta contendo esses arquivos dentro do diretório de documentos raiz do seu servidor web (por exemplo, a pasta `htdocs` para o Apache).

3.  **Inicie seu servidor web:**

      * Certifique-se de que o servidor web (Apache, Nginx, etc.) e o interpretador PHP estejam em execução.

4.  **Acesse o formulário no navegador:**

      * Abra seu navegador e navegue até a URL do arquivo HTML. Geralmente será algo como:
        ```
        http://localhost/index.html
        ```

5.  **Interaja com a aplicação:**

      * Digite as duas notas nos campos fornecidos e clique no botão "Calcular Média".
      * O navegador enviará os dados para `processar_media.php`, que exibirá o resultado.
