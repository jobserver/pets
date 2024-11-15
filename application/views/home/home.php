<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET'S - Página Inicial</title>
    <link rel="stylesheet" href="/assets/styles/inicial.css">
    <link rel="shortcut icon" href="/assets/imagens/icone site icon.ico" type="image/x-icon">
    <!-- <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script> -->
</head>

<body>
  
    <div class="main-container">
        <header>
               <!---QUEBRA DE LINHAAAA-->
              
            <div class="login-container">
            <div id="h-login">
        
            </div>
            </div>
           <!---QUEBRA DE LINHAAAA-->
           
           
        <header><img src="/assets/imagens/logo nome site.png" width="200"></header>
        </span>
        
       
        </header>
       
        <!---QUEBRA DE LINHAAAA-->
       
        <section class="account-info">
            <div class="container">
                <div class="column">
                    <header><img src="/assets/imagens/icone amarelo.png" class="icon-usu" alt="Ícone Usuário">
                        <h1>Olá, <?=$user_name; ?></h1></header>
                       
                    <div class="balance-container">
                        
                        <div class="balance">
                            <p>Saldo: R$ **,**</p>
                        </div>
                        <img src="/assets/imagens/olho.png" width="30px" height="30px" alt="Visualizar Saldo">
                    </div>
                    
                    <div class="actions">
                        <a href="/pagamento">Pagamento</a>
                       
                        <div class="qr-container">
                            <button class="qr-button" id="start-qr-button">
                               <a href="/pagamento"> <img src="/assets/imagens/varredura.png" alt="QR Code" class="icon-qr"></a>
                            </button>
                            <div id="qr-reader" style="width: 100%; height: 50%;"></div>
                            <p id="qr-result"></p>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        
           <!---QUEBRA DE LINHAAAA-->
        <footer>
            <nav>
                <a href="/home"><button><img src="/assets/imagens/botao-de-inicio.png" class="icon" alt="Home"></button></a>
                <a href="/historico"><button><img src="/assets/imagens/calendario.png" class="icon" alt="Agenda"></button></a>
                <a href="/perfil"><button><img src="/assets/imagens/perfil-de-usuario.png" class="icon" alt="Meu Cadastro"></button></a>
            </nav>
        </footer>
    </div>
</body>
   <!---QUEBRA DE LINHAAAA-->
<script>
    document.getElementById('start-qr-button').addEventListener('click', function() {
        let qrCodeReader = new Html5Qrcode("qr-reader");

        qrCodeReader.start(
            { facingMode: "environment" }, // Usa a câmera traseira
            {
                fps: 10,
                qrbox: 250 // Tamanho da área de leitura do QR Code
            },
            qrCodeMessage => {
                // Mensagem QR Code lida
                document.getElementById('qr-result').innerText = `QR Code Lido: ${qrCodeMessage}`;
                qrCodeReader.stop().catch(err => console.error(`Erro ao parar o leitor QR: ${err}`)); // Parar leitura após sucesso
            },
            errorMessage => {
                // Mensagem de erro de leitura
                console.log(`Erro ao ler QR Code: ${errorMessage}`);
            }
        ).catch(err => {
            console.error(`Erro ao iniciar o leitor QR: ${err}`);
        });
    });
</script>
</html>
