(function(d){	const l = d['sk'] = d['sk'] || {};	l.dictionary=Object.assign(		l.dictionary||{},		{"%0 of %1":"%0 z %1","Block quote":"Citát",Bold:"Tučné","Bulleted List":"Zoznam s odrážkami",Cancel:"Zrušiť","Cannot upload file:":"Nie je možné nahrať súbor:","Choose heading":"Vyberte nadpis",Column:"Stĺpec","Could not insert image at the current position.":"Obrázok nie je možné vložiť na vybranú pozíciu.","Could not obtain resized image URL.":"Nepodarilo sa získať URL adresu zmenšeného obrázka.","Delete column":"Odstrániť stĺpec","Delete row":"Odstrániť riadok",Downloadable:"Na stiahnutie","Dropdown toolbar":"Panel nástrojov roletového menu","Edit link":"Upraviť odkaz","Editor toolbar":"Panel nástrojov editora","Header column":"Stĺpec hlavičky","Header row":"Riadok hlavičky",Heading:"Nadpis","Heading 1":"Nadpis 1","Heading 2":"Nadpis 2","Heading 3":"Nadpis 3","Heading 4":"Nadpis 4","Heading 5":"Nadpis 5","Heading 6":"Nadpis 6","image widget":"widget obrázka","Insert column left":"Vložiť stĺpec vľavo","Insert column right":"Vložiť stĺpec vpravo","Insert image or file":"Vložiť obrázok alebo súbor","Insert paragraph after block":"","Insert paragraph before block":"","Insert row above":"Vložiť riadok nad","Insert row below":"Vložiť riadok pod","Insert table":"Vložiť tabuľku","Inserting image failed":"Vloženie obrázka zlyhalo",Italic:"Kurzíva",Link:"Odkaz","Link URL":"URL adresa","Merge cell down":"Zlúčiť bunku dole","Merge cell left":"Zlúčiť bunku vľavo","Merge cell right":"Zlúčiť bunku vpravo","Merge cell up":"Zlúčiť bunku hore","Merge cells":"Zlúčiť bunky",Next:"Ďalšie","Numbered List":"Číslovaný zoznam","Open in a new tab":"Otvoriť v novej záložke","Open link in new tab":"Otvoriť odkaz v novom okne",Paragraph:"Paragraf",Previous:"Predchádzajúce",Redo:"Znova","Rich Text Editor":"Editor s formátovaním","Rich Text Editor, %0":"Editor s formátovaním, %0",Row:"Riadok",Save:"Uložiť","Select column":"","Select row":"","Selecting resized image failed":"Vybranie zmenšeného obrázka zlyhalo","Show more items":"","Split cell horizontally":"Rozdeliť bunku vodorovne","Split cell vertically":"Rozdeliť bunku zvislo","Table toolbar":"Panel nástrojov tabuľky","This link has no URL":"Tento odkaz nemá nastavenú URL adresu",Undo:"Späť",Unlink:"Zrušiť odkaz","Upload in progress":"Prebieha nahrávanie","Widget toolbar":"Panel nástrojov ovládacieho prvku"}	);l.getPluralForm=function(n){return (n % 1 == 0 && n == 1 ? 0 : n % 1 == 0 && n >= 2 && n <= 4 ? 1 : n % 1 != 0 ? 2: 3);;};})(window.CKEDITOR_TRANSLATIONS||(window.CKEDITOR_TRANSLATIONS={}));