<?php 

 function getEmail($dados){
    print_r($dados); 
	$html = "
<html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <title>Lima & Souza Advogados</title>
        <!-- Jquery Framework -->
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
        <!-- API 2 -->
        <script type='text/javascript' src='http://www.stampready.net/api2/api.js'></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            @import url('https://fonts.googleapis.com/css?family=Open Sans');
        </style>
    </head>
    <div class='cabecalho_email'>
        <table bg-color='#7f8c8d' style='font-family: 'Montserrat', Arial, sans-serif;color:#7f8c8d' width='100%' bgcolor='#fff' align='center' border='0' cellspacing='0' cellpadding='0'>
            <tbody>
            <tr>
                <td data-bg='header bg' data-bgcolor='header bg' align='center' bgcolor='#ececec'>
                    <table align='center' border='0' cellpadding='0' cellspacing='0'>
                        <tbody>
                        <tr>
                            <td width='600' align='center' bgcolor='#14423b'>
                                <table width='100%' border='0' align='left' cellpadding='0' cellspacing='0'>
                                    <tbody>
                                    <tr>
                                        <td align='center' data-link-style='text-decoration:none; color:#a2a9af;' data-link-color='Content' data-size='Content' data-color='Content' style='font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#a2a9af; line-height:30px;'>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='30px' style='text-align: center;'> 
                                             <img src='https://docs.google.com/uc?id=1WrgevQ_P2RoKTmylM1G-cmOXzHp8hvGm' alt='logo'>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class='body_email'>
        <table data-module='travel 2' data-thumb='thumbnails/thumbnail2.png' data-bgcolor='Main BG' width='100%' style='font-family: 'Montserrat',Arial, sans-serif;' bgcolor='#ececec' border='0' cellspacing='0' cellpadding='0'>
            <tbody>
            <tr>
                <td align='center'>
                    <table align='center' border='0' cellspacing='0' cellpadding='0'>
                        <tbody>
                        
                        <tr>

                            <td width='600' bgcolor='#fff' align='center'>
                                <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0'>
                                    <tbody>
                                    
                                    <tr>
                                        <td style='color:#141d23;margin-left:20px;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding: 10px 10px 10px 25px'>Recebemos um novo contato de e-mail.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='20'></td>
                                    </tr>

                                    <tr>
                                        <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding-left: 25px'>Nome :{$dados['contact-name']}</p>

                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding-left: 25px'>Email : {$dados['contact-email'] }</p>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding-left: 25px'>Telefone : {$dados['contact-telephone'] }</p>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:600;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding-left: 25px'>Mensagem :</p>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60'>
                                            <p style='padding-left: 25px; padding-bottom: 25px'>{$dados['contact-message'] }</p>
                                             
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class='footer_email'>
        <table bg-color='#7f8c8d' style='font-family: 'Montserrat', Arial, sans-serif;color:#7f8c8d' width='100%' bgcolor='#fff' align='center' border='0' cellspacing='0' cellpadding='0'>
            <tbody>
            <tr>
                <td data-bg='header bg' data-bgcolor='header bg' align='center' bgcolor='#ececec'>
                    <table align='center' border='0' cellpadding='0' cellspacing='0'>
                        <tbody>
                        <tr>
                            <td width='600' align='center' bgcolor='#14423b'>
                                <table width='100%' border='0' align='left' cellpadding='0' cellspacing='0'>
                                    <tbody>
                                        <tr>
                                            <td height='5'></td>
                                        </tr>
                                    <tr>
                                        <td align='center' data-link-style='text-decoration:none; color:#fffff;' data-link-color='Content' data-size='Content' data-color='Content' style='font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#fffff; line-height:30px;'>
                                            <p style='text-align: center; color: white'>
                                                © 2018. Designed by <a href='http://www.limaesouzaadvogados.com.br' style='color: #af9e2d !important;font-family: Open Sans, Arial, sans-serif; font-size:15px;' data-color='copy right color'>Lima & Souza Advogados</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height='5'></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</html>
		";

		return $html;
}