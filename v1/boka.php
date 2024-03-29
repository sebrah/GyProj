<?php 

include "includes/Vars.php";
include "code.php";

session_start();

checkActive();

logger("visited boka");

if ($_SESSION['stateBoka']) {
    $display0 = "display:none";
    $display1 = "";
} else {
    $display0 = "";
    $display1 = "display:none";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Janson Entian">
    <meta charset="UTF-8">
    <link rel="icon" href="src/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styling/scrollbar.css">
    <link rel="stylesheet" href="styling/delsidor/delsidor.css">
    <link rel="stylesheet" href="styling/delsidor/boka-bord/boka-bord.css">
    <script type="text/javascript" src="scripts/dev.js" defer></script>
    <title>Handlaren | Boka bord</title>
</head>
<body>
    <div class="header">
        <div id="title">Restaurang Handlaren</div>
    </div>
    <div class="main main-fix">
        <div class="content">
            <div class="cont">
                <div class="cont-title">Boka Bord</div>
                <div class="res" style="<?php echo $display1; ?>">Du har bokat! Du kan nu fortsätta på sidan... <div id="btn">Tryck här för att gå tillbaka!</div></div>
            </div>
            <div class="cont-tbl" style="<?php echo $display0; ?>">
                <table>
                    <tr class="dag">
                        <td>Tid</td>
                        <td>Mondag</td>
                        <td>Tisdag</td>
                        <td>Onsdag</td>
                        <td>Torsdag</td>
                        <td>Fredag</td>
                        <td>Lördag</td>
                        <td>Söndag</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td class="vac">
                            <form action="action" method="post" title="Tryck för att välja!">
                                <input type="hidden" name="form_submitted" value="qdNsB" />
                                <button type="submit" value="Submit">Ledigt</button>
                            </form>
                        </td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                    </tr>
                    <tr>
                        <td>13:00</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                    </tr>
                    <tr>
                        <td>17:00</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                    </tr>
                    <tr>
                        <td>18:00</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td class="vac">
                            <form action="action" method="post" title="Tryck för att välja!">
                                <input type="hidden" name="form_submitted" value="qdNsB" />
                                <button type="submit" value="Submit">Ledigt</button>
                            </form>
                        </td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                    </tr>
                    <tr>
                        <td>19:00</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                    </tr>
                    <tr>
                        <td>20:00</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td class="vac">
                            <form action="action" method="post" title="Tryck för att välja!">
                                <input type="hidden" name="form_submitted" value="qdNsB" />
                                <button type="submit" value="Submit">Ledigt</button>
                            </form>
                        </td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td>Fullbokat</td>
                        <td class="vac">
                            <form action="action" method="post" title="Tryck för att välja!">
                                <input type="hidden" name="form_submitted" value="qdNsB" />
                                <button type="submit" value="Submit">Ledigt</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="inf"><!--
            <div class="adress">
                <p class="ttl">Address</p>
                <div class="txt">
                    <p class="adr tel">Furikvägen 63B</p>
                    <p class="cit epost">Stockholm</p>
                </div>
            </div>-->
            <div class="kontakt">
                <p class="ttl">Kontakt</p>
                <div class="txt">
                    <p class="tel">+46 16 788 7491</p>
                    <p class="epost">kontakt@restaurang.se</p>
                </div>
            </div>
        </div>
        <div class="decl">Copyright &copy; 2020 Samuel Entian</div>
    </div>
</body>
</html>