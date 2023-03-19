# Zadanie rekrutacyjne firmy Printu

## Zadanie 1

Aby funkcja `hashOrder` spełniała warunki wymienione w zadaniu, a przede wszystkim warunki
unikalności i powtarzalności, postanowiłem wykonać na wartości wejściowej proste dodawanie
losowej stałej, potem dzielenie modulo. Dodatkowo wykonałem "zamianę" cyfr w ciągu wejściowym za
pomocą funkcji `strtr`, właściwie taka zamiana wystarczyłaby do spełnienia warunków zadania, obyło
by się bez korzystania z biblioteki `bcmath`.

Mimo spełnienia warunków zadania, wyniki są kiepskiej jakości, np. dla kolejnych wartości wejściowych
wyniki są podobne, co widać gołym okiem, można by pokusić się o napisanie w pełni profesjonalnej
funkcji `hashującej`, która dawała by wartości w pełni losowe.

`test1.php` to funkcja Państwa autorstwa do sprawdzenia funkcji `hashOrder` uzupełniona na początku niezbędnymi
liniami, `test11.php` to zwykłe wywołanie `hashOrder` dla kilku losowych wartości wejściowych, uruchamiane były
z linii poleceń za pomocą komendy `php -f <nazwa>`.

## Zadanie 2

`test22.php` to zwykłe wywołanie `findUniqueString` dla kilku losowych wartości wejściowych, uruchamiane były
z linii poleceń za pomocą komendy `php -f test22.php`.

## Zadanie 3

Miałem spore trudności, wiem co to jest REST API, potrafię zrobić routing w Symfony, wiem jak to działa, robiłem
kiedyś REST API w gołym PHP itd ... ale nigdy nie robiłem, nie korzystałem z OPENAPI, dokształciłem się sporo w
internecie i efekt tego jest w pliku `openapi.yaml`, na pewno nie jest to całkowicie dobrze, ale sporo się nauczyłem,
oczywiście zostaje mnóstwo szczegółów do poznania ...

