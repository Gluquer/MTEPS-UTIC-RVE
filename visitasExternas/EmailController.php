<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require '../third_party/autoload.php';
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  if(!empty($_FILES['pdf'])) {
    $correo = $_POST['correo'];
    $ci = $_POST['ci'];
    $nombres = $_POST['nombres'];
    $content = file_get_contents($_FILES['pdf']['tmp_name']);
    $location = "storage/";
    move_uploaded_file($_FILES['pdf']['tmp_name'], $location.$ci.'.pdf');
  }
  else {
    throw new Exception("No hay información en la petición");
  }

  try {
    //Server settings
    //Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();       
    $mail->Host = 'mail.mintrabajo.gob.bo';
    $mail->SMTPAuth = true;                
    $mail->Username = 'comitemixto@mintrabajo.gob.bo'; 
    $mail->Password = 'Mt3Ps21*';                      
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;                                 
    $mail->CharSet = 'UTF-8';
    
    //Recipients
    $mail->setFrom('comitemixto@mintrabajo.gob.bo', 'Comite Mixto');
    $mail->addAddress($correo, $nombres);
    
    //Attachments
    $mail->addAttachment('./storage/'.$ci.'.pdf');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Ministerio de Trabajo, Empleo y Previsión Social';
    $mail->Body = '
    <div style="width: 100%; height: auto; background: #FFF; margin: 0; padding: 0;">
      <center>
        <table style="border-collapse:collapse;border-spacing:0; width: 500px; height: 250px;" class="tg">
          <thead>
            <tr>
              <th style="text-align:center;vertical-align:center;">
                <img src="https://www.mintrabajo.gob.bo/wp-content/uploads/2021/01/12-AVATAR_WEB_GOBIERNO_TRABAJO-140X140.jpg" style="width: 150px; height: auto;">
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;">Señor(a):</td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:justify;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;">En cumplimiento al Artículo 23, del <b>REGLAMENTO PARA LA DESIGNACIÓN DE COORDINADORES, CONFORMACIÓN Y POSESIÓN DE COMITÉS MIXTOS DE HIGIENE, SEGURIDAD OCUPACIONAL Y BIENESTAR</b>, aprobado bajo Resolución Ministerial N° 437/22 de 21 de abril de 2022, usted debe participar de manera <b><u>obligatoria</u></b> de la capacitación virtual, habilitada en el siguiente enlace:</td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:center;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br><a href="https://google.com">Ir al video</a></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:justify;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;">Concluida la capacitación, el Ministerio de Trabajo, Empleo y Previsión Social a través de la Dirección General de Trabajo, Higiene y Seguridad Ocupacional confiere el presente “CERTIFICADO”, por la participación en el Curso de Capacitación para representantes del Comité Mixto de Higiene, Seguridad Ocupacional y Bienestar, adjunto al presente correo; el cual deberá ser presentado al momento de presentar el primer reporte cuatrimestral de gestión del Comité Mixto ante la Jefatura Departamental o Regional de Trabajo correspondiente.</td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;">Atentamente.</td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:center;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #FF0000;">Tenga en cuenta que este mensaje de correo electrónico se envió desde una dirección exclusivamente de avisos y notificaciones, por lo que no se responderá correos electrónicos entrantes. <u>Por favor no responda a este mensaje</u>.</td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:left;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><br></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:center;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><b>Dirección General de Trabajo, Higiene y Seguridad Ocupacional</b></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:center;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><b>Telf: 2408606 - Int. 2164</b></td>
            </tr>
            <tr>
              <td style="border-color:#ffffff;border-style:solid;border-width:0px;text-align:center;vertical-align:center;font-family:Arial, sans-serif;font-size:13px;overflow:hidden;word-break:normal; color: #111;"><b>La Paz – Bolivia</b></td>
            </tr>

            <tr>
              <td style="text-align:center;vertical-align:center; color: #999;"><br><small>Ministerio de Trabajo Empleo y Previsión Social - 2022</small></td>
            </tr>
          </tbody>
        </table>
      </center>
    </div>';

    $mail->send();
  }
  catch (Exception $e) {
    echo "Mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
  }
