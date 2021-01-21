## **A rendszer célja és nem céljai**

Célunk egy régi 2000-es évek eleji viccportálok hangulatát idéző weboldal létrehozása, mely a jelenleg nagyban elterjedt mém alapú szórakoztatás helyett a tradícionális értelemben vett "favicceket" helyezi előtérbe, ezzel kedvezve az idősebb generációnak illetve, az erre fogékony fiataloknak.

Nem célunk vetélytársat állítani a ma eltejedt közösségi oldalakon terjedő viccoldalaknak és csoportoknak.

## **Projekt terv**

Project dolgozók: 

-Lányi Martin, GI III: Backend fejlesztés PHP keretrendszerben, adatbázis architekturális megtervezése és kivitelezése, a projekt webserverének kialakítása.
-Takács Róbert, PTI II: A weboldal frontendjének megtervezése és kiépítése HTML5 és CSS3 technológiák használatával, kutatás webarchívumokból hogy a kész weboldal minél korhűbb legyen. 
-Gengeliczki Péter, GI III: Adatbázis adminisztráció, valamint a kezdő viccanyag szelektálása és feltöltése.
-Oláh Ádám GI III: Projektmenedzseri feladatok, a Git és a Trello naprakészen tartása, dokumnetációk a tagok jelentései alapján elkészítése, valtozás esetén módosítása. 
				  
		Tervezet: Követelmény Specifikáció, Funkcionális Specifikáció, Rendszer Dizájn, Adattárolás, Tesztek
		BackEnd: A back-end réteg feladata a front-end réteg felől érkező adatok feldolgozása, illetve a keletkezett eredmény a front-end számára történő visszajuttatása.
		FrontEnd: A front-end réteg feladata a rendszerből kijutó adatok prezentálása, illetve a bejövő adatok fogadása a felhasználó vagy a csatlakoztatott rendszer felől.
		
## **Weboldal folyamatok modellje**
### Weboldal Szereplők
Felhasználó: Ez az alapértelmezett felhasználó. Ő tud vicceket keresni, illetve beküldeni.

Admin: Webhely karbantarásáért felel, esetleges frissítések telepítése.

## **Használati folyamat**
* 1.Regisztráció
* 2.Bejelentkezés
* 3.Viccek keresése
* 4.Új vicc hozzáadása

## **Üzleti folyamat**
### Lekérési folyamat folyamat:

### Beküldési folyamat

## **Fizikai környezet**

A mi elképzelésünk az, hogy html, php, css és Java script nyelven fogunk fejleszteni és mivel mi webszerverre fejlesztünk, ezért az adatbázisunk egy localhost szerveren fog futni, amiről tudunk adatokat lekérdezni, illetve feltölteni. Mivel ez egy weblap felületen fog működni, ezért mint windowson mint linux rendszeren elérhető lesz ez a weboldal. Hálózatot tekintve LAN hálózatot fejlesztünk de később célunk kiterjeszteni az egész weboldalt egy WAN méretűre. 


Részei | Leírás
----------------------|-------
Fejlesztői eszközök| PhP, CSS, HTML, Apache server
Keretrendszer| MYSQL adatbázis


## **Implementációs terv**

### Perzisztencia osztályok:
	
* Joke - Database Schema
* User - Database Schema
* Category - Database Schema
	
### Üzleti logika osztályok:
	
* Database
* Routing
* Config
* UserManager

### Kliens oldal osztályai:
	
 * ListView
 * RandomJoke
 * Register
 * Login

## **Karbantartási terv**

A szoftver a jövőben nem igényel nagy karbantartásokat, a szükséges karbantartások az 
alábbi egységekből állnak:

1. Frissebb verziójú böngészőkben történő tesztelés, hiba észlelése esetén azoknak javítása.
2. A kiszolgáló szerver státuszának ellenőrzése, offline szerver esetén újraindítás.
3. Igény esetén új funkciók implementálása.  

## **Telepítési terv**

### **Fizika telepítési terv:**

- Az alkalmazás egy tetszőleges webszerverre kerül majd az endpointok domainhez rendelése után használatra kész, mivel szerveroldali renderelést választottunk más konfigurálás nem szükséges.

### **Szoftver telepítési terv:**

- A szoftver webes felületéhez csak egy ajánlott böngésző telepítése szükséges
  (Google Chrome, Firefox, Opera, Safari), külön szoftver nem kell hozzá.  

### **Tesztterv:**

Tesztterv
A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata, ellenőrzése, a rendszer által megvalósított üzleti szolgáltatások verifikálása.
Tesztelési eljárások
			
	Unit teszt:

		Ahol csak lehetséges, szükséges már a fejlesztési idő alatt is tesztelni, hogy a metódusok megfelelően működnek-e.
		Ezért a metódusok megfelelő működésének biztosítására mindegyikhez írni kell Unit teszteket, a minnél nagyobb kódlefedettséget szem előtt tartva.
		A metódusok akkor vannak kész, ha a tesztesetek hiba nélkül lefutnak az egyes metódusokon.		
			
	Alfa teszt:

		A teszt elsődleges célja: az eddig meglévő funkcióknak a különböző böngészőkkel való kompatibilitásának tesztelése. 
		A tesztet a fejlesztők végzik.
		Az eljárás sikeres, ha különböző böngészőkben is megfelelően működnek a különböző funkciók. 
		A teszt időtartama egy hét.
		
	Beta teszt:

		Ezt a tesztet nem a fejlesztők végzik.
		
		Tesztelendő böngészők: Opera, Firefox, Google Chrome, Safari
		Tesztelendő kijelzőméretek: 800x460 (minimum), 1366x768, 1920x1080

		A teszt időtartama egy hét. 
		A tesztelés alatt a tesztelő felhasználók visszajelzéseket küldhetnek a fejlesztőknek, probléma/hiba felmerülése esetén.
		Ha hiba lép fel, a fejlesztők kijavítják a lehető leghamarabb. Sok hiba esetén a tesztelés ideje elhúzódhat.
		
## **Architekturális terv**

Az architekturális terv a következőképpen épül fel:

	- BackEnd: Használati nyelv a PHP lesz és ehhez társul egy adatbázis kapcsolat is.
	- FrontEnd: Legfőképp HTML és CCS használata illetve JavaScript.
	- Rendszer: Menük illetve funkciók létrehozása, mint pl: regisztráció, belépés, kilépés, viccmenük, random vicc.
	
A Backend egy szerveroldalon renderelt PHP alkalmazás, adatbáziskapcsolattal, a frontend ebből generált HTML5 kód, CSS3 stíluslapokkal.

## **Követelmények**

### **Funkcionális követelmények:**


### **Nem-funkcionális követelmények:**
#### **A weboldal:**

	
### **Törvényi előírások, szabványok:**
#### **Az egyenlő bánásmódról és az esélyegyenlőség előmozdításáról szóló törvény**
	A törvény 4.§-a szerint az egyenlő bánásmód követelményét alapvetően az állami, önkormányzati és 
	egyéb közcélú szervezetek kötelesek megtartani, azonban az 5.§ ezt a kötelezettséget bizonyos magánszereplőkre is előírja. 
	Így például arra a magánszereplőre, aki az ügyfélforgalom számára nyitva álló helyiségeiben szolgáltatást nyújt vagy árut forgalmaz.
#### **A közszférabeli szervezetek honlapjainak és mobilalkalmazásainak akadálymentesítéséről szóló törvény**
	A közszférabeli szervezetek honlapjai és mobilalkalmazásai alapvetően a WCAG 2.1 szabvány „AA” szintű teljesítési feltételeinek
	feleljenek meg. Ugyan a törvény a WCAG szabványt közvetlenül nem nevesíti, de áttételesen mégis erre a szabványra
	vezethető vissza szinte minden.
#### **A közérdekű adatok elektronikus közzétételére vonatkozó kormányrendelet**
	A közzétételre szolgáló honlapot úgy kell kialakítani, hogy az a széles körben elterjedt, valamint a vakok és gyengénlátók 
	által széles körben használt eszközökkel is olvasható legyen.
	
#### **Szabványok**
##### **WCAG 2.0 (ISO/IEC 40500:2012) szabvány**
	A W3C által összeállított WCAG 2.0 web akadálymentesítési útmutató sokáig csak iparági ajánlás volt, de a szakma mindig 
	de-facto szabványként tekintett rá. Aztán 2012 októberében a nemzetközi szabványügyi testület ISO/IEC 40500:2012 számon 
	nemzetközi szintű hivatalos (de-jure) szabvánnyá emelte.
	
	A tolmácsszolgálat önálló honlapot működtet, amely tartalmazza a tolmácsszolgálat szolgáltatási rendjét a (2) bekezdés a)–c) pontja 
	szerinti formátumokban, és megfelel a WCAG 2.0 webes akadálymentesítési ajánlás legalább „A” szintjének.
##### **WCAG 2.1 szabvány**
	A 2018 júniusában megjelent WCAG 2.1 szabvány kibőviti a WCAG 2.0 szabványt. Így tehát azok a weboldalak, amelyek megfelelnek
	a WCAG 2.1-nek, egyben a WCAG 2.0-nak is megfelelnek. A WCAG 2.1 megjelenésével a WCAG 2.0 nem lett visszavonva, illetve 
	nem vesztette el a hatályát.
##### **MSZ EN 301 549:2015 szabvány**
	Célja, hogy a közbeszerzésekben érdekelt felek erre a szabványra hivatkozhassanak például a digitális eszközök, weboldalak, szoftverek 
	akadálymentességének biztosítása során.
##### **EN 301 549 V2.1.2 (2018-08) harmonizált európai szabvány**
	Az EN 301 549 szabvány legfrissebb verziója. Az előző verziókhoz képest az egyik legfontosabb változás benne az, hogy ez már 
	a WCAG 2.1 szabványra hivatkozik, amikor a weboldalak, az elektronikus dokumentumok, és a nem web alapú szoftverek 
	(így például a mobilalkalmazások) akadálymentességét szabályozza. Vagyis ha egy weboldal megfelel a WCAG 2.1 szabvány „AA” szintjének, 
	akkor szinte biztos, hogy megfelel az EN 301 549 V2.1.2 (2018-08) szabványnak is.
	
## **Funkcionális terv**

### **Rendszerszereplők:**
#### **Admin**

#### **Felhasználó**

#### **Látogató**

### **Menü hiearchiák**

