<?php 
    include_once 'templates/header.php';
    
?>




<section class="main">
        

    <div class="banner_content">
        <h1>Olá, seja bem vindo a <br> Tech Books</h1>
        <p>A livraria de todo apaixonado por tecnologia!</p>  

    </div>
   


</section>



<section id="sobre" class="about">
    <div>
      <h2>Sobre nós:</h2>
      <p>Bem-vindo à Tech Books, seu destino definitivo para explorar o vasto universo da tecnologia por meio das páginas dos melhores livros especializados. Desde a nossa fundação, temos sido apaixonados por conectar entusiastas, profissionais e curiosos com o conhecimento mais atualizado e relevante no campo da tecnologia.
        <br><br>

        Na Tech Books, acreditamos que o conhecimento é a chave para desbloquear o potencial humano e impulsionar a inovação. É por isso que nos dedicamos a fornecer uma ampla gama de títulos cuidadosamente selecionados, abrangendo desde programação e desenvolvimento de software até inteligência artificial, ciência de dados, cibersegurança, design de UX/UI e muito mais.
        <br><br>

        Nossa equipe é composta por apaixonados por tecnologia, todos eles dedicados a ajudá-lo a encontrar os livros perfeitos para atender às suas necessidades específicas. Seja você um iniciante buscando entender os conceitos básicos ou um profissional experiente em busca de insights avançados, estamos aqui para orientá-lo em sua jornada de aprendizado.
        <br><br>
        Além de nossa extensa coleção de livros, também oferecemos uma variedade de serviços e recursos para enriquecer sua experiência de aprendizado. De eventos de lançamento e sessões de autógrafos com autores proeminentes a grupos de estudo e workshops práticos, estamos empenhados em criar uma comunidade vibrante e colaborativa de entusiastas da tecnologia.
        <br><br>
        Na Tech Books, estamos comprometidos com a excelência em tudo o que fazemos. Desde a seleção criteriosa de títulos até o atendimento ao cliente excepcional, buscamos constantemente superar as expectativas de nossos clientes e garantir que cada visita à nossa livraria seja uma experiência memorável e enriquecedora.
        <br><br>
        Obrigado por nos escolher como seu parceiro de confiança na jornada do conhecimento tecnológico. Estamos ansiosos para ajudá-lo a descobrir, aprender e inovar na fascinante paisagem da tecnologia contemporânea.
        <br><br>
        Seja bem-vindo à Tech Books - onde a paixão pela tecnologia se encontra com o poder do conhecimento.</p>
    </div>
    <img class="secondary_img" src="imagens/pexels-mark-cruzat-3494806.jpg" alt="">
  </section>

  <section id="sugestao" class="sugestions">
        <h2>Deixe sua sugestão de melhoria</h2>
            <form id="create-form" action="" method="POST">
            
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="" required>
            </div>
            
            <div class="form-group">
                <label for="observations">Observações e sugestões:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

  </section>


  <?php 
    include_once 'templates/footer.php';
  ?>









