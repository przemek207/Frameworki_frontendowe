# Frameworki_frontendowe
Dane, które pozyskałem w poprzenim ćwiczeniu postanowiłem jakoś wyświetlić, do tego celu zainstalowałem sobie framework Yii2, 
a następnie wgrałem mu css-y szablonu AdminLte, aby uzyskać nowocześniejszy design. 
Aby poprawić wygląd oraz funkcjonalność strony została dodana obsługa PrettyUrl w pliku konfiguracyjnym znajdującym się w katalogu frontend/config/maim.php

Utworzony został plik getTemp.php, służący do tworzenia połączenia z bazą danych oraz ekstrakcje odpowiednich danych. 
Plik ten umieściłem w katalogu frontend/web/php/getTemp.php
Kolejnym krokiem było utworzenie pliku frontend/views/site/info.php, który służy do wyświetlania danych pozyskanych z bazy. 
Wykorzystany został Google Charts, a więc kod tworzący wykres częściowo został skopiowany ze strony Google Developers.   
