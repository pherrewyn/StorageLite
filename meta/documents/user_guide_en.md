# Storage24Lite PlentyMarkets Plugin

Storage24Lite is a PlentyMarkets Plugin which gives you the posibility to manage your Warehouse by using the REST-Api.

## Rights

<div class='alert alert-warning' role='alert'>
    The user needs the rights from the REST-API for (Items)(variation)(search)
</div>
Settings » Basic Settings » User » Acounts » {User} » Rights » REST-API » Items » variation » search


## 1. Access

The Plugin can be accessed by {ShopUrl}/storagelite.

## 2. Login

After the access you have to login your user.

## 3. Einbuchen

As first step please choose your Warehouse.
In the field "EAN" you have to insert a variant barcode.
If just one variant has found the variant will be automatically selected, if more than one variant has found the user has to chose the variant by him self.
As next step the cursor is jump after the selection of the variant in the field "Menge", unless the checkbox "Standardisierte Menge" is active, then jump directly to the field "Lagerortbarcode". Pressing the "Enter" key in the "Menge" field jumps to the "Lagerortbarcode" field.
As soon as a valid storage location barcode has been scanned in the "Lagerortbarcode" field, the process will booked by using the Rest-Api.

## 4. Umbuchen

As first step please choose your Warehouse.
In the field "EAN" you have to insert a variant barcode.
If just one variant has found the variant will be automatically selected, if more than one variant has found the user has to chose the variant by him self.
As soon as an article has been selected, the storage locations on which the article consisted of the selected stores are displayed. As next step the cursor is jump after the selection of the variant in the field "Menge", unless the checkbox "Standardisierte Menge" is active, then jump directly to the field "Lagerortbarcode". Pressing the "Enter" key in the "Menge" field jumps to the "Lagerortbarcode" field.
As soon as a valid storage location barcode has been scanned in the "Lagerortbarcode" field, the process will booked by using the Rest-Api.

