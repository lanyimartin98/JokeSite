JokeSite követelményspecifikáció


**Áttekintés**
Célunk egy olyan weboldal létrehozása, ahol egy átlagos felhasználó kényelmesen és egyszerűen tud az általa kiválasztott kategóriában viccet olvasni.
Az oldalon minden felhasználó kedve szerint böngészhet az aktuálisan elérhető viccek között. Miután megtalálta a számára kedvező viccet, lehetősége lesz a vicc megosztására. Legfőbb szempontunk az, hogy az oldalunk a lehető legbiztonságosabb és legmegbízhatóbb legyen.


**Vágyálom rendszer**
Minél gördülékenyebb és egyszerű weboldal fejlesztése, folyamatos adatbázis frissítés az oldalon tárolt viccekkel kapcsolatban. A precíz, és bizalomgerjesztő megjelenés illetve a felhasználó első benyomásra megbízzon az oldal
hitelességében. Frissítés és karbantartás napi rendszerességgel.


**Jelenlegi helyzet**
A klasszikus viccoldalak mára leszállóágra jutottak, szeretnénk a saját belátásaink szerint egy vadonatúj tréfaoldalt/napi kedvderítőt létrehozni.


//**Jelenlegi üzleti folyamatok modellje**
### Felhasználók vicc olvasása
1. Felkeres egy keresőmotoron egy viccportált

2. Rákeres egy viccre amelyet szeretne elolvasni, vagy elolvas egy az oldalon generált viccet, vagy választ a kategóriák közül

3. Megveszi a premium verziót, mellyel nem jelennek meg hirdetések az oldalon.


//**Igényelt üzleti folyamatok modellje**
1. Egy olyan szoftver fejlesztése amely segítségével bárhonnan intézhető a jegy vásárlás, valamint foglalás.
2. Segítségével könnyen nyomon követhető a jelenleg lefoglalt helyek száma, helye és ideje.
3. Biztonságosan intézhető banki átutalás, esetleg bevásárlókosár használata.
4. Használata regisztrációhoz között, az ügyfél fenntartja a jogot, hogy a foglalásokat és vásárlásokat bármikor megszüntetheti, így admin oldal készítése is elvárt.


## **Követelmény lista**
### Követelmény csoportok
- A : admin felületre vonatkozó követelmények
- U :  userre vonatkozó követelmények


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
anonym_rating | a viccek értékelése 




## **Fogalom szótár**
- admin: 
        - Adminisztrátor, mindenre van ráhatása, bármit módosíthat, szabad keze van az alkalmazás egésze felett.
- user:
        - Felhasználó, aki csak használja az alkalmazás nyújtotta lehetőségeket, tud viccet olvasni, megosztani, keresni.