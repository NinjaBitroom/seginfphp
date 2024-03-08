<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: logar.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <?php require_once 'includes/base/styles.php'; ?>
</head>

<body>
    <?php require_once 'includes/base/header.php'; ?>

    <body class="servicos-page">
        <main>
            <section class="service-section">
                <h2>Nossos Serviços de Segurança Cibernética</h2>

                <div class="service-container">
                    <img src="includes/imagens/auditoria.jpg" alt="Imagem 1">
                    <div class="overlay">
                        <div class="service-item">
                            <h3>1. Auditoria de Segurança</h3>
                            <p>Auditoria de segurança é uma análise detalhada da infraestrutura de segurança de uma organização para identificar vulnerabilidades e pontos fracos que podem ser explorados por invasores.</p>
                            <p>Realizamos uma auditoria completa, examinando sistemas, redes, aplicativos e políticas de segurança para garantir que sua organização esteja protegida contra ameaças cibernéticas.</p>
                        </div>
                    </div>
                </div>

                <div class="service-container">
                    <img src="includes/imagens/firewall.jpg" alt="Imagem 2">
                    <div class="overlay">
                        <div class="service-item">
                            <h3>2. Implementação de Firewall</h3>
                            <p>Firewalls são uma parte essencial da defesa cibernética de uma organização, filtrando o tráfego de rede para bloquear acessos não autorizados e proteger contra ameaças externas.</p>
                            <p>Nossa equipe configura firewalls personalizados de acordo com as necessidades específicas da sua organização, garantindo que apenas o tráfego legítimo seja permitido e protegendo contra ataques maliciosos.</p>
                        </div>
                    </div>
                </div>

                <div class="service-container">
                    <img src="includes/imagens/deteccao.jpg" alt="Imagem 3">
                    <div class="overlay">
                        <div class="service-item">
                            <h3>3. Detecção e Resposta a Incidentes</h3>
                            <p>A detecção e resposta a incidentes é crucial para identificar e mitigar rapidamente ameaças cibernéticas em sua organização. Isso envolve monitoramento contínuo de sistemas e redes para detectar atividades suspeitas e responder imediatamente a incidentes.</p>
                            <p>Nossa equipe implementa ferramentas avançadas de monitoramento e análise de segurança, juntamente com procedimentos de resposta a incidentes bem definidos, para garantir uma resposta rápida e eficaz a qualquer ameaça cibernética.</p>
                        </div>
                    </div>
                </div>

                <div class="service-container">
                    <img src="includes/imagens/educacao.jpg" alt="Imagem 4">
                    <div class="overlay">
                        <div class="service-item">
                            <h3>4. Educação em Segurança Cibernética</h3>
                            <p>A educação em segurança cibernética é essencial para conscientizar os funcionários sobre as práticas recomendadas de segurança e ajudá-los a reconhecer e evitar ameaças cibernéticas, como phishing e engenharia social.</p>
                            <p>Oferecemos treinamentos personalizados em segurança cibernética para sua equipe, abrangendo tópicos como boas práticas de senha, reconhecimento de phishing e proteção de dados pessoais, ajudando a fortalecer a postura de segurança de sua organização como um todo.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

</html>