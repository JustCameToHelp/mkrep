# Struktura HTML na k-reportu

Popsáno v pseudo-XPath

## discus.pl
- `/html/body/div(obal)/div(obsah)/div(odsazeni)/div(sloupecD)`
  zde je hlavní obsah
  - `/table(diskuse_nadpis)/tbody/tr/td/h1`

## *.html (???)
- `/html/body/div(obal)/div(obsah)/div(odsazeni)/div(sloupecD)`
  zde je hlavní obsah
 - `p`
   (nepovinné) odstavec s případnou hlavičkou diskuze (oběhy, sdělení moderátorů, ...)
 - `table(diskuze_zahlavi)`
   záhlaví - cesta v diskuzích
 - `table(diskuze_tabulka)`
   (nepovinné) první výskyt - tabulka s archivem
 - `table(diskuze_tabulka)`
   případný druhý výskyt - tabulka s příspěvky
 - `a(name=konec)`
   za posledním příspěkem, možno využít pro scrollovací kotvu
