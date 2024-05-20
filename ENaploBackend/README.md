
```
https://www.youtube.com/watch?v=nqngC7WMZzo&list=PLVB63JG1YVK4pyhFPvaJJqIU8LmEzEsle&index=13
```
0:24:00
# 0 Előtte kell egy ```XAMPP``` és egy ```Composer``` install

0:18:40
# 1 feladat: Készítsen egy üres projektet a választott backend keretrendszer segítségével. A projekt neve legyen ENaploBackend!
019:05
1. Az adott mappában, projekt neve legyen ```ENaploBackend``` így ```c:\vue-gyak-enaplo``` kiadjuk a CLI parancsot ```composer create-project laravel/laravel ENaploBackend```

2. Indítsd el a XAMPP Contorl Panelt és ebből az Apache-ot és a MySQL-t és a PHPmyadmint!

3. CSinálj egy adatbázist ```enaplo``` néven, pl. php myadninnal ```http://localhost/phpmyadmin/```  vagy heide-val.

4. 




b)	Készítse el a „students” és a „grades” táblákat az alábbiak szerint. 
	a.	A „students” táblát adatbázis migráció segítségével hozza létre! (kiegészíthető a keretrendszer által megkövetelt oszlopokkal)
		- id: egész szám, a tanuló  azonosítója, elsődleges kulcs, automatikusan kap értéket
		- name: szöveg mely a tanuló nevét tárolja, maximális hossza 255 karakter lehet
		- active: boolean, az alapértelmezett értéke legyen „true”, azt adja meg, hogy a tanulónak aktív jogviszonya van-e
		- eduid: szöveg, 11 karakteres, a tanuló oktatási azonosítóját tárolja
	
	b.	A „grades” táblát adatbázismigráció segítségével hozza létre! (kiegészíthető a keretrendszer által megkövetelt oszlopokkal)
		- id: egész szám, a osztályzat azonosítója, elsődleges kulcs, automatikusan kap értéket
		- student_id: idegen kulcs, a tanulóra, akihez a jegy tartozik
		- grade: egész szám, értékelés
		- weight: egész szám, értékelés súlya
		- comment: szöveg, 50 karakter, az értékelés magyarázata
	
c)	Illessze be a megfelelő helyre a forrásként kapott Seeder fájlokat valamint a megfelelő sorrendben hivatkozzon rájuk a DatabaseSeeder.php fájlban.

d)	Készítse el az alábbi API végpontokat! 
		- Minden végpont JSON formátumban adja vissza a kimenetet. Hiba esetén jelezze a hiba okát, HTTP státusz kóddal és egy JSON-ben a hiba részleteivel 
			(a JSON-t generálhatja a keretrendszer, vagy a fejlesztő is, amennyiben megfelel a megadott paramétereknek)
		- GET /api/grades
			Adja vissza azokat a jegyeket melyek beírhatóak a rendszerbe
			{
				"data": [
					{grade:1},
					{grade:2},
					{grade:3},
					{grade:4},
					{grade:5},
				],
				"success": true,
				"message": ""
			}
		- GET /api/students
			Adja vissza az összes tanulót és azok adatait. Az eredmény egy tanuló objektumokból álló lista legyen az alábbi formában:
			{
				"data": [
					{
						"id":1,
						"name":"Pista",
						"eduid":"7777777777"
					},
				],
				"success": true,
				"message": ""
			}
		- GET /api/students/:id
			Adja vissza egy tanuló összes adatát. Az eredményt egy objektumként adja vissza. 
			A kérésben az „:id” paraméterként szerepel, melyben egy tanuló „id”-t ad át a hívó.
			{
				"data": [
					{
						"id":1,
						"name":"Pista",
						"eduid":"7777777777",
						"grades":[
							"grade":?,
							"weight":?,
							"comment":?
						]
					},
				],
				"success": true,
				"message": ""
			}
		- POST /api/grades
			A kérés törzse egy JSON objektum, mely tartalmazz egy új osztályzat adatait, melyek a következők:
			{
				"student_id" : 1
				"grade" : 2
				"weight" : 1
				"comment" : "Új osztályzat"
			}
e)	A POST /api/types végpont ellenőrizze, hogy a bemeneti információk megfelelőek-e az alábbi elven.
		- student_id: kötelező kitölteni és csak olyan értéket fogad el, mely a „group” táblában létező id.
		- grade: kötlező és egész szám
		- weight: kötelező és egész szám
		- comment: kötelező és szöveg
	
		Validációs probléma esetén JSON formátumú válaszban jelezze azt a backend a frontend felé.
		Amennyiben az adatok megfelelőek, vegye fel adatbázisba a osztályzatot és adja azt vissza, 201-es státusz kóddal és „Created” üzenettel.


f)	Készítsen nézetet grades.blade.php néven, ahol a jegyek jelennek meg a mintának megfelelően meg jeleníti számozatlan felsorolásban és a hozzájuk tartozó tanulókat is szintén egy számozatlan felsorolásban. 
	A nézet a "GET /" végpont betöltésekor jelenjen meg.




Segítségül használhatók:
	internetkapcsolat, amely használható:
		átalános keresésre;
		online dokumentáció elérésére;
		projekt keretek létrehozására, csomagok telepítésére.


