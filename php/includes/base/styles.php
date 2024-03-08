<style>
    body {
        font-family: 'Ubuntu', sans-serif;
        background-image: url('includes/imagens/imagem4.jpg');
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #dff;
        padding: 10px;
        text-align: center;
    }

    nav {
        background-color: #444;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
        transition: color 0.9s;
        /* Adicionando a animação */
    }

    nav a:hover {
        color: #FF0000;
        /* Mudança de cor ao passar o mouse */
    }

    main {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #dff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .main-section {
        margin-bottom: 30px;
    }

    .malware-section {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .malware-item {
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
        padding: 10px;
        background-color: #dff;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .malware-item img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .malware-item h3 {
        color: #222;
    }

    .malware-item p {
        color: #111;
    }

    .servicos-page .service-container {
        margin-bottom: 30px;
        /* Espaçamento entre os containers de serviço */
        border: 1px solid #ccc;
        /* Borda para separar visualmente os containers */
        border-radius: 5px;
        /* Arredondamento das bordas */
        padding: 20px;
        /* Espaçamento interno */
        background-color: #f9f9f9;
        /* Cor de fundo dos containers */
    }

    .servicos-page .service-item {
        text-align: left;
        /* Alinhamento do texto */
    }

    .servicos-page .service-item h3 {
        color: #999;
        /* Cor do título do serviço */
        margin-top: 0;
        /* Remover margem superior padrão */
        font-size: 30px;
    }

    .servicos-page .service-item p {
        color: #999;
        /* Cor do texto do serviço */
        font-size: 20px;
    }

    /* Adicionando espaçamento entre os itens de serviço */
    .servicos-page .service-item:not(:last-child) {
        margin-bottom: 15px;
    }

    .faleconosco-page main {
        max-width: 500px;
        /* Definir largura máxima para o formulário */
        margin: 20px auto;
        /* Centralizar o formulário na página */
        padding: 20px;
        /* Adicionar espaço interno ao formulário */
        background-color: #f9f9f9;
        /* Cor de fundo do formulário */
        border-radius: 10px;
        /* Arredondar as bordas do formulário */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Adicionar sombra ao formulário */
    }

    .faleconosco-page h2 {
        text-align: center;
        /* Centralizar o título */
        margin-bottom: 20px;
        /* Adicionar espaço abaixo do título */
    }

    .faleconosco-page .form-group {
        text-align: left;
        /* Alinhar os campos do formulário à esquerda */
        margin-bottom: 15px;
        /* Adicionar espaço entre os campos */
    }

    .faleconosco-page label {
        display: block;
        /* Exibir os rótulos em uma nova linha */
        margin-bottom: 5px;
        /* Adicionar espaço abaixo dos rótulos */
    }

    .faleconosco-page input,
    .faleconosco-page textarea {
        width: 100%;
        /* Assegurar que os campos ocupem toda a largura disponível */
        padding: 10px;
        /* Adicionar preenchimento aos campos */
        border-radius: 5px;
        /* Arredondar as bordas dos campos */
        border: 1px solid #ccc;
        /* Adicionar uma borda aos campos */
        box-sizing: border-box;
        /* Garantir que o preenchimento e a borda não aumentem o tamanho total do campo */
    }

    .faleconosco-page button {
        width: 100%;
        /* Garantir que o botão ocupe toda a largura disponível */
        padding: 10px;
        /* Adicionar preenchimento ao botão */
        background-color: #007bff;
        /* Cor de fundo do botão */
        color: #fff;
        /* Cor do texto do botão */
        border: none;
        /* Remover a borda do botão */
        border-radius: 5px;
        /* Arredondar as bordas do botão */
        cursor: pointer;
        /* Mudar o cursor para indicar que o botão é clicável */
        transition: background-color 0.3s;
        /* Adicionar uma transição suave de cor */
    }

    .faleconosco-page button:hover {
        background-color: #0056b3;
        /* Mudar a cor de fundo do botão ao passar o mouse sobre ele */
    }

    .login-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px;
    }

    .login-button:hover {
        background-color: #0056b3;
    }

    /* Estilo para o botão de logout */
    .logout-button {
        padding: 10px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px;
    }

    .logout-button:hover {
        background-color: #c82333;
    }

    .content-item img {
        max-width: 100%;
        /* Garante que a imagem não ultrapasse a largura do seu contêiner */
        height: auto;
        /* Mantém a proporção da imagem ao redimensionar */
        display: block;
        /* Remove espaços extras abaixo da imagem */
        margin: 0 auto;
        /* Centraliza a imagem horizontalmente */
    }

    .content-item {
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */
    }

    .image-container {
        position: relative;
        /* Define um contexto de posicionamento para os elementos internos */
        display: inline-block;
        /* Permite que o contêiner se ajuste ao tamanho da imagem */
    }

    .image-text {
        position: absolute;
        /* Posiciona o texto de forma absoluta em relação ao contêiner pai */
        top: 50%;
        /* Move o texto para 50% da altura do contêiner pai */
        left: 50%;
        /* Move o texto para 50% da largura do contêiner pai */
        transform: translate(-50%, -50%);
        /* Corrige o posicionamento para centralizar o texto */
        background-color: rgba(255, 255, 255, 0.8);
        /* Fundo semi-transparente para legibilidade */
        padding: 10px;
        /* Espaçamento interno para o texto */
    }

    .content-item {
        text-align: center;
    }

    .image-container {
        position: relative;
        display: inline-block;
        overflow: hidden;
        /* Impede que o texto ultrapasse a imagem */
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        /* Fundo semi-transparente para o overlay */
        opacity: 0;
        /* Inicialmente oculto */
        transition: opacity 0.3s ease;
        /* Transição suave para a opacidade */
    }

    .overlay-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

    .overlay-content h2 {
        margin-bottom: 20px;
    }

    .overlay-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .overlay-button:hover {
        background-color: #0056b3;
    }

    /* Ao passar o mouse sobre a imagem, exibe o overlay */
    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .social-icons {
        text-align: center;
    }

    .social-icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: 0 10px;
        border-radius: 50%;
        background-color: #007bff;
        line-height: 40px;
        color: #fff;
        font-size: 20px;
        transition: background-color 0.3s;
    }

    .social-icon:hover {
        background-color: #0056b3;
    }

    /* Estilos individuais para cada ícone */
    .facebook {
        background-color: #3b5998;
    }

    .twitter {
        background-color: #1da1f2;
    }

    .instagram {
        background-color: #e4405f;
    }

    .telegram {
        background-color: #0088cc;
    }

    .service-container {
        position: relative;
        display: inline-block;
    }

    .service-container img {
        max-width: 100%;
        height: auto;
    }

    .service-container:hover .service-item {
        display: block;
    }

    .service-item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #000;
        /* Defina a cor do texto aqui */
        padding: 20px;
        display: none;
    }

    .service-item h3 {
        margin-top: 0;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .service-item p {
        margin-bottom: 10px;
    }

    .service-item p:last-child {
        margin-bottom: 0;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.7);
        transition: opacity 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .service-container:hover .overlay {
        opacity: 1;
    }

    .service-image {
        max-width: 100%;
        height: auto;
    }
</style>