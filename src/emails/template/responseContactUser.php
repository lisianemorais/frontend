<?php 

 function getEmail($dados){
	$html = "
		<html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                <title>Lima&Souza</title>
                <!-- Jquery Framework -->
                <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
                <!-- API 2 -->
                <script type='text/javascript' src='http://www.stampready.net/api2/api.js'></script>
                <style>
                    @import url('https://fonts.googleapis.com/css?family=Montserrat');
                    @import url('https://fonts.googleapis.com/css?family=Open Sans');
                </style>
            </head>
            <table bg-color='#14423b' style='font-family: 'Montserrat', Arial, sans-serif;color:#ffffff' width='100%' bgcolor='#fff' align='center' border='0' cellspacing='0' cellpadding='0'>
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
                                            <td height='20px'></td>
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

            <body>
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
                                            <tr height='50'></tr>
                                            <tr>
                                                <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:26px;font-weight:600;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60' align='center'>
                                                    Olá  {$dados['contact-name']}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height='20'></td>
                                            </tr>

                                            <tr>
                                                <td style='color:#141d23;font-family: 'Montserrat',Arial, sans-serif;font-size:18px;padding-right:30px;padding-left:30px;font-weight:500;letter-spacing:1px;line-height:30px;' data-bgcolor='Title' data-color='Title' data-size='Title' data-min='12' data-max='60' align='center'>
                                                    Obrigada por contatar nosso escritório! Em breve retornaremos seu contato.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height='20'></td>
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
                <table bg-color='#14423b' style='font-family: 'Montserrat', Arial, sans-serif;color:#ffffff' width='100%' bgcolor='#fff' align='center' border='0' cellspacing='0' cellpadding='0'>
                    <tbody>
                    <tr>
                        <td data-bg='header bg' data-bgcolor='header bg' align='center' bgcolor='#ececec'>
                            <table align='center' border='0' cellpadding='0' cellspacing='0'>
                                <tbody>
                                <tr>
                                    <td width='600' align='center' bgcolor='#14423b'>
                                        <table width='100%' border='0' align='left' cellpadding='0' cellspacing='0'>
                                            <tbody>
                                            <tr style='color': '#ffffff' >
                                                <td height='10px'></td>
                                            </tr>
                                            <tr>
                                                <td style='color': '#ffffff' align='center' data-link-style='text-decoration:none; color:#ffffff;' data-link-color='Content' data-size='Content' data-color='Content' style='font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#ffffff; line-height:30px;'>
                                                    <singleline>
                                                        © 2018. Designed by <a href='http://www.limaesouza.online' style='font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#ffffff ;' data-color='copy right color'>Lima e Souza Advogados</a>
                                                    </singleline>
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
            </body>
            </html>
		";

		return $html;
}