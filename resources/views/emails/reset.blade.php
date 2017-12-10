<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    </head>
    <body style="background:#000; margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0; font-family: 'Montserrat', sans-serif;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="display:block; width: 600px; height: 1125px;" width="600px">
            <tbody>
                <tr height="30" width="600" style="background:#000;"></tr>
                <tr width="600" style="background:#000;"> 
                    <td width="440"></td>
                    <td width="160"><img style="margin-top: 10px;" src="http://kswgym.pl/mailing_rejestracyjny/logo.png" alt="logo KSW"></td>
                </tr>
                <tr height="190" width="600" background="Mailing_tlo_gora.jpg" style="background-image: url( http://kswgym.pl/mailing_rejestracyjny/Mailing_tlo_gora.jpg ); height:190px;width: 600px;">
                    <td width="600" colspan="4">
                        <p style="font-size: 34px; font-weight: 300; color: #e10000; margin-top:60px; margin-bottom:20px; margin-left: 50px;">KSW GYM</p>
                        <p style="font-size: 22px; font-weight: 300; color: #ffffff; margin-top:10px; margin-bottom:10px; margin-left: 50px;">RESETOWANIE HASŁA</p>
                    </td>					
                </tr>
                <tr style="background:#000;">
                    <td colspan="4" width="600" height="170" style="width: 600px; height: 170px;">
                        <p style="background:#000; font-size: 16px; font-weight: 300; color: #fff; margin-left: 50px;">Żeby zmienić swoje hasło, kliknij w poniższy link od <span style="font-weight: 600">KSW Cross Fight Gym!</span></p>
                        <p style="background:#000; font-size: 16px; font-weight: 300; color: #fff; margin-left: 50px;">Jeśli nie chcesz go zmienić lub to nie Ty wysłałeś zapytanie, możesz zignorować tę wiadomość. </p>
                    </td>
                </tr>
                <tr style="background:#000;">
                    <td colspan="4" width="600" height="90" style="width: 600px; height: 90px; text-align: center;">
                        <a href="{{ url('/przypomnijhaslo/'.$token.'/'.$email) }}" style="font-family: 'Montserrat', sans-serif; width: 170px; height: 45px; background-color: #e10000; padding-top: 13px; padding-bottom: 13px; padding-left: 20px; padding-right: 20px; text-decoration: none; color: #ffffff;">KSWgym</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </body>
</html>