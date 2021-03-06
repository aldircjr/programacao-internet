<!-- Por João Paulo Zorek-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/main.css">
  <meta charset="utf-8">

    <link href="../styles/blog.css" rel="stylesheet" type="text/css">
    <title>Conteúdo Padding </title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Averia+Sans+Libre');

    body{
        font-family: 'Averia Sans Libre';
    }
        #interface {

          background-color:#212121;
          color: white;
          padding: 30px;
        }
    h2{
        color: white;
    }
      a:link {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:visited {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:hover {
          color: red;
          background-color: transparent;
          text-decoration: underline;
      }

      a:active {
          color: blue;
          background-color: transparent;
          text-decoration: underline;
      }
      #interface{
      display: flex;
      flex-flow: row wrap;
    }

    #interface > *{
      flex: 1 100%;
    }
    *{
      max-width: 100%;
    }
    @media all and (min-width: 100px){
      #interface > *{
        flex: 100%;
      }
    }

    @media all and (min-width: 800px) {
      #side-menu{
        flex: 1;
        padding-right: 3%;
      }
      #interface > section{
        flex: 4;
      }
    }
    </style>
  </head>

  <body>
  <div id="interface">
    <header id="page-header">
      <?php include '../page-header.html'; ?>
    </header>

    <nav id="side-menu">
      <?php include '../side-menu.html'; ?>
    </nav>
    <section>
      <div id="artigo">
        <h1>Vamos aprender sobre Padding?</h1>
        <h2>Padding</h2>
        <p>As propriedades de padding CSS são usadas para gerar espaço em torno do conteúdo. O padding limpa uma área ao redor do conteúdo (dentro da borda) de um elemento. Com CSS, você tem controle total sobre o padding. Existem propriedades CSS para configurar o padding para cada lado de um elemento (superior, direito, inferior e esquerdo).</p>
        <p>O CSS possui propriedades para especificar o padding para cada lado de um elemento:
          <code>
            <ul>
                <li>padding-top</li>
                <li>padding-right</li>
                <li>padding-bottom</li>
                <li>padding-left</li>
            </ul>
          </code>
        </p>
          <p>As propriedades de padding podem assumir os seguintes valores:
            <ul>
                <li><code>length</code> - Especifica o padding em px, pt, cm, etc;</li>
                <li><code>%</code> - Especifica o padding em porcentagem da largura do elemento;</li>
                <li><code>inherit</code> - Especifica que o padding deve ser herdado do elemento pai.</li>
            </ul>
          </p>

          <p>O exemplo a seguir define padding diferente para os quatro lados de um elemento   &lt;div id = &quot;padding&quot;&gt;:</p>
          <p>
            <code>
              #padding {<br />
                   padding-top: 50px;<br />
                   padding-bottom: 30px;<br />
                   padding-right: 50px;<br />
                   padding-left: 80px;<br />
              }
            </code>
          </p>
          <div id = "padding">
            <p>Paragrafo com o padding formatado.</p>
          </div>
          <p>O padding também pode ser definido de forma curta, respeitando a ordem padding-top, padding-right, padding-bottom, padding-left. Exemplo:</p>
          <p>
            <code>
              p {<br />
                padding: 50px 30px 50px 80px;<br />
              }
            </code>
          </p>
          <p>Se a propriedade de padding tiver um valor só ele é aplicado a todos os lados, se tiver mais de um o estilo é aplicado seguindo a ordem citada acima.</p>
          <br />
      </div>
    </section>
    <footer id="page-footer">
      <?php include '../page-footer.html'; ?>
    </footer>
  </div>
</body>

</html>
