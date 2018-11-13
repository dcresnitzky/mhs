<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato - MHS Global</title>

<script src="../../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
}
.style2 {font-size: 15px}
-->
</style>
</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="200" background="../imagens/fundo-esqu.png">
            
            
            
            <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','200','height','700','src','../lateral','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','../lateral' ); //end AC code
            </script>
            <noscript>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="200" height="700">
              <param name="movie" value="../lateral.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <embed src="../lateral.swf" width="200" height="700" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
            </object>
            </noscript>
                      </td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','239','src','../topo','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','../topo' ); //end AC code
                </script>
              <noscript>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="239">
                <param name="movie" value="../topo.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <embed src="../topo.swf" width="800" height="239" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
              </object>
              </noscript></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
              <tr>
                <td width="18%" height="58" align="center" valign="top">
<div style="font-size:15px; font-weight:bold">
  <p><a href="index.html">MHS Global</a></p>
                </div>                </td>
                <td width="12%" align="center" valign="top"><p class="style1"><a href="areas-de-atuacao.html" class="style2">What we do</a></p></td>
                <td width="17%" align="center" valign="top"><p class="style2"><strong><a href="parcerias.html">Partnership</a></strong></p>                  </td>
                <td width="12%" align="center" valign="top"><p class="style2"><strong><a href="novidades.html">News</a></strong></p>                  </td>
                <td width="10%" align="center" valign="top"><p class="style2"><strong><a href="clientes.html">Clients</a></strong></p></td>
                <td width="10%" align="center" valign="top"><p class="style2"><strong><a href="contato.html">Contact us</a></strong></p></td>
                <td width="7%" align="center" valign="middle"><a href="../"><img src="../imagens/bandeira-brasil.jpg" width="37" height="24" border="0" /></a><a href="../en"></a></td>
                <td width="7%" align="center" valign="middle"><a href="../cn"><img src="../imagens/bandeira-china.jpg" width="37" height="24" border="0" /></a></td>
                <td width="7%" align="center" valign="middle"><a href="../en"><img src="../imagens/bandeira-eua.jpg" width="37" height="24" border="0" /></a></td>
              </tr>
            </table>              </td>
          </tr>
          
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
                    <tr>
                      <td width="40%" valign="top"><h1>Contact</h1>
                      <p><strong>Telephone:</strong> <br />
                        (5511) 85098676</p>
                        <p><strong>E-mail:</strong> <a href="mailto:mhsglobal@mhsglobal.com.br"><br />
                          mhsglobal@mhsglobal.com.br</a></p></td>
                      <td valign="top"><h2>Contact MHS GLOBAL:</h2>
                          <?php

// envia o email
if($_POST['nome']){

$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: ".$_POST['email']."\n";

mail('mhsglobal@mhsglobal.com.br', 'Contato enviado pelo site', '
Nome: '.$_POST['nome'].'
E-mail: '.$_POST['email'].'
Telefone: '.$_POST['telefone'].'
Assunto: '.$_POST['assunto'].'
Mensagem: '.$_POST['mensagem'].'
', $headers);
?>
                          <div style="color:#0099FF; font-size:14px; text-align:center">
                            <p>Mensage sent successfully!</p>
                            <p>We will contact you as soon as possible.</p>
                          </div>
                        <?php
}
?>                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td align="right">&copy; 2010 MHS Global</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
