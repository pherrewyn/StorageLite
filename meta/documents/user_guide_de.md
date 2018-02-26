# Storage24Lite PlentyMarkets Plugin

<<<<<<< HEAD
Storage24Lite ist ein PlentyMarkets Plugin welches euch die möglichkeit gibt eure Läger mithilfe der REST-Api zu verwalten.
=======
Storage24Lite ist ein PlentyMarkets Plugin welches euch die möglichkeit gibt euer Lager mithilfe der REST-Api zu verwalten.
>>>>>>> c4db4bdaac68d60eb5487737cf853c6266a42e5a

## Berechtigungen

<div class='alert alert-warning' role='alert'>
    Der Benutzer benötigt die Berechtigungen der REST-Api im Bereich (Artikel)(variation)(search)
</div>
Einstellungen » Grundeinstellungen » Benutzer » Konten » {Benutzer} » Berechtigung » REST-API » Artikel » variation » search

## 1. Einrichtung

Das Plugin auf dem Plentymarkets-Marketplace kaufen und installieren. Daraufhin die Mandanten auswählen und das Plugin in Productive bereitstellen.

## 2. Aufruf

Das Plugin lässt sich über die URL {ShopUrl}/storagelite aufrufen.

## 3. Login

Sofern der Benutzer sich bereits im Plentymarkets-Backend angemeldet hat, muss er sich im Storage nicht mehr anmelden.

<<<<<<< HEAD
=======
[BILD]

>>>>>>> c4db4bdaac68d60eb5487737cf853c6266a42e5a
## 4. Einbuchen

Beim Einbuchen/Wareneingang bitte zuerst das Lager auswählen in welches Ihr einbuchen wollt. (Die ausgewählten Lager werden gespeichert)
In dem Feld "EAN" wird ein Barcode erwartet und anhand dessen werden die passenden Varianten angezeigt.
Wenn nur eine Variante passend ist wird diese automatisch ausgewählt, bei einer Mehrfachauswahl muss der Benutzer entscheiden um welchen Artikel es sich handelt.
Als nächsten Schritt wird nach auswahl der Variante in das Feld "Menge" gesprungen, es sei denn die Checkbox "Standardisierte Menge" ist aktiv, dann wird direkt in das Feld "Lagerortbarcode" gesprungen. Durch betätigen der "Enter"-Taste im "Menge"-Feld wird in das "Lagerortbarcode"-Feld gesprungen.
Sobald ein valider Lagerortbarcode eingescannt wurde, wird der Wareneingang über die Rest-Api gebucht.

<<<<<<< HEAD
## 5. Umbuchen

Beim Umbuchen/Warenumbuchung bitte zuerst das Lager auswählen aus welches Ihr eure Ware umbuchen wollt.
Das Feld "EAN" reagiert genau so wie beim Einbuchen verfahren. Sobald ein Artikel ausgewählt wurde werden die Lagerorte angezeigt auf denen der Artikel aus den ausgewählten Lagern bestand aufweist. Als nächsten Schritt wird nach auswahl des Lagerorts in das Feld "Menge" gesprungen, es sei denn die Checkbox "Standardisierte Menge" ist aktiv, dann wird direkt in das Feld "Lagerortbarcode" gesprungen. Durch betätigen der "Enter"-Taste im "Menge"-Feld wird in das "Lagerortbarcode"-Feld gesprungen.
Sobald ein valider Lagerortbarcode eingescannt wurde, wird die Warenumbuchung über die Rest-Api vorgenommen.

=======
>>>>>>> c4db4bdaac68d60eb5487737cf853c6266a42e5a
