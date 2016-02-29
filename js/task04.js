function getZodiac(month, day){
    var zodSignsList = ["Ožiaragis" , "Vandenis", "Žuvys", "Avinas",
    "Jautis", "Dvyniai", "Vėžys", "Liūtas", "Mergelė", "Svarstyklės", "Skorpionas", "Šaulys"];
    var zodiacSign = "";
    switch(month)
    {
        case 0: {//January
                 if(day < 20)
                    zodiacSign = zodSignsList[0];
                 else
                    zodiacSign = zodSignsList[1];
                }break;
        case 1: {//February
                 if(day < 19)
                    zodiacSign = zodSignsList[1];
                 else
                    zodiacSign = zodSignsList[2];
                }break;
        case 2: {//March
                 if(day < 20)
                    zodiacSign = zodSignsList[2];
                 else
                    zodiacSign = zodSignsList[3];
                }break;
        case 3: {//April
                 if(day < 20)
                    zodiacSign = zodSignsList[3];
                 else
                    zodiacSign = zodSignsList[4];
                }break;
        case 4: {//May
                 if(day < 21)
                    zodiacSign = zodSignsList[4];
                 else
                    zodiacSign = zodSignsList[5];
                }break;
        case 5: {//June
                 if(day < 21)
                    zodiacSign = zodSignsList[5];
                 else
                    zodiacSign = zodSignsList[6];
                }break;
        case 6: {//July
                 if(day < 22)
                    zodiacSign = zodSignsList[6];
                 else
                    zodiacSign = zodSignsList[7];
                }break;
        case 7: {//August
                 if(day < 23)
                    zodiacSign = zodSignsList[7];
                 else
                    zodiacSign = zodSignsList[8];
                }break;
        case 8: {//September
                 if(day < 23)
                    zodiacSign = zodSignsList[8];
                 else
                    zodiacSign = zodSignsList[9];
                }break;
        case 9: {//October
                 if(day < 23)
                    zodiacSign = zodSignsList[9];
                 else
                    zodiacSign = zodSignsList[10];
                }break;
        case 10: {//November
                 if(day < 22)
                    zodiacSign = zodSignsList[10];
                 else
                    zodiacSign = zodSignsList[11];
                }break;
        case 11: {//December
                 if(day < 22)
                    zodiacSign = zodSignsList[11];
                 else
                    zodiacSign = zodSignsList[0];
                }break;
     }
     document.getElementById('04').innerHTML = 'Zodiako ženklas yra: '+ zodiacSign;
}