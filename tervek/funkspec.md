# JokeSite Funkcionális specifikáció

**Jelenlegi helyzet**
A klasszikus viccoldalak mára leszállóágra jutottak, szeretnénk a saját belátásaink szerint egy vadonatúj tréfaoldalt/napi kedvderítőt létrehozni.

## **A rendszer célja és nem céljai**

Célunk egy régi 2000-es évek eleji viccportálok hangulatát idéző weboldal létrehozása, mely a jelenleg nagyban elterjedt mém alapú szórakoztatás helyett a tradícionális értelemben vett "favicceket" helyezi előtérbe, ezzel kedvezve az idősebb generációnak, illetve az erre fogékony fiataloknak.

Nem célunk vetélytársat állítani a ma eltejedt közösségi oldalakon terjedő viccoldalaknak és csoportoknak.

## **A rendszerre vonatkozó külső megszorítások**

1. A viccportál használatával, a felhasználó tudomásul veszi és elfogadja az Adatvédelmi és Általános Szerződési Feltételeket.

2. Az Adatvédelmi és Általános Szerződési Feltételeket megtalálhatóak a weboldalon. Az oldal fenntartja a jogot a jelen szabályok módosítására. A változásról és annak hatályba lépésének idejéről weboldalunk ad tájékoztatást.

3. Minden, az ÁSZF-ben nem tárgyalt jogi vonatkozással kapcsolatban a magyarországi törvényeket és a magyarországi hatóságok döntéseit tartjuk irányadónak.

4. A felhasználók az oldalt saját felelősségükre látogatják, az általános szabályok betartásával.

5. Az oldalt bárki látogathatja kortól, nemtől, foglalkozástól és minden egyéb tényezőtől függetlenül.

6. Amennyiben az olvasó az oldal böngészése közben, saját szeméyére sértő tartalmat vél felfedezni, kérje ügyfélszolgálatunk segítségét.


## **Jelenlegi üzleti folyamatok modellje**
### Felhasználói szórakozás
1. Felkeres egy keresőmotoron egy viccportált

2. Rákeres egy viccre amelyet szeretne elolvasni, vagy elolvasa az oldalon generált viccet, vagy választ a kategóriák közül

3. Megveszi a premium verziót, mellyel nem jelennek meg hirdetések az oldalon.


## **Igényelt üzleti folyamatok modellje**
1. Egy olyan szoftver fejlesztése amely segítségével bárhonnan olvashatunk vicceket.
2. Segítségével könnyen elérhetjük kedvenc tréfáinkat.
3. Használata regisztrációhoz között, az ügyfél fenntartja a jogot, hogy a vásárlásokat bármikor megszüntetheti, így admin oldal készítése is elvárt.

## **Követelmény lista**
### Követelmény csoportok
- A : admin felületre vonatkozó követelmények
- U : userre vonatkozó követelmények

### Funkcionális követelmények
Csoport azonosító | Követelmény azonosító | Leírás
----------|---------|-----
A| A_login | admin bejelentkezési felület
A| A_moderate | admin lehetőségek vicc feltöltések módosítására, törlésére
A| A_supervise | basic és approved userek felülvizsgálatának lehetősége
U| u_browse | vicc kategória böngészése
U| u_search | vicc keresése
U| u_purchase | premium csomag megvásárlása
U| u_report | vicc jelentése
U| u_share | kiválasztott vicc megosztása


### Nem-funkcionális követelmények
Követelmény azonosító | Leírás
----------------------|-------
passw_enc | jelszavak titkosítása
user_data_scope | bármely user csak a saját adataihoz fér hozzá 
anonym_rating | vicceket értékelhetik

## Megfeleltetés	
- Prémium vásárlása(reklámmentesség) (u_purchase)
- A vicceket az adminok módosíthatják, publikálhatják, valamint törölhetik (A_moderate)
- Admin oldal fenntartása, ahol lehetőségük van a felhasználók felülvizsgálatára(A_login, A_supervise)
- Kereső funkció és kategória szerint is szűkíteni az opciókat(u_browse, u_search)
- Lehetőség legyen a viccek jelentésére, megosztására(u_report, u_share)
- Felhasználók adatainak biztonságos kezelése(passw_enc, user_data_scope)
- A vicceket képesek legyenek értékelni(anonym_rating)

## Fogalomszótár
	PHP: A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. embedded into HTML.
	HTML: A HTML egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C támogatásával.
	CSS: A CSS a számítástechnikában egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le.
	JavaScript: A JavaScript programozási nyelv egy objektumorientált, prototípus alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.
	Website: A weblap (más szóval weboldal) egy olyan számítógépes dokumentum, mely megfelel a World Wide Web számára, és alkalmas arra, hogy egy webböngésző megjelenítse.
	Bug: A bug a számítógépes programhiba elterjedt elnevezése. Előfordulásakor a számítógépes szoftver hibás eredményt ad, vagy a tervezettől eltérően viselkedik. 
	BackEnd: A back-end réteg feladata a front-end réteg felől érkező adatok feldolgozása, ill. a keletkezett eredmény a front-end számára történő visszajuttatása.
	FrontEnd: A front-end réteg feladata a rendszerből kijutó adatok prezentálása, illetve a bejövő adatok fogadása a felhasználó vagy a csatlakoztatott rendszer felől.
	Beta: A béta verziójú programokon általában már csak apró fejlesztéseket, bővítéseket hajtanak végre, és a módosítások legnagyobb része inkább a hibák javítására és kompatibilitási problémák megoldására korlátozódik.
	Alpha: Az alfa verziójú programok általában még erősen fejlesztési fázisban vannak, funkciókészletük nem végleges, és számos szoftverhibával rendelkeznek.

## **Vágyálom rendszer**

Minél gördülékenyebb és egyszerű weboldal fejlesztése, folyamatos adatbázis frissítés az oldalon tárolt viccekkel kapcsolatban. A precíz, és bizalomgerjesztő megjelenés illetve a felhasználó első benyomásra megbízzon az oldal
hitelességében. Frissítés és karbantartás napi rendszerességgel.

## **Funkció**
A követelmény specifikácíóba felsorolt követelmények vizsgálata. A követelményben kért admin és user funkciók teljes
mértékben megoldhatóak. A weboldalon a bejelentkezés úgy lesz megoldva, hogy ha egy sima felhasználó belép a regisztrált
adataival akkor user felületet kap, ugymond a default felhasználó felületet. Míg ha egy admin felhasz. és jelszó párossal lépünk be
akkor megjelenik az admin panel is, ahol tudjuk felügyelni a dolgokat. Az adminnak lehetősege lesz az adatbázis módosításásra,
a feltöltött vicc publikálására és törlésére.
Továbbá elérhető lesz egy kereső, ahová a felhasználó csak beirja a keresni kívánt kulcsszavakat.
Biztosítva lesz továbbá az is, hogy egy adott felhasználó csakis a saját fiókjához férjen hozzá, így megszüntetve komplikációkat.
A regisztrál felhasználó és jelszó páros bizalommal lesz kezelve, illetve a jelszó titkosítás is a lehető legbiztonságosabb módon
fog megtörténni.

## **Használati esetek**
### **Aktorok azonosítása**
Weboldalunkon 2db aktort tartunk számon. Az egyik aktor maga a felhasználó, aki vicceket szeretne olvasni, a másik
aktor pedig az admin, aki ezeknek a folyamatoknak a helyes müködéséért felel. Plusz felügyeli a weboldal helyes müködését.

	- Admin
	- Felhasználó
	
### **Használati esetek azonosítása**
A felhasználónak olyan funkciói vannak amik csakis rá vonatkoznak. Ha a felhasználó sikeresen belépett a weboldalra akkor máris történt egy 
hitelesítés, amely kapcsolódik az adatbázishoz. Az adatbázis kikeresi a felhasználónévhez tartozó jelszót és ha egyezik akkor beengedi a felhasználót.
Amennyiben a felhasználó elüti vagy rosszul gépeli be a jelszavát vagy felhasználóját, ebben az esetben a megírt funkciók segítségével figyelmeztetjük
a felhasználót, mivel az adatbázisban tárolt adatok nem egyeznek meg a felhasználó által begépelt adatokkal.
A regisztráció annyiban különbözik, hogy ott a felhasználó által begépelt adatokat fogja az adatbázisunk lementeni.
A menük kezelése is egy fontos lépcső, a menükre kattintva a felhasználó különböző részeit éri el a weboldalunknak.
Az egyes kategóriákra kattintva a felhasználó hozzáférhet a megnevezett téma alatt leledző tréfákhoz. 

Az adminok funkciói konkrétan a mindenhez való hozzáférés. Az adminok kapcsolatban állnak az összes végbement, illetve végrehajtásra várakozó 
funkciókkal, műveletekkel.