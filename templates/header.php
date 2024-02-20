
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <style>
        *{
            padding: 0;
            margin: 0;
            outline: 0;

        }
        footer{
            background-color: #181818;
            color: white;
            position: absolute;
            width: 100%;
        }

        footer p {
            text-align: center;
            padding: 30px;
        }
        html{
            min-height: 100vh;
            position: relative;
        }
        
        /* FIM HEADER */

    

        

        .main{
            width: 100%;
            background-color: #000;
            height: calc(100vh - 80px);
            background-image: url("imagens/b800878ec9ca72ed7f4ebe64e4aa1832.jpg");
            display: flex;
            flex-direction: row;
            align-items: center;
            opacity: 0.9;
            margin-bottom: 50px;
        }

        .content{
            padding: 25px;
            
        }

        .banner_content{
            color: #F2F2F2;
            margin-left: 160px;
        }

        .banner_content h1{
            font-size: 3.8em;
        }

        .banner_content p{
            font-weight: bold;
            
        }


        .btn-primary{
        width: 160px;
        transition: 0.7s;

       }

       .btn-primary:hover{
            transform: scale(1.2);
       }

        .about{
            display: flex;
            justify-content: space-around;
        }
        .about div{
            max-width: 50%;
        }
      
        .about p{
            font-family: Arial, Helvetica, sans-serif;
        }

        .about h2{
            margin-bottom: 18px;
            font-size: 2.2em;
        }

        .sugestions{
            max-width: 50%;
            margin: auto;
            margin-top: 100px;
            margin-bottom: 120px;
        }

        .sugestions h2{
            text-align: center;
        }

        .secondary_img{
            max-width: 50%;
            height: 680px;
        }
       
       

        .busca {
            margin-top: 50px;
        }

        form label{
            font-weight: bold;
        }

        .busca form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }
        form .campo_busca{
            height: 50px;
            width: 290px;
        }

        form .labelform{
            height: 50px;
        }

        .show_books{
            display: block;
            margin: auto;
            width: 50%;
            margin-top: 50px;
        }

        

        .busca{
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .busca input {
            height: 42px;

        }

        .buscar_livro{
            color: white;
        }

        
       
     

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
   
      <form class="d-flex" role="search" action="config/api.php" method="post">
        <input class="form-control me-2" type="text" name="search_term" placeholder="Search" aria-label="Search">
        <input class="btn btn-outline-success" value="Buscar" type="submit"></input>
      </form>
    </div>
  </div>
</nav>