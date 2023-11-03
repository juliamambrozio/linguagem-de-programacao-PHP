<?php
    function sendEmail($destinatario = '', $cc = '', $assunto = '', $mensagem = ''){
        echo "Destinatário: $destinatario <br/>";
        echo "CC: $cc <br/>";
        echo "Assunto: $assunto <br/>";
        echo "Mensagem: $mensagem <br/>";
        
    }

    //JEITO CONVENCIONAL

    sendEmail(
        "ju@gmail.com",
        "teste.com",
        "argumentos nomeados",
        "Desvendando novas features"
    );

    echo "<hr>";

    sendEmail(
        "ju@gmail.com",
        "argumentos nomeados",
        "Desvendando novas features"
    );

    echo "<hr>";

    //NÃO PRECISA SEGUIR A ORDEM

    sendEmail(
        destinatario: "ju@gmail.com",
        mensagem: "Desvendando novas features",
        assunto: "argumentos nomeados"
        
    );


?>