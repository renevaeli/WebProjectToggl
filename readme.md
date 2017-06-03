Projekti eesmärgiks on luua lihtne toggl-i sarnane veebirakendus.

Omadused:
- võimalik panna timer käima
- timeri peatades salvestatakse trackitud tegevuse info (kirjeldus, algusaeg, lõppaeg, timer) andmebaasi
- trackitud tegevused kuvatakse timeri all tabelis
- kasutajal võimalik luua konto ja logida sisse
- kasutajale kuvatakse ainult tema trackid
- kasutaja saab välja logida, sessioon lõpetatakse

Turvalisus
- kasutaja ei saa väljadele sisestada html-i
- kasutaja ei saa andmebaasi saata SQLi (kasutatud mysqli_real_escape_string)

Nice to have:
- tegevusgruppide lisamine ja gruppide kaupa ajakasutuse vaatamine
- ilus css
- tabelis ridadel andmete muutmine, andmebaasis uuendamine
- tabelis ridade kustutamine
