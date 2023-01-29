<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FormueBingo</title>
        
        <!-- Fonts -->
       
        <style>
            .cell-red {
                height: 100px;
                width: 100px;
                background-color: red;
                color: white;
            }
            .cell-white {
                height: 100px;
                width: 100px;
                background-color: white;
                color: black;
            }
        </style>
    </head>
    <body>
        <div>
            <table style="border: 3px solid red; margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto; vertical-align: middle">
                <tr>
                    <td class="cell-red">
                        {{ $bingos[0]->text }}
                    </td>
                    <td class="cell-white">
                        {{ $bingos[1]->text }}
                    </td>
                    <td class="cell-red">
                        {{ $bingos[2]->text }}
                    </td>
                </tr>
                <tr>
                    <td class="cell-white">
                        {{ $bingos[3]->text }}
                    </td>
                    <td class="cell-red">
                        {{ $bingos[4]->text }}
                    </td>
                    <td class="cell-white">
                        {{ $bingos[5]->text }}
                    </td>
                </tr>
                <tr>
                    <td class="cell-red">
                        {{ $bingos[6]->text }}
                    </td>
                    <td class="cell-white">
                        {{ $bingos[7]->text }}
                    </td>
                    <td class="cell-red">
                        {{ $bingos[8]->text }}
                    </td>
                </tr>
            </table>
            
        </div>
        <div>
        
             <h1>FormueBingo</h1>
            <p>Regler: Kopier til Excel/Paint eller skriv ut, og kryss ut når Morgan får de aktuelle spørsmålene på TikTok Live. Dersom du får tre på rad, enten loddrett, vannrett eller diagonalt skriver du Bingo! i chatten. Dersom du får hele brettet, skriver du SuperBingo!</p>
        </div>
    </body>
</html>
